@extends('layout.app')
    @section('content')
    {{View::make('components/DisplayData/DisplayMainCategories')->with('categories',$categories)->with('countcartitems',$countcartitems)->with('coll',$coll)->with('categoryc',$categoryc)->with('itemforcategory',$itemforcategory)->with('categorychild',$categorychild)}}
    {{View::make('components/DisplayData/categoriessubcategorieslink')->with('categorygg',$categorygg)->with('categoryg',$categoryg)->with('categoryparent',$categoryparent)->with('categorychild',$categorychild)->with('items',$items)}}
    {{View::make('components/ItemsDetails/itemsdetails')->with('categorygg',$categorygg)->with('categoryg',$categoryg)->with('categoryparent',$categoryparent)->with('categorychild',$categorychild)->with('items',$items)->with('item',$item)->with('images',$images)->with('c',$c+1)}}
    <x-categoriaperatributi7/>
    <x-itemscharacteristics/>    
    <x-email/>
    {{View::make('components/DisplayData/unorderlist')->with('categorieslimit',$categorieslimit)}}
    <x-footer/>
  

    
   
