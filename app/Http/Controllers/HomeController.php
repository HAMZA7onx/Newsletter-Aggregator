<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminSide\RssItem;
use App\Models\ItemComment;
use App\Models\AdminSide\UserFavorite;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Fetch RSS items from the database
        $rssItems = RssItem::paginate(30);

        // Pass the RSS items to the view
        return view('UserSide.home', compact('rssItems'));
    }
    public function favorites()
    {
       // Get the current user's ID (assuming you have authenticated users)
    $userId = auth()->id();

    // Retrieve the RSS items that the user has favorited
    $userFavorites = UserFavorite::where('user_id', $userId)->pluck('rss_item_id');

    // Fetch RSS items based on the user favorites
    $userFavoriteRssItems = RssItem::whereIn('id', $userFavorites)->get();


    return view('UserSide.favorite', compact('userFavoriteRssItems'));
    }

    public function newsDetail($id,$slug)
    {
        // Assuming RssItem model represents a news item
        $newsItem = RssItem::findOrFail($id);

        $comments = ItemComment::where('item_id', $id)->get();
        // Pass the news item to the view
        return view('UserSide.newsDetail', compact('newsItem','comments'));
    }

    public function tendance()
    {
        $rssItems = RssItem::latest()->take(10)->get();

// Pass the RSS items to the view
        return view('UserSide.tendance', compact('rssItems'));
    }
}
