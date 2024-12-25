@extends('layout.app')
@php
$sum=0;
$sumvip=0;
$sumv=0;
@endphp
<div class="-ml-10 sm:ml-1 container px-6 mx-auto">
    <div class="flex justify-center my-6">
        <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
          <a href="/">
            <div class="ml-8 md:ml-28 lg:ml-64 xl:ml-[400px] mb-5"> <svg id="Component_6_1" data-name="Component 6 – 1" xmlns="http://www.w3.org/2000/svg"  class="w-32 md:w-52" viewBox="0 0 110 21.21">
              <path id="Path_227" data-name="Path 227" d="M12865.181,301.29h3a1.984,1.984,0,0,0,1.524-.5,1.651,1.651,0,0,0,.483-1.17c0-1.25-1.449-1.89-1.963-1.38.514-.51-.123-1.96-1.378-1.96a1.7,1.7,0,0,0-1.173.48,2.024,2.024,0,0,0-.5,1.53Z" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
              <path id="Path_229" data-name="Path 229" d="M12868.206,290.61a7.981,7.981,0,0,0-5.562,2.26c-1.737,1.71-2.194,3.57-2.193,6.06v12.84a3.837,3.837,0,0,0,2.859-1.03,4.288,4.288,0,0,0,1.028-3.23v-8.68a4.129,4.129,0,0,1,1.079-3.35,4.089,4.089,0,0,1,5.58.04,3.774,3.774,0,0,1,1.074,2.75,3.87,3.87,0,0,1-1.116,2.75,4.151,4.151,0,0,1-3.2,1.11h-2.571a3.789,3.789,0,0,0,.807,2.25,3.438,3.438,0,0,0,2.745,1.16,6.857,6.857,0,0,0,4.921-1.76,7.164,7.164,0,0,0,2.341-5.51,7.529,7.529,0,0,0-7.793-7.66" transform="translate(-12860.451 -290.61)" fill="#789940" fill-rule="evenodd"/>
              <path id="Path_230" data-name="Path 230" d="M12928.206,296.33a8.04,8.04,0,0,1,5.611,2.21c1.751,1.72,2.147,3.62,2.146,6.11v7.13a3.841,3.841,0,0,1-2.859-1.04,4.285,4.285,0,0,1-1.03-3.23v-2.84a4.288,4.288,0,0,0-1.093-3.42,3.924,3.924,0,0,0-5.551.04,3.912,3.912,0,0,0-1.091,2.81,4.146,4.146,0,0,0,1.082,2.89,4.075,4.075,0,0,0,3.236,1.13h2.569a3.171,3.171,0,0,1-3.435,3.49,7.08,7.08,0,0,1-5.1-1.85,7.516,7.516,0,0,1-2.244-5.66,7.612,7.612,0,0,1,7.756-7.77" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
              <path id="Path_231" data-name="Path 231" d="M12892.084,303.97a4.321,4.321,0,0,1,1.347-3.06,3.689,3.689,0,0,1,4.083-.71c-.555.52-3.633,3.38-5.312,4.95a4.324,4.324,0,0,1-.118-1.18m7.119,2.72c-1.463,1.32-2.306,1.56-3.527,1.49a3.343,3.343,0,0,1-1.149-.28c2.336-2.1,8.136-7.33,8.3-7.48a7.711,7.711,0,0,0-6.515-4.07,7.849,7.849,0,0,0-5.5,1.98,7.668,7.668,0,0,0-2.546,5.3,7.524,7.524,0,0,0,7.237,8.18,7.226,7.226,0,0,0,5.544-2.25,3.6,3.6,0,0,0,.261-4.78Z" transform="translate(-12860.451 -290.61)" fill="#789940" fill-rule="evenodd"/>
              <path id="Path_232" data-name="Path 232" d="M12907.64,307.51a4.288,4.288,0,0,1-1.028,3.23,3.886,3.886,0,0,1-2.862,1.04v-7.39a7.412,7.412,0,0,1,2.209-5.83,8.041,8.041,0,0,1,5.5-2.21,8.134,8.134,0,0,1,5.546,2.16,7.59,7.59,0,0,1,2.162,5.88l0,6.96h-3.89v-6.93a3.9,3.9,0,0,0-6.6-3.18,3.978,3.978,0,0,0-1.041,3.18Z" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
              <path id="Path_233" data-name="Path 233" d="M12884.154,296.33a7.958,7.958,0,0,0-5.566,2.26c-1.78,1.76-2.189,3.64-2.189,6.22v6.97a3.885,3.885,0,0,0,2.861-1.04,4.285,4.285,0,0,0,1.03-3.23l0-3.33a3.953,3.953,0,0,1,1.043-2.91,3.9,3.9,0,0,1,2.823-1.15,3.975,3.975,0,0,1,2.444.85l2.757-2.75a7.771,7.771,0,0,0-5.2-1.89" transform="translate(-12860.451 -290.61)" fill="#789940" fill-rule="evenodd"/>
              <path id="Path_234" data-name="Path 234" d="M12945.058,300.29v-3.73h-3.854v-.08a4.285,4.285,0,0,0-1.03-3.23,3.845,3.845,0,0,0-2.861-1.04v11.28c0,2.97.786,4.65,2.23,6.08a7.753,7.753,0,0,0,5.48,2.2v-3.82a4.043,4.043,0,0,1-2.758-1.07,3.95,3.95,0,0,1-1.063-3.08v-3.51Z" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
              <path id="Path_235" data-name="Path 235" d="M12953.638,296.33a8.027,8.027,0,0,1,5.607,2.21c1.752,1.72,2.149,3.62,2.148,6.11v7.13a3.845,3.845,0,0,1-2.861-1.04,4.292,4.292,0,0,1-1.028-3.23v-2.84a4.3,4.3,0,0,0-1.094-3.42,3.92,3.92,0,0,0-5.547.04,3.9,3.9,0,0,0-1.091,2.81,4.135,4.135,0,0,0,1.08,2.89,4.073,4.073,0,0,0,3.234,1.13h2.569a3.171,3.171,0,0,1-3.433,3.49,7.077,7.077,0,0,1-5.1-1.85,7.512,7.512,0,0,1-2.244-5.66,7.612,7.612,0,0,1,7.756-7.77" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
              <path id="Path_236" data-name="Path 236" d="M12967.694,306.88a3.943,3.943,0,0,1-1.063-3.08v-7.32a4.293,4.293,0,0,0-1.03-3.23,3.839,3.839,0,0,0-2.859-1.04v11.28c0,2.97.786,4.65,2.229,6.08a7.71,7.71,0,0,0,5.48,2.2v-3.82a4.041,4.041,0,0,1-2.757-1.07" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
          </svg>
        </div>
      </a>     
            <h3 class="text-3xl text-pink">Carrello</h3>
          <div class="flex-1">
            <table class="w-full  text-xs sm:text-base" cellspacing="0">
              <thead>
                <tr class="h-12 uppercase">   
                  <th class="ml-3">Prodotto</th>       
                  <th class="text-left">Quantità</th>
                  <th class="hidden text-right md:table-cell">Prezzo listino</th>
                  <th class="">Prezzo  </th>
                  <th class="hidden text-right md:table-cell">  </th>
                </tr>
              </thead>
              <tbody>
                <hr class="mt-5 mb-3 text-bgray">
                  @foreach ($cartItems as $item)   
                <tr>
                  <td>
                 <div class="sm:inline-flex inline-block items-center">
                  <div>
                        @if($item->image_link!=null)
                        <img src="{{ $item->image_link }}" class="w-24 " >
                        @endif
                  </div>
                  <div>
                      <p class="mb-2 md:ml-4">{{ $item->title }}@if($item->taglia!=null) - {{$item->taglia}}@endif</p>
                  </div></div>
                  </td>
                  <td class=" mt-6 ">
                      <div class="inline-flex w-full h-8">
                        <form action="{{ route('cart.update') }}" method="POST">
                          @csrf
                          <input type="hidden" name="id" value="{{ $item->id}}" >
                          <div class="inline-flex items-center">
                        <input type="number" name="quantity" value="{{$item->quantity}}" min=1 max={{$item->stock}} class="w-12 text-center bg-gray-300 " />
                        <div class="inline-block -ml-2 sm:ml-2 text-white hover:text-black text-xs"><div>
                        <button type="submit" class="px-2 pb-2 ml-2  bg-blue-500"><img src="\img\updating.png" class="w-5">
                        </button>
                      </div>
                        <div>aggiornare quantita</div>
                      </div>
                    </div>
                        </form>
                      </div>
                  </td>
                  <td class="text-center table-cell">
                    <span class="text-sm font-medium ">
                      €{{ $item->price }}
                    </span>
                  </td>
                  <td class=" mt-6 ">
                   <div>
                    <div class="inline-flex w-full h-8 text-center text-pink">
                      €{{$item->price * $item->quantity}}
                    </div>
                <div class="text-xs hidden sm:block">
                  @if($item->vip_price!=0)
                  <hr class="text-green">
                  <div class="inline-flex items-center">
                  <div class="text-green pt-2 text-lg">€{{$item->vip_price * $item->quantity}}</div>
                  <div class="text-green pl-5 pt-1 text-xs">CON<br> VIP CARD</div>
                  @endif
                </div>
                   </div>
                </td>
                  <td class=" text-right md:table-cell">
                    <form action="{{ route('cart.remove') }}" method="POST">
                      @csrf
                      <input type="hidden" value="{{ $item->id }}" name="id">
                      <button class="px-4 py-2  hover:bg-pink"><img src="\img\bin.png" class="sm:w-5 sm:h-auto w-20 h-20 block"></button>
                  </form>
                  </td>
                </tr>
                @php
              // <span class="font-bold"> Totale: </span>
              $sum=$sum+($item->price * $item->quantity);
              if($item->vip_price!=0){
              $sumv=$sumv+($item->price * $item->quantity);}
              $sumvip=$sumvip+($item->vip_price * $item->quantity);
                @endphp
              </div>
                @endforeach
              </tbody>
            </table>
            <hr class="text-bgray mt-3"> 
            <div class="ml-8 md:ml-80 lg:ml-[500px] xl:ml-[900px]"> 
             <span class="font-bold pr-1">Totale:</span>€{{$sum}}
             @if($sumvip!=0)
            <hr class="text-bgray mt-2"> <span class="inline-flex items-center text-green">-  €{{$sumv-$sumvip}} <div class="text-green pl-5 pt-1 text-xs">CON<br> VIP CARD</div></span>
            </div>
            @endif
              <form action="{{ route('cart.clear') }}" method="POST">
                @csrf
                <button class="px-6 mt-5 py-2 text-red-800 bg-red-300 text-xs hover:font-bold xl:-ml-20">Rimuovi tutto il Carrello</button>
              </form>
              <a href="/cat/1154"><div class="px-6 py-2 bg-green ml-10 md:ml-32 lg:ml-40  hover:font-bold w-40">Altri Prodotti</div></a>
          </div>
        </div>
      </div>
</div>