<?php

namespace App\Livewire;

use App\Mail\NewRssAdded;
use App\Models\AdminSide\Category;
use App\Models\AdminSide\RssItem;
use App\Models\AdminSide\Rsslist;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use SimpleXMLElement;

class RssPrompt extends Component
{
    public $rssLink;

    public function render()
    {
        return view('livewire.rss-prompt');
    }

    protected function rules()
    {
        return [
            'rssLink' => ''
        ];
    }

    public function storeRss(Request $request)
    {
        $rssLink = trim($this->rssLink);

        // Check if the RSS link already exists in the rsslist table
        $existingRss = Rsslist::where('name', $rssLink)->first();
        if ($existingRss) {
            return redirect()->back()->with('error', 'RSS link already exists 🤷‍♀️');
        }

        try {
            // Attempt to fetch XML data from the RSS link
            $response = Http::get($rssLink);

            // Check if the response status is not successful
            if (!$response->successful()) {
                throw new \Exception('Failed to fetch XML data from the RSS link');
            }

            $newRssLink = Rsslist::create([
                'name' => $rssLink
            ]);

            // Parse XML data
            $xmlData = $response->body();
            $xml = new SimpleXMLElement($xmlData);

            // Iterate over each item in the XML and store in the 'rss_items' table
            foreach ($xml->channel->item as $item) {
                $title = (string) $item->title;
                $link = (string) $item->link;
                $description = (string) $item->description;

                $category = $this->matchCategory($description);

               

                $slug = Str::slug($title);
                
                RssItem::create([
                    'rss_id' => $newRssLink->id,
                    'name' => $title,
                    'link' => $link,
                    'description' => $description,
                    'category' => $category,
                    'image' => 'https://source.unsplash.com/900x900/?' . $title,
                    'slug' => $slug
                ]);

            }
            
            // Send email to all users
            $users = User::all(); // Assuming you have a User model
            foreach ($users as $user) {
                Mail::to($user->email)->send(new NewRssAdded($newRssLink));
            }

            return redirect()->back()->with('success', 'RSS items stored successfully 👍');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to store RSS items: ' . $e->getMessage());
        }
    }

    // At the top of your class, declare a private property to store categories
    private $categories;

    // Modify the matchCategory function to fetch and cache categories if not already fetched
    private function matchCategory($description)
    {
        // Fetch categories if not already fetched
        if (!$this->categories) {
            $this->categories = Category::all();
        }

        // Convert description to lowercase for case-insensitive comparison
        $description = strtolower($description);

        // Check if any keyword appears in the description (case-insensitive)
        foreach ($this->categories as $category) {
            // Convert category name to lowercase for comparison
            $categoryName = strtolower($category->name);

            if (stripos($description, $categoryName) !== false) {
                return $category->name; // Return the category name if a keyword is found
            }
        }

        // If no matching category is found, default to 'General'
        return 'General';
    }


    public function addToFavorites($rssItemId)
    {
        $user = Auth::user();
        $user->favorites()->attach($rssItemId);

        return redirect()->back()->with('success', 'Item added to favorites successfully');
    }

    public function removeFromFavorites($rssItemId)
    {
        $user = Auth::user();
        $user->favorites()->detach($rssItemId);

        return redirect()->back()->with('success', 'Item removed from favorites successfully');
    }
    public function resetInput()
    {
        $this->rssLink = '';

    }
}
