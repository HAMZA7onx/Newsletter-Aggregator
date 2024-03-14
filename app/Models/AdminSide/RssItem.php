<?php

namespace App\Models\AdminSide;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RssItem extends Model
{
    protected $table = 'rss_items';
    use HasFactory;

    protected $fillable = [
        'rss_id',
        'name',
        'link',
        'description',
        'category',
        'trend',
        'image',
        'slug'
    ];

    public function scopeSearch($query, $value)
    {
        $query->where('name', 'like', "%{$value}%");
    }
    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'rss_item_id', 'user_id');
    }
}
