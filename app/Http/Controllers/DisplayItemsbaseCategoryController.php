<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Category;
Use App\Models\Item;
Use App\Models\Marche;
Use App\Models\Colore;
Use App\Models\Gallery;
Use App\Models\ShoppingCart;
use Illuminate\Support\Facades\DB;

class DisplayItemsbaseCategoryController extends Controller
{
    public function index($category,Request $request)
    {
$items = Category::all()->where('c_parent_id', $category);
$itemc = Category::join('item_categories', 'categories.c_id', '=', 'item_categories.category_id')
   ->join('items', 'item_categories.item_id', '=', 'items.i_id')->where('c_id',$category)->wherecolumn('i_id','i_parent_id')->paginate(12)->withQueryString();
   //////////////Categories & Subcateogries
   $categorychild = Category::where('c_id',$category)->first(); 
   $categoryparent = Category::where('c_parent_id',$categorychild->c_parent_id)->first();
   $categoryg = Category::where('c_id',$categoryparent->c_parent_id)->first();
   $categorygg = Category::where('c_id',$categoryg->c_parent_id)->first();
   $categories = Category::whereColumn('c_id','c_parent_id')->get();
   ////////////////Display base items categories
   $genere=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')->join('categories',  'item_categories.category_id', '=','categories.c_id')->select('genere')->where('c_id',$category)->groupby('genere')->get();
  $marche=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')->join('categories',  'item_categories.category_id', '=','categories.c_id')->select('marche')->where('c_id',$category)->groupby('marche')->get(); 
  $colore=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')->join('categories',  'item_categories.category_id', '=','categories.c_id')->select('colore')->where('colore','!=','null')->where('c_id',$category)->groupby('colore')->get();
  $categorieslimit = Category::whereColumn('c_id','c_parent_id')->take(8)->get();
  $countcartitems=count(ShoppingCart::all());
  /************************************************************************************************* */
  $images=Gallery::all();

///////////////////////////////////////////////////////////////////Display All  subcategories
  $cat = Category::where('c_parent_id',$category)->first();
      $categoryp=array();
      if($cat!=null){  
  $categoryc = Category::where('c_parent_id',$cat->c_id)->get(); 
  foreach($categoryc as $c){
      $categoryp[] =[Category::where('c_parent_id',$c->c_id)->get()];}
    }
    else{
        $categoryc=null;  
    }
    if($categoryp!=null){
        $itemforcategory=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')->join('categories',  'item_categories.category_id', '=','categories.c_id')->wherecolumn('i_id','i_parent_id')->where('c_parent_id',$category)->take(2)->get(); 
    }
    else{
        $itemforcategory=null ;
    }
$coll=collect($categoryp);

/////////////////////////////////////////////////////////////////////////
   return view('components/DisplayItemsbaseCategories/mainprenatal', compact('categorychild','categorygg','categoryg','categoryparent','items','itemc','categories','genere','marche','colore','images','categorieslimit','countcartitems','categoryc','coll','itemforcategory'));        
            } 
}
