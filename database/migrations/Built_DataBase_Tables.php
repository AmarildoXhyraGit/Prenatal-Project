<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_ids', function (Blueprint $table) {
            $table->id('i_parent_id');           
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id('c_id');
            $table->text('c_name'); 
            $table->text('c_parent_id'); 
        });
        Schema::create('items', function (Blueprint $table) {
            $table->id('i_id');
            $table->text('mpn');           
            $table->float('price')->nullable()??NULL;   
            $table->float('sale_price')->nullable()??NULL;          
            $table->float('vip_price')->nullable()??NULL; 
            $table->text('stock');  
            $table->text('availability'); 
            $table->text('taglia');  
            $table->unsignedBigInteger('i_parent_id');    
            $table->text('title');        
            $table->text('description'); 
            $table->text('link'); 
            $table->text('image_link');   
            $table->text('product_type');                
            $table->text('eta'); 
            $table->text('marche');      
            $table->text('genere');
            $table->text('personaggi');  
            $table->text('colore');
            $table->foreign('i_parent_id')->references('i_parent_id')->on('parent_ids')->onDelete('cascade');
        });
        Schema::create('taglias', function (Blueprint $table) {
            $table->id();
            $table->text('taglia');      
        });
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->unsignedBigInteger('i_parent_id');
            $table->foreign('i_parent_id')->references('i_parent_id')->on('items')->onDelete('cascade');     
        });
        Schema::create('item_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('item_id');
            $table->foreign('category_id')->references('c_id')->on('categories')->onDelete('cascade');
            $table->foreign('item_id')->references('i_id')->on('items')->onDelete('cascade');
            $table->timestamps();
        });
        //ShoppingCart
        Schema::create('shopping_carts', function (Blueprint $table) {
            $table->id()->nullable()??NULL; 
            $table->text('item_id')->nullable()??NULL; 
            $table->text('image_link')->nullable()??NULL; 
            $table->text('title')->nullable()??NULL; 
            $table->text('taglia')->nullable()??NULL; 
            $table->integer('quantity')->nullable()??NULL; 
            $table->float('price')->nullable()??NULL; 
            $table->float(('vip_price'))->nullable()??NULL; 
            $table->integer('stock')->nullable()??NULL; 
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
