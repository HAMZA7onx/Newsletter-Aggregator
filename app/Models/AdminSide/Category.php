<?php

namespace App\Models\AdminSide;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function rssItems()
    {
        return $this->hasMany(RssItem::class);
    }
}
