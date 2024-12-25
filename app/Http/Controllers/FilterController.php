<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Item;
Use App\Models\Category;
Use App\Models\ItemCategory;
Use App\Models\ShoppingCart;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
     
        public function filter($category,request $request,$type){
       $itemc=null;
  $items = Category::all()->where('c_parent_id', $category);
  //////////////////////////////////////////////Categories & Subcateogries
   $categorychild = Category::where('c_id',$category)->first(); 
   $categoryparent = Category::where('c_parent_id',$categorychild->c_parent_id)->first();
   $categoryg = Category::where('c_id',$categoryparent->c_parent_id)->first();
   $categorygg = Category::where('c_id',$categoryg->c_parent_id)->first();
   $categories = Category::whereColumn('c_id','c_parent_id')->get();
   /////////////////////////////////////////////////////////Display base items categories
   $genere=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')->join('categories',  'item_categories.category_id', '=','categories.c_id')->select('genere')->where('c_id',$category)->groupby('genere')->get();
  $marche=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')->join('categories',  'item_categories.category_id', '=','categories.c_id')->select('marche')->where('c_id',$category)->groupby('marche')->get();
  $colore=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')->join('categories',  'item_categories.category_id', '=','categories.c_id')->select('colore')->where('colore','!=','null')->where('c_id',$category)->groupby('colore')->get();
  $price=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')->join('categories',  'item_categories.category_id', '=','categories.c_id')->select('price')->where('price','!=','null')->where('c_id',$category)->groupby('price')->get();
  $categorieslimit = Category::whereColumn('c_id','c_parent_id')->take(8)->get();
  $countcartitems=count(ShoppingCart::all());
  /************************************************************************************************* */
          $itemu=array();
          $inputgenere = $request->input('gen');
          $inputcolore = $request->input('col');
          $inputmarche = $request->input('cat');
       
        $ag=null;
        $am=null;
        $ac=null;
        $inputprice1=null;
        $inputprice2=null;
          $inputprice1 = floatval($request->input('price1'));
          $inputprice2 = floatval($request->input('price2'));
         
          if($inputgenere!=null){
            $ag=collect($inputgenere);
          foreach($inputgenere as $inp)
          {
            $itemc=Category::join('item_categories', 'categories.c_id', '=', 'item_categories.category_id')
            ->join('items', 'item_categories.item_id', '=', 'items.i_id')->wherecolumn('i_id','i_parent_id')->where('c_id',$category)->where('genere',$inp)->paginate(12)->withQueryString();
          } 
          }
          if($inputcolore!=null){
            $ac=collect($inputcolore);
          foreach($inputcolore as $inp)
          {
            $itemc=Category::join('item_categories', 'categories.c_id', '=', 'item_categories.category_id')
            ->join('items', 'item_categories.item_id', '=', 'items.i_id')->wherecolumn('i_id','i_parent_id')->where('c_id',$category)->where('colore',$inp)->paginate(12)->withQueryString();
          }}
          if($inputmarche!=null){
            $am=collect($inputmarche);
          foreach($inputmarche as $inp)
          {
            $itemc=Category::join('item_categories', 'categories.c_id', '=', 'item_categories.category_id')
            ->join('items', 'item_categories.item_id', '=', 'items.i_id')->wherecolumn('i_id','i_parent_id')->where('c_id',$category)->where('marche',$inp)->paginate(12)->withQueryString();
          }
        } 
        if($inputprice1!=null && $inputprice2!=null){
        
            $itemc=Category::join('item_categories', 'categories.c_id', '=', 'item_categories.category_id')
            ->join('items', 'item_categories.item_id', '=', 'items.i_id')->wherecolumn('i_id','i_parent_id')->where('c_id',$category)->whereBetween('price', [$inputprice1, $inputprice2])->orderBy('price', 'ASC')->paginate(12)->withQueryString();
          }
        /********************************************************************************* */
        if($type=='piucaro'){
          $itemc=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')
          ->join('categories',  'item_categories.category_id', '=','categories.c_id')->wherecolumn('i_id','i_parent_id')->where('c_id',$category)->orderBy('price', 'DESC')->paginate(12)->withQueryString();
                 }     
             if($type=='piueconomico'){
                  $itemc=  Item::join('item_categories','items.i_id','=', 'item_categories.item_id')
                  ->join('categories',  'item_categories.category_id', '=','categories.c_id') ->wherecolumn('i_id','i_parent_id')->where('c_id',$category)->orderBy('price', 'ASC')->paginate(12)->withQueryString();
                }    
///////////////////////////////////////////////////////////////////Display All  subcategories
  $cat = Category::where('c_id','1154')->first();
  $itemforcategory=Item::join('item_categories','items.i_id','=', 'item_categories.item_id')->join('categories',  'item_categories.category_id', '=','categories.c_id')->wherecolumn('i_id','i_parent_id')->where('c_id','1154')->take(2)->get();  
$categoryc = Category::where('c_parent_id',$cat->c_id)->get(); 
foreach($categoryc as $c){
  $categoryp[] =[Category::where('c_parent_id',$c->c_id)->get()];}
$coll=collect($categoryp);
/////////////////////////////////////////////////////////////////////////    
          return view('components/FilterData/displayFiltereditems', compact('itemc','categories','categorieslimit','categorygg','categoryg','categoryparent','categorychild','items','marche','colore','genere','price','am','ac','ag','inputprice1','inputprice2','countcartitems','categoryc','coll','itemforcategory'));
       
}}
