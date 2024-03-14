<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemComment extends Model
{
    protected $table = 'itemcomments';

    protected $fillable = ['item_id', 'msg','msgsender','slug'];

   
}
