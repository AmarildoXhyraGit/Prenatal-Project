@extends('layout.app')
@auth
<div class="mt-24"></div>
    @endauth
{{View::make('components/DisplayData/DisplayMainCategories')->with('categories',$categories)->with('countcartitems',$countcartitems)->with('coll',$coll)->with('categoryc',$categoryc)->with('itemforcategory',$itemforcategory)->with('categorychild',$categorychild)}}
<div class="mt-48">
    {{View::make('components/DisplayData/search')->with('search',$search)->with('query',$query)}}
{{View::make('Welcome/productsshowcase')->with('itemca',$itemca)->with('itemec',$itemec)->with('itemr',$itemr)}}
</div>
 <div class="mt-5 ml-20 md:ml-96"> 
<a href="/cat/1119">
</a>
</div>
{{View::make('Welcome/displaymarche')->with('itemc',$itemc)}}
<x-email/>
{{View::make('components/DisplayData/unorderlist')->with('categorieslimit',$categorieslimit)}}
<x-footer/>