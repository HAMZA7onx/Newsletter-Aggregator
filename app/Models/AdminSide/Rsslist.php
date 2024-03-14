<?php

namespace App\Models\AdminSide;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdminSide\RssItem;

class Rsslist extends Model
{
    protected $table = 'rsslist';
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function scopeSearch($query, $value) {
        $query->where('name', 'like', "%{$value}%");
    }

    public function rssItems()
    {
        return $this->hasMany(RssItem::class, 'rss_id');
    }
}
