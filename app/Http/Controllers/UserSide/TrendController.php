<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminSide\RssItem;

class TrendController extends Controller
{
    public function index() {
        $rssItems = RssItem::latest()->where('trend', 'active')->get();
        return view('UserSide.tendance', compact('rssItems'));
    }
}
