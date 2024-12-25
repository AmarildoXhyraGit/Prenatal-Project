<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Category;
Use App\Models\Item;
Use App\Models\ShoppingCart;
use Illuminate\Support\Facades\DB;
class WelcomeController extends Controller
{
    public function index(Request $req){  
        if($req->input('search')!=null){
        $query=$req->input('search');
        $search=Category::join('item_categories', 'categories.c_id', '=', 'item_categories.category_id')
        ->join('items', 'item_categories.item_id', '=', 'items.i_id')->where('title','LIKE',"%{$query}%")->whereColumn('i_id','i_parent_id')->paginate(15)->withQueryString();  
     }
        else{
            $search=Item::where('title','LIKE',"*****************")->paginate(12)->withQueryString();
            $query=null;
        }     
        $i=array();
    $categories = Category::whereColumn('c_id','c_parent_id')->get();
    $categorieslimit = Category::whereColumn('c_id','c_parent_id')->take(8)->get();
    $itemc = Category::join('item_categories', 'categories.c_id', '=', 'item_categories.category_id')
    ->join('items', 'item_categories.item_id', '=', 'items.i_id')->paginate(664)->unique('marche');
    $countcartitems=count(ShoppingCart::all());
////////////////////////////////////////////////////////////////////////////////////////////////////Products in ShowCase
    $itemca = Category::join('item_categories', 'categories.c_id', '=', 'item_categories.category_id')
    ->join('items', 'item_categories.item_id', '=', 'items.i_id')->orderBy('price', 'desc')->first();
    $itemec = Category::join('item_categories', 'categories.c_id', '=', 'item_categories.category_id')
    ->join('items', 'item_categories.item_id', '=', 'items.i_id')->orderBy('price', 'asc')->first();
    $itemr = Category::join('item_categories', 'categories.c_id', '=', 'item_categories.category_id')
    ->join('items', 'item_categories.item_id', '=', 'items.i_id')->first();
 ////////////////////////////////////////////////////////////////////////////////////////////////////Display All  subcategories
  $cat = Category::where('c_id','1154')->first();
  $itemforcategory=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')->join('categories',  'item_categories.category_id', '=','categories.c_id')->wherecolumn('i_id','i_parent_id')->where('c_id','1154')->take(2)->get();
$categoryc = Category::where('c_parent_id',$cat->c_id)->get(); 
foreach($categoryc as $c){
  $categoryp[] =[Category::where('c_parent_id',$c->c_id)->get()];}
$coll=collect($categoryp);
$categorychild=null;
/////////////////////////////////////////////////////////////////////////
    return view('Welcome/Welcome' , ['categories'=>$categories,'categorieslimit'=>$categorieslimit,'itemc'=>$itemc,'itemca'=>$itemca,'itemec'=>$itemec,'itemr'=>$itemr,'i'=>$i,'itemca'=>$itemca,'itemc'=>$itemc,'itemr'=>$itemr,'search'=>$search,'query'=>$query,'countcartitems'=>$countcartitems,'categoryc'=>$categoryc,'coll'=>$coll,'itemforcategory'=>$itemforcategory,'categorychild'=>$categorychild]);

}
}
