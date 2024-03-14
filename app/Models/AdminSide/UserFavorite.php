<?php

namespace App\Models\AdminSide;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'rss_item_id'];

    // Define the relationship with the RSS item
    public function rssItem()
    {
        return $this->belongsTo(RssItem::class);
    }
}
