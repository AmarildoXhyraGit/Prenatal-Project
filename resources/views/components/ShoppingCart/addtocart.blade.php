@if($item->stock!=0)
@if($item->taglia==null)
<div class="mt-5 ml-4 hidden sm:block ">
    <form action="{{ route('cart.store') }}" method="POST">
        @csrf
        <input type="hidden" value="{{$item->i_id}}"       name="id">
        <input type="hidden" value="{{$item->image_link}}" name="image_link">
        <input type="hidden" value="{{$item->title}}"      name="title">
        <input type="hidden" value="{{$item->taglia}}"     name="taglia">
        <input type="hidden" value="{{$item->quantity}}"   name="quantity">
        <input type="hidden" value="{{$item->price}}"      name="price">
        <input type="hidden" value="{{$item->vip_price}}"  name="vip_price">
        <input type="hidden" value="{{$item->stock}}"      name="stock">
        <input type="hidden" value="1"                     name="quantity">
        <button class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-10 rounded-full w-40 md:w-72 md:h-9 text-xs md:text-sm" type="submit">
            AGGIUNGI AL CARRELLO
        </button>
    </form>
</div>
@else
<a href="http://127.0.0.1:8000/cat/{{$item->c_id}}/parentc/{{$item->i_parent_id}}"> <button  class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-10 rounded-full w-40 md:w-72 md:h-9 text-xs md:text-sm hidden sm:block" type="submit">
    Seleziona Una Taglia</button>
</a>
@endif
@else
<div class="mt-5 ml-4 hidden sm:block ">
    <div class="text-white bg-bgray text-center pt-1 p-3 border-2 mt-5 mb-10 rounded-full w-40 md:w-72 md:h-9 hidden sm:block">
       Non Disponibile
    </div>
</div>
@endif