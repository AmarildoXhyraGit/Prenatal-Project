<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Item;
Use App\Models\Gallery;
Use App\Models\Category;
Use App\Models\ShoppingCart;
class ItemsDetailsController extends Controller
{
    public function index($category,$i_parent_id)
    {
        /////////////////////////////////////////////////////////////////Categories & Subcateogries
        $categorychild = Category::where('c_id',$category)->first(); 
        $categoryparent = Category::where('c_parent_id',$categorychild->c_parent_id)->first();
        $categoryg = Category::where('c_id',$categoryparent->c_parent_id)->first();
        $categorygg = Category::where('c_id',$categoryg->c_parent_id)->first();
        $categories = Category::whereColumn('c_id','c_parent_id')->get();
        $categorieslimit = Category::whereColumn('c_id','c_parent_id')->take(8)->get();
        ///////////////////////////////////////////////////////////////////
        $countcartitems=count(ShoppingCart::all());
        /*********************************************************************************** */       
$items = Item::where('items.i_id','!=', $i_parent_id)->where('items.i_parent_id','=', $i_parent_id)->get();
$item = Item::where('i_id', $i_parent_id)->first();
$images=Gallery::where('i_parent_id',$i_parent_id)->get();
$c=count($images);
///////////////////////////////////////////////////////////////////Display All  subcategories
$cat = Category::where('c_id','1154')->first();
$itemforcategory=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')->join('categories',  'item_categories.category_id', '=','categories.c_id')->wherecolumn('i_id','i_parent_id')->where('c_id','1154')->take(2)->get(); 
$categoryc = Category::where('c_parent_id',$cat->c_id)->get(); 
foreach($categoryc as $ca){
$categoryp[] =[Category::where('c_parent_id',$ca->c_id)->get()];}
$coll=collect($categoryp);
/////////////////////////////////////////////////////////////////////////
            return view('components/ItemsDetails/ItemsDetailsMain', compact('categorygg','categoryg','categoryparent','categorychild','items','item','images','c','categories','categorieslimit','countcartitems','categoryc','coll','itemforcategory'));
            }
}
