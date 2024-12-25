@extends('layout.app')

 {{--Display Categories link--}}
 @auth
<div class="mt-40"></div>
@endauth
<div class="lg:inline-flex mt-5">
 <div>
<div class="hidden lg:block ml-10 lg:-ml-5">
    <div class="grid grid-cols-2">   
 @foreach($images as $image)
 <span class="border-2 border-bgray mr-10 mb-10  lg:mr-5 lg:mb-5">
  <img  src="{{$image->image}}" width="1000" height="1500">
</span>
 @endforeach 
  <span class="border-2 border-bgray mr-10 mb-10  lg:mr-5 lg:mb-5  "> 
    @if($item->image_link!=null)
    <img src="{{$item->image_link}}" width="1000" height="1500">
    @endif
  </span>
  @if($c%2!=0)
    <span class="border-2 border-bgray mr-10 mb-10  lg:mr-5 lg:mb-5  ">
      <img src="\img\p.png" width="1000" height="1500">
    </span>
  @endif
</div>
  </div>
 <!--Photo Slide-->
 <div class="block   lg:hidden">
{{View::make('components/ItemsDetails/photoslide')->with('items',$items)->with('item',$item)->with('images',$images)->with('c',$c+1)}}
</div>
</div>
<div>
 <div class="sm:ml-10 sm:mr-10 sm:text-sm lg:ml-5 lg:mr-5 ">
  <div class="ml-5 mr-5">
  <div class="uppercase font-light text-sm leading-none block mt-2">{{$item->marche}}</div>
    <div>@if($item->title!=null){{$item->title}}@endif</div>
    <div class="mt-10 sm:mt-5 lg:mt-2 mb-5 sm:text-sm">    
<div class="text-pink pb-2 text-5xl lg:text-2xl">€@if($item->price!=null){{$item->price}}@endif</div>
@if($item->vip_price!=0)
<hr class="text-green">
<div class="inline-flex items-center">
<div class="text-green pt-2 text-5xl lg:text-2xl">€{{$item->vip_price}}</div>
<div class="text-green pl-5 pt-1">CON VIP CARD</div>
<a href="">
<div class="pl-5 pt-1"><img src="\img\info.png"  width=20 >
</div></a>
@endif
</div>
    </div>
<div class="mb-14 sm:mb-6 lg:mb-3 text-left  ml -5 lg:w-80 w-80 md:w-11/12">
  @if($item->description!=null){{$item->description}}[+]
@endif</div>
  
  </div>
  <form action="{{ route('cart.store') }}" method="POST">
    @csrf
   @if($item->taglia!=null) 
  <div>
    <div class="inline-flex items-center">
    <div>Taglie</div>
    <x-guidaalletaglie/>
    <div class="p-10">
    <button type="button" onclick="toggletaglie('taglie-id')">
    <div class="underline">Guida alle taglie</div>
    </button>
  </div>
    </div>
    <div class="grid grid-cols-2  ">
      @foreach ($items as $item)
        <div class="font-normal text-xs md:text-base border text-center rounded-full cursor-pointer border-gray-400 mt-3 ml-2 w-auto">
         <input type="radio" value="{{$item->i_id}}" required name="taglia"> {{$item->taglia}} 
        </div>       
    @endforeach
  </div>
    </div>
   @endif 
  <script>
    function info() {
  var x ;
  x= document.getElementById("info");
  if (x.style.display === "block") {
    x.style.display = "none"; 
  } else {
    x.style.display = "block";
  }
  }
  </script>
    <div class="inline-block">
      <div ><button onclick="info()"><div class="inline-flex items-center"><div class="mt-5">+INFO PRODOTTO</div></div></button></div>    
          <div id="info" class=" hidden">
          <ul >
        @if($item->genere!=null)
            <li>Genre:{{$item->genere}}</li>@endif
              @if($item->colore!=null)
              <li>Colore:{{$item->colore}}</li>
                @endif      
              </ul>
      </div>
      </div>
      <div class="ml-5 mr-5 sm:text-sm">
        <div class="sm:ml-10 sm:mr-10">  
      <div class="text-center">
        @if($item->stock!=0)
        <div class="mt-5 ml-4  "> 
            <input type="hidden" value="{{$item->i_id}}" name="id">
            <input type="hidden" value="{{$item->image_link}}" name="image_link">
            <input type="hidden" value="{{$item->title}}" name="title">    
            <input type="hidden" value="{{$item->quantity}}"  name="quantity">
            <input type="hidden" value="{{$item->price}}"  name="price">
            <input type="hidden" value="{{$item->vip_price}}"  name="vip_price">
            <input type="hidden" value="{{$item->stock}}"  name="stock">
            <input type="hidden" value="1" name="quantity">
            <button class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-10 rounded-full w-72 h-9 text-sm" type="submit" >
              AGGIUNGI AL CARRELLO
            </button>
 </form>        
        </div>  
        @else
        <div class="mt-5 ml-4 ">
            <div class="text-white bg-bgray text-center pt-1 p-3 border-2 mt-5 mb-10 rounded-full w-72 h-9">
               Non Disponibile
            </div>
        </div>
        @endif
        <br>   
      <div class="inline-flex">
        <div>
          <img src="\img\heart.png"  alt="image" width="21"/>
      </div>
        <div class="pl-10">Aggiungi alla lista desideri</div>
      </div><br>  
      </div>
      </div>
      </div>   
      <div class="bg-graytransparent  mt-10 mb-10 sm:mt-5 sm:mb-5">
        <div class="inline-flex ml-10 mt-5">
          <div><svg xmlns="http://www.w3.org/2000/svg" width="21.77" height="21.772" viewBox="0 0 21.77 21.772">
            <path id="Path_202" data-name="Path 202" d="M13207.519,2586.62a1.423,1.423,0,1,0,1.738,1.01A1.425,1.425,0,0,0,13207.519,2586.62Zm-.7-8.13a1.419,1.419,0,1,0-2.742.73l1.462,5.48a1.419,1.419,0,1,0,2.743-.73Zm2.651,15.45a10.882,10.882,0,1,1,7.711-13.32A10.877,10.877,0,0,1,13209.47,2593.94Z" transform="translate(-13195.781 -2572.539)" fill="#789750" fill-rule="evenodd"/>
          </svg>
          </div>
        <div class="text-pink pl-2">OCCASIONI EASY</div>
    </div>
    <div class="ml-10 pb-5">Acquista due prodotti con questo marchio,<br>il terzo avrà il 50% di sconto!</div>
    </div>
      </div>
      </div>   
</div>
