<?php

namespace App\Http\Controllers\AdminSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminSide\RssItem;
use App\Models\AdminSide\Rsslist;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function adminDash() {
        return view('AdminSide.main');
    }

    public function rssItems() {
        $rssItems = RssItem::latest()->get();
        return view('AdminSide.display-items', compact('rssItems'));
    }

    // for flowchart usage
    public function rssLists() {
        $rssLists = Rsslist::withCount('rssItems')->get();
        return response()->json($rssLists);
    }

    public function itemsByCategory()
    {
        $categoriesWithCounts = RssItem::select('category', DB::raw('count(*) as count'))
            ->groupBy('category')
            ->get();

        return response()->json($categoriesWithCounts);
    }

}
