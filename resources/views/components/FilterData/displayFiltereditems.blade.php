@extends('layout.app')
@auth
<div class="mt-28"></div>
    @endauth
{{View::make('components/DisplayData/DisplayMainCategories')->with('categories',$categories)->with('countcartitems',$countcartitems)->with('coll',$coll)->with('categoryc',$categoryc)->with('itemforcategory',$itemforcategory)->with('categorychild',$categorychild)}}
{{View::make('components/DisplayData/categoriessubcategorieslink')->with('categorygg',$categorygg)->with('categoryg',$categoryg)->with('categoryparent',$categoryparent)->with('categorychild',$categorychild)->with('items',$items)}}
{{View::make('components/FilterData/filterdesktop')->with('genere',$genere)->with('marche',$marche)->with('colore',$colore)->with('categorychild',$categorychild)}}
{{View::make('components/FilterData/filtermobile')->with('genere',$genere)->with('marche',$marche)->with('colore',$colore)->with('categorychild',$categorychild)}}
<div class="mt-5">

</div>
@if($ag !=null)
Genere:
@foreach($ag as $i)
<div class="inline-flex border-2 border-bgray rounded-full items-center ml-2 pl-2 pr-2">
    <div class="pl-1 pr-2">{{$i}}</div> 
    <a href="/">
        <button class="font-semibold text-lg border-blue text-pink hover:text-red-200  rounded-full  cursor-pointer w-1 h-1 text-center   flex items-center justify-center pl-1 pr-1 ">
    x
     </button>
    </a>
</div>
@endforeach
@endif
@if($am !=null)
Marche: 
@foreach($am as $i)
<div class="inline-flex border-2 border-bgray rounded-full items-center ml-2 pl-2 pr-2">
    <div class="pl-1 pr-2">{{$i}}</div>
     <a href="/">
        <button class="font-semibold text-lg border-blue text-pink hover:text-red-200  rounded-full  cursor-pointer w-1 h-1 text-center   flex items-center justify-center pl-1 pr-1">
   x
     </button>
    </a>
</div>
@endforeach
@endif
@if($ac !=null)
Colore:
@foreach($ac as $i)
<div class="inline-flex border-2 border-bgray rounded-full items-center ml-2 pl-2 pr-2">
    <div class="pl-1 pr-2">{{$i}}</div> 
    <a href="/">
        <button class="font-semibold text-lg border-blue text-pink hover:text-red-200  rounded-full  cursor-pointer w-1 h-0.5 text-center   flex items-center justify-center pl-1 pr-1">
    x
     </button>
    </a>
</div>
@endforeach
@endif
@if($inputprice1 !=null && $inputprice2 !=null)
<div class="inline-flex border-2 border-bgray rounded-full items-center ml-2 pl-2 pr-2">
    <div class="pl-1 pr-2">Prezzo: €{{$inputprice1}} - €{{$inputprice2}}</div> 
    <a href="/">
        <button class="font-semibold text-lg border-blue text-pink hover:text-red-200  rounded-full  cursor-pointer w-1 h-0.5 text-center   flex items-center justify-center pl-1 pr-1">
    x
     </button>
    </a>
</div>
@endif
<div class="grid lg:grid-cols-3  grid-cols-2 xl:grid-cols-4 mt-10">
    @foreach($itemc as $item)
    <div class="w-40 md:w-80 md:hover:scale-105 md:ease-in duration-500 md:hover:shadow-md hover:z-30 hover:shadow-black">   
     <a href="http://127.0.0.1:8000/cat/{{$categorychild->c_id}}/parentc/{{$item->i_parent_id}}">
            <div class="border border-bgray h-48 md:h-[400px] w-40 md:w-80 mt-2"> 
            <img src="{{$item->image_link}}">
        </div>
        </a>
        <div class="inline-flex items-center pt-3">
            @if($item->sale_price!=$item->price)
        <div class="text-pink line-through text-xs sm:text-lg">€{{$item->sale_price}}</div>@endif
        <div class="text-pink pl-3 text-xs sm:text-lg">€{{$item->price}}</div>
        @if($item->vip_price!=0)
        <div class="inline-flex items-center ">
     <div class="text-green text-xs pl-1 pr-1 sm:pl-3 sm:pr-3"><hr class="sm:w-12 w-3 "></div>
        <div class="text-green  text-xs sm:text-lg">€{{$item->vip_price}}</div>
        <div class="text-green pl-1 sm:pl-3 text-xs w-4 sm:w-auto">CON VIP CARD</div></div> @endif </div>
    <div>
        <span class="uppercase font-light text-sm leading-none block mt-2 pl-1">{{$item->marche}}</span>
        <div class=" w-40 md:w-80 text-sm md:text-md mt-1 pl-1">{{$item->title}}</div>
    </div>
    {{View::make('components/ShoppingCart/addtocart')->with('item',$item)}}
    </div>
    @endforeach
</div>
<div class="mt-10 mb-20">
    {{$itemc->links('pagination::tailwind')}}
    </div>
<x-email/>
{{View::make('components/DisplayData/unorderlist')->with('categorieslimit',$categorieslimit)}}
<x-footer/>