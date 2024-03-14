<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemcommentsTable extends Migration
{
    public function up()
    {
        Schema::create('itemcomments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->text('msg');
            $table->timestamps();

            // Add foreign key constraint if needed
            // $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('itemcomments');
    }
}
