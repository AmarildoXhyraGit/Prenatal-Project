@extends('layout.app')
{{-- Displaying items--}} 

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
        <div class="text-green text-xs sm:text-lg">€{{$item->vip_price}}</div>
        <div class="text-green pl-1 sm:pl-3 text-xs w-4 sm:w-auto ">CON VIP CARD</div></div> @endif </div>
    <div>
        <span class="uppercase font-light text-sm leading-none block mt-2 pl-1">{{$item->marche}}</span>
        <div class=" w-40 md:w-80 text-sm md:text-md mt-1 pl-1">{{$item->title}}</div>
    </div>
    {{View::make('components/ShoppingCart/addtocart')->with('item',$item)->with('categorychild',$categorychild)}}
    </div>
    @endforeach
</div>
    <div class="mt-10 mb-20">
    {{$itemc->links('pagination::tailwind')}}
    </div>