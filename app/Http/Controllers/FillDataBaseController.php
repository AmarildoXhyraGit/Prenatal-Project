<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Parent_id;
use App\Models\ItemCategory;
use App\Models\Taglia;

use Illuminate\Support\Facades\DB;

class FillDataBaseController extends Controller
{
    public function index(Request $req)
    {
       
        if($req->isMethod("POST")){

            $xmlDataString = file_get_contents(public_path('dentsu-feed.xml'));
            $xmlObject = simplexml_load_string($xmlDataString);
            $phpDataArray = $xmlObject->channel->item;
         
            $allCategoriesArray=array();
            $allparent_idsArray=array();
            $allimagesArray=array();
            $alltagliasArray=array();
            $item_idArray=array(); 
            $allitem_idArray=array(); 
            $galleryArray=array();

            if(count( $phpDataArray ) > 0){
                $dataArray = array();              
                foreach($phpDataArray as $index => $data){
                    //Items
                    $dataArray[] = [
                        "i_id"=>$data->id,
                        "mpn"=>$data->mpn,
                        "price" =>floatval($data->price),
                        "sale_price"=>floatval($data->price),
                        "vip_price"=>floatval($data->vip_price),
                        "stock"=>$data->stock,
                        "availability"=>$data->availability,  
                        "taglia"=>$data->taglia,
                        "i_parent_id"=>$data->parent_id,                    
                        "title"=>$data->title,
                        "description"=>$data->description,
                        "link"=>$data->link,
                        "image_link"=>$data->image_link,
                        "product_type"=>$data->product_type,
                        "eta"=>$data->eta,
                        "marche"=>$data->marche,
                        "genere"=>$data->genere,
                        "personaggi"=>$data->personaggi,
                        "colore"=>$data->colore,                       
                    ];                  
                    //CATEGORIES
                    $categoryArray=array();
                    $category1 = $data->categories->list->category1;
                    $category2 = $data->categories->list->category2;
                    $category3 = $data->categories->list->category3;
                    $category4 = $data->categories->list->category4;
                    $category1Found = FALSE;
                    $category2Found = FALSE;
                    $category3Found = FALSE;
                    $category4Found = FALSE;
                    //ItemCategory
                    $category1iFound = FALSE;
                    $category2iFound = FALSE;
                    $category3iFound = FALSE;
                    $category4iFound = FALSE;
                    //Categories
                    if(is_null($category1) or is_null($category1->id) ){
                        $category1Found = TRUE;                     
                    }
                    if(is_null($category2) or  is_null($category2->id) ){                    
                        $category2Found = TRUE;
                    }
                    if(is_null($category3) or  is_null($category3->id) ){                    
                        $category3Found = TRUE;
                    }
                    if(is_null($category4) or  is_null($category4->id)){                       
                        $category4Found = TRUE;
                    }
          //Categories - ItemCategories
                  if($category1Found === FALSE) {           
                        if($category1iFound === FALSE) {
                        $item_idArray[]=[
                            'category_id'=>$category1->id,
                             'item_id'=>$data->id,];
                             $allitem_idArray[]=[
                             'category_id'=>$category1->id,
                             'item_id' =>$data->id,];}}
                if($category2Found === FALSE) {           
                             if($category2iFound === FALSE) {
                             $item_idArray[]=[
                                'category_id'=>$category2->id,
                                   'item_id'=>$data->id,];
                                    $allitem_idArray[]=[
                                    'category_id'=>$category2->id,
                                         'item_id'=>$data->id,];}}
                if($category3Found === FALSE) {                    
                            if($category3iFound === FALSE) {
                            $item_idArray[]=[
                                'category_id'=>$category3->id,
                                     'item_id' =>$data->id,];
                                    $allitem_idArray[]=[
                                    'category_id'=>$category3->id,
                                        'item_id' =>$data->id,];}}               
                if($category4Found === FALSE) {                          
                            if($category4iFound === FALSE) {
                            $item_idArray[]=[
                        'category_id' => $category4->id,
                             'item_id' =>$data->parent_id,];
                            $allitem_idArray[]=[
                            'category_id'=>$category4->id,
                                'item_id' =>$data->id,];}
                            }
                            //ItemCategories
                    foreach($allitem_idArray as $index => $categoryData){
                        $idc = "$categoryData[category_id]";                     
                        $idi = "$categoryData[item_id]";
                           if($category1Found === FALSE){                     
                    if( $idi==$data->id){
                        $category1iFound=True;
                    }}
                        if($category2Found === FALSE){
                       
                    if( $idi==$data->id){
                        $category2iFound=True;
                    }}
                        if($category3Found === FALSE){
                       
                    if( $idi==$data->id){
                        $category3iFound=True;
                    }}
                        if($category4Found === FALSE){                     
                    if( $idi==$data->id){
                        $category4iFound=True;
                    }}}
                    //Categories
                    foreach($allCategoriesArray as $index => $categoryData){
                        $id = "$categoryData[c_id]";
                       if($category1Found === FALSE){
                        if($id == $category1->id){
                            $category1Found = TRUE;                          
                        }}
                        if($category2Found === FALSE){
                        if($id == $category2->id){
                          
                            $category2Found = TRUE;
                        }}
                        if($category3Found === FALSE){
                        if($id == $category3->id){                         
                            $category3Found = TRUE;
                        }}
                        if($category4Found === FALSE){
                        if($id == $category4->id){                         
                            $category4Found = TRUE;
                        }}
                    }
                    if($category1Found === FALSE) {                      
                        $categoryArray[] = [
                            "c_id"=>$category1->id,
                            "c_name"=>$category1->name,
                            "c_parent_id" => $category1->id,                          
                        ];
                        $allCategoriesArray[] = [
                            "c_id"=>$category1->id,
                            "c_name"=>$category1->name,
                            "c_parent_id" => $category1->id,                           
                        ];
                    }
                    if($category2Found === FALSE) {                     
                        $categoryArray[] = [
                            "c_id"=>$category2->id,
                            "c_name"=>$category2->name,
                            "c_parent_id" => $category1->id,                           
                        ];
                        $allCategoriesArray[] = [
                            "c_id"=>$category2->id,
                            "c_name"=>$category2->name,
                            "c_parent_id" => $category1->id,          
                        ];
          }
                    if($category3Found === FALSE) {                      
                        $categoryArray[] = [
                            "c_id"=>$category3->id,
                            "c_name"=>$category3->name,
                            "c_parent_id" => $category2->id,                         
                        ];
                        $allCategoriesArray[] = [
                            "c_id"=>$category3->id,
                            "c_name"=>$category3->name,
                            "c_parent_id" => $category2->id,   
                        ];
                 }                   
                    if($category4Found === FALSE) {                      
                        $categoryArray[] = [
                            "c_id"=>$category4->id,
                            "c_name"=>$category4->name,
                            "c_parent_id" => $category3->id,                           
                        ];
                        $allCategoriesArray[] = [
                            "c_id"=>$category4->id,
                            "c_name"=>$category4->name,
                            "c_parent_id" => $category3->id,                           
                        ];                
                                }         
/************************gallery */
$gallery1=$data->gallery;
    foreach($gallery1 as $index){
        foreach($index as $inx =>$galleryData){                 
            $galleryArray[] = [           
                "image"=>$galleryData,
                "i_parent_id"=>$data->id      
            ];
         }
    }
/************************ */
//Taglia
$tagliaArray=array();
$taglia = $data->taglia;
   //dump($parent_id);
   $tagliaArray[] = [
    "id"=>$data->id,
    "taglia"=>$data->taglia] ;
/************************ */
//PARENT_ID
$parent_idArray=array();
$parent_id = $data->parent_id;
$parent_idFound = FALSE;
if(is_null($parent_id)){
    $parent_idFound = TRUE; 
}
foreach($allparent_idsArray as $index => $parent_idData){
    $id ="$parent_idData[i_parent_id]";
    if($id== $parent_id){
        $parent_idFound = TRUE;     
    }}
    if($parent_idFound === FALSE) {
        $allparent_idsArray[] = [        
            "i_parent_id" => $parent_id,         
        ];                    
        $parent_idArray[] = [
            
            "i_parent_id" => $parent_id,          
        ];
    }  
    //FillDatebase
       Category::insert($categoryArray);
       Taglia::insert($tagliaArray);  
       Parent_id::insert($parent_idArray);    
    }  
       Item::insert($dataArray);
       ItemCategory::insert( $item_idArray);
       Gallery::insert($galleryArray);
//Fill  parent items  that does not  include information ,with information from child items
$item=DB::select('UPDATE items as i1 inner join items as i2 on i1.i_id=i2.i_parent_id and i2.price  !="0.00" set i1.price=i2.price');
$item=DB::select('UPDATE items as i1 inner join items as i2 on i1.i_id=i2.i_parent_id and i2.vip_price  !="0.00" set i1.vip_price=i2.vip_price');
$item=DB::select('UPDATE items as i1 inner join items as i2 on i1.i_id=i2.i_parent_id and i2.sale_price  !="0.00" set i1.sale_price=i2.sale_price');
$item=DB::select('UPDATE items as i1 inner join items as i2 on i1.i_id=i2.i_parent_id and i2.stock  !="" set i1.stock=i2.stock');


               return back()->with('success','Data saved successfully!');
            }
        }
//route in URL:        /filldatabase
        return view("databasefilling/filldatabase");
    }
}
