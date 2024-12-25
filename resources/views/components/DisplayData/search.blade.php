@extends('layout.app')
@if($query!=null)
<div class="border-2 border-bgray">
    <div class="p-6">
Search:<div class="inline-flex border-2 border-bgray rounded-full items-center ml-2 pl-2 pr-2"><div class="pl-1 pr-2">{{$query}}</div> <a href="/"><button class="font-semibold text-lg border-blue text-pink hover:text-red-200  rounded-full  cursor-pointer w-1 h-1 text-center   flex items-center justify-center pr-1 ">
    X
     </button></a></div>
<div class="grid  lg:grid-cols-3  grid-cols-2 xl:grid-cols-5  z-40 mb-10">
    @foreach($search as $item)
    <div class="w-10 md:hover:scale-105 md:ease-in duration-500 md:hover:shadow-md hover:z-30 hover:shadow-black">   
        <a href="http://127.0.0.1:8000/cat/{{$item->c_id}}/parentc/{{$item->i_parent_id}}"><div class="border border-bgray h-48 md:h-[300px] w-40 md:w-60 mt-2">
            <img src="{{$item->image_link}}"></div>
        </a>
        <div class="inline-flex items-center pt-3">
            @if($item->sale_price!=$item->price)
        <div class="text-pink line-through">€{{$item->sale_price}}</div>@endif
        <div class="text-pink pl-3 text-lg">€{{$item->price}}</div>
        @if($item->vip_price!=0)
        <div class="inline-flex items-center ">
     <div class="text-green text-xs pl-1 pr-1 sm:pl-3 sm:pr-3"><hr class="sm:w-12 w-3 "></div>
        <div class="text-green  text-lg">€{{$item->vip_price}}</div>
        <div class="text-green pl-1 sm:pl-3 text-xs w-4 sm:w-auto">CON VIP CARD</div></div> @endif </div>
    <div>
        <span class="uppercase font-light text-sm leading-none block mt-2 pl-1">{{$item->marche}}</span>
        <div class=" w-40 md:w-60 text-sm md:text-md mt-1 pl-1">{{$item->title}}</div>
    </div> 
    {{View::make('components/ShoppingCart/addtocart')->with('item',$item)}}
    </div>
    @endforeach
</div> 
{{$search->links('pagination::tailwind')}}
</div>
</div>
@endif
