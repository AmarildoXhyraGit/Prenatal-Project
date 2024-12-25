@extends('layout.app')
<div class="ml-5 mr-5 sm:ml-10 md:-ml-5 w-full fixed top-0 lg:z-[100] z-50">
  <div class=" bg-white fixed top-0 lg:z-[100] z-50 w-full ">
    <div  class="inline-flex w-full  items-center  mt-5">
        <div class="pr-14">   
          <header class="bg-blue-900 text-black">
            <div class="ml-5 sm:ml-20">     
                <button id="toggle" class="lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>        
            </div>
            <script>document.getElementById("toggle").addEventListener("click", function () {
              document.getElementById("nav").classList.toggle("-left-full")
              document.getElementById("nav").classList.toggle("left-0")
            })</script>       
    </div>
    <a href="/">
        <div class="sm:pr-12 md:mr-20 md:ml-36 lg:mr-5 lg:-ml-28 xl:mr-10"> <svg id="Component_6_1" data-name="Component 6 – 1" xmlns="http://www.w3.org/2000/svg"  class="w-32 md:w-52" viewBox="0 0 110 21.21">
          <path id="Path_227" data-name="Path 227" d="M12865.181,301.29h3a1.984,1.984,0,0,0,1.524-.5,1.651,1.651,0,0,0,.483-1.17c0-1.25-1.449-1.89-1.963-1.38.514-.51-.123-1.96-1.378-1.96a1.7,1.7,0,0,0-1.173.48,2.024,2.024,0,0,0-.5,1.53Z" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
          <path id="Path_229" data-name="Path 229" d="M12868.206,290.61a7.981,7.981,0,0,0-5.562,2.26c-1.737,1.71-2.194,3.57-2.193,6.06v12.84a3.837,3.837,0,0,0,2.859-1.03,4.288,4.288,0,0,0,1.028-3.23v-8.68a4.129,4.129,0,0,1,1.079-3.35,4.089,4.089,0,0,1,5.58.04,3.774,3.774,0,0,1,1.074,2.75,3.87,3.87,0,0,1-1.116,2.75,4.151,4.151,0,0,1-3.2,1.11h-2.571a3.789,3.789,0,0,0,.807,2.25,3.438,3.438,0,0,0,2.745,1.16,6.857,6.857,0,0,0,4.921-1.76,7.164,7.164,0,0,0,2.341-5.51,7.529,7.529,0,0,0-7.793-7.66" transform="translate(-12860.451 -290.61)" fill="#789940" fill-rule="evenodd"/>
          <path id="Path_230" data-name="Path 230" d="M12928.206,296.33a8.04,8.04,0,0,1,5.611,2.21c1.751,1.72,2.147,3.62,2.146,6.11v7.13a3.841,3.841,0,0,1-2.859-1.04,4.285,4.285,0,0,1-1.03-3.23v-2.84a4.288,4.288,0,0,0-1.093-3.42,3.924,3.924,0,0,0-5.551.04,3.912,3.912,0,0,0-1.091,2.81,4.146,4.146,0,0,0,1.082,2.89,4.075,4.075,0,0,0,3.236,1.13h2.569a3.171,3.171,0,0,1-3.435,3.49,7.08,7.08,0,0,1-5.1-1.85,7.516,7.516,0,0,1-2.244-5.66,7.612,7.612,0,0,1,7.756-7.77" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
          <path id="Path_231" data-name="Path 231" d="M12892.084,303.97a4.321,4.321,0,0,1,1.347-3.06,3.689,3.689,0,0,1,4.083-.71c-.555.52-3.633,3.38-5.312,4.95a4.324,4.324,0,0,1-.118-1.18m7.119,2.72c-1.463,1.32-2.306,1.56-3.527,1.49a3.343,3.343,0,0,1-1.149-.28c2.336-2.1,8.136-7.33,8.3-7.48a7.711,7.711,0,0,0-6.515-4.07,7.849,7.849,0,0,0-5.5,1.98,7.668,7.668,0,0,0-2.546,5.3,7.524,7.524,0,0,0,7.237,8.18,7.226,7.226,0,0,0,5.544-2.25,3.6,3.6,0,0,0,.261-4.78Z" transform="translate(-12860.451 -290.61)" fill="#789940" fill-rule="evenodd"/>
          <path id="Path_232" data-name="Path 232" d="M12907.64,307.51a4.288,4.288,0,0,1-1.028,3.23,3.886,3.886,0,0,1-2.862,1.04v-7.39a7.412,7.412,0,0,1,2.209-5.83,8.041,8.041,0,0,1,5.5-2.21,8.134,8.134,0,0,1,5.546,2.16,7.59,7.59,0,0,1,2.162,5.88l0,6.96h-3.89v-6.93a3.9,3.9,0,0,0-6.6-3.18,3.978,3.978,0,0,0-1.041,3.18Z" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
          <path id="Path_233" data-name="Path 233" d="M12884.154,296.33a7.958,7.958,0,0,0-5.566,2.26c-1.78,1.76-2.189,3.64-2.189,6.22v6.97a3.885,3.885,0,0,0,2.861-1.04,4.285,4.285,0,0,0,1.03-3.23l0-3.33a3.953,3.953,0,0,1,1.043-2.91,3.9,3.9,0,0,1,2.823-1.15,3.975,3.975,0,0,1,2.444.85l2.757-2.75a7.771,7.771,0,0,0-5.2-1.89" transform="translate(-12860.451 -290.61)" fill="#789940" fill-rule="evenodd"/>
          <path id="Path_234" data-name="Path 234" d="M12945.058,300.29v-3.73h-3.854v-.08a4.285,4.285,0,0,0-1.03-3.23,3.845,3.845,0,0,0-2.861-1.04v11.28c0,2.97.786,4.65,2.23,6.08a7.753,7.753,0,0,0,5.48,2.2v-3.82a4.043,4.043,0,0,1-2.758-1.07,3.95,3.95,0,0,1-1.063-3.08v-3.51Z" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
          <path id="Path_235" data-name="Path 235" d="M12953.638,296.33a8.027,8.027,0,0,1,5.607,2.21c1.752,1.72,2.149,3.62,2.148,6.11v7.13a3.845,3.845,0,0,1-2.861-1.04,4.292,4.292,0,0,1-1.028-3.23v-2.84a4.3,4.3,0,0,0-1.094-3.42,3.92,3.92,0,0,0-5.547.04,3.9,3.9,0,0,0-1.091,2.81,4.135,4.135,0,0,0,1.08,2.89,4.073,4.073,0,0,0,3.234,1.13h2.569a3.171,3.171,0,0,1-3.433,3.49,7.077,7.077,0,0,1-5.1-1.85,7.512,7.512,0,0,1-2.244-5.66,7.612,7.612,0,0,1,7.756-7.77" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
          <path id="Path_236" data-name="Path 236" d="M12967.694,306.88a3.943,3.943,0,0,1-1.063-3.08v-7.32a4.293,4.293,0,0,0-1.03-3.23,3.839,3.839,0,0,0-2.859-1.04v11.28c0,2.97.786,4.65,2.229,6.08a7.71,7.71,0,0,0,5.48,2.2v-3.82a4.041,4.041,0,0,1-2.757-1.07" transform="translate(-12860.451 -290.61)" fill="#e72c6f" fill-rule="evenodd"/>
      </svg></div></a>  
      <form action="/search"  method="get">     
      <div class="hidden lg:block">
        <div class="inline-flex">
            <div class="w-full">
             <input type="text" name="search" placeholder="Che proddoto stai cercando?" class="xl:w-96 lg:w-72 outline-none ">
            </div>
            <button type="submit"><div class="pl-40 lg:pl-20">
               <svg xmlns="http://www.w3.org/2000/svg" width="16.586" height="17.003" viewBox="0 0 16.586 17.003">
        <path id="Path_151" data-name="Path 151" d="M13411.894,1487.64a5.1,5.1,0,1,1,5.1-5.1A5.1,5.1,0,0,1,13411.894,1487.64Zm4.059.36a6.826,6.826,0,1,1,1.228-1.18l4.262,4.48a.854.854,0,0,1-1.234,1.18Z" transform="translate(-13405.089 -1475.74)" fill-rule="evenodd"/>
        </svg>
    </div></button>
      </div>
    <hr class="mt-2">
</div>
      </form>
<a href="https://www.prenatal.com/store-finder/">
    <div class="lg:inline-flex items-center hidden lg:visible lg:-ml-10 xl:ml-10">
      <div class="text-xs text-center pr-3 lg:ml-28">
        PRENOTA & RITIRA <br>IN NEGOZIO
      </div>
      <div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
        <defs>
          <clipPath id="clip-path">
            <rect id="Rectangle_68" data-name="Rectangle 68" width="23" height="23" transform="translate(14811.53 52.34)" fill="none"/>
          </clipPath>
        </defs>
        <g id="Group_59" data-name="Group 59" transform="translate(-14811.53 -52.34)" clip-path="url(#clip-path)">
          <path id="Path_86" data-name="Path 86" d="M14823.03,73.441c-2.509-2.98-6.83-8.859-6.83-12.772a6.83,6.83,0,0,1,13.66,0C14829.86,64.582,14825.539,70.46,14823.03,73.441Zm0-21.1a8.339,8.339,0,0,0-8.33,8.329c0,5.7,7.455,14.069,7.771,14.422a.751.751,0,0,0,1.116,0c.318-.353,7.772-8.721,7.772-14.422A8.34,8.34,0,0,0,14823.03,52.34Z"/>
          <path id="Path_87" data-name="Path 87" d="M14823.03,63.36a2.691,2.691,0,1,1,2.69-2.691A2.694,2.694,0,0,1,14823.03,63.36Zm0-6.881a4.191,4.191,0,1,0,4.19,4.19A4.2,4.2,0,0,0,14823.03,56.479Z"/>
        </g>
      </svg>
      </div>
    </div>
  </a>
      <!----->
    <button onclick="userpopupfunction()">
    <div class="hidden lg:block pl-10 sm:pl-10 lg:pl-5"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
    </svg>
      </div></button>
      @if($countcartitems==0)
      <button onclick="shoppingcartfunction()">
        <div class="pl-5 sm:pl-10 lg:pl-5"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
        </svg>
    </div></button>
    @else
    <a href="/cart">
      <div class="pl-5 sm:pl-10 lg:pl-5"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
      </svg>
  </div></a>
    @endif
    <!---->
    {{View::make('components/ShoppingCart/cartnull')->with('countcartitems',$countcartitems)}}
    </div>
  @auth
      <div class="-mb-3 inline-flex items-center  bg-rose-50 mt-5 -ml-96 md:-ml-64 lg:ml-20 xl:ml-96 pr-36 h-10 ">
    <div class="uderline text-black pl-96 text-center"><div><div class="font-bold -pl-10 md:pl-10 hover:scale-125 ease-in duration-500">Benvenuta , {{auth()->user()->name}}!<hr class="text-pink  mb-5 "></div></div></div>
      <!---------->   
   <form method="post"  action="/registerlogout">
        @csrf
        <div class=" md:ml-32 mt-5"> 
    <button type="submit"  class="text-black  rounded-full border border-gray w-20 text-center h-7 text-xs hidden md:block ">Esci</button>
  </div>
      </form>
        <!------------->
    </div>
      @endauth
    <div class="inline-flex -mt-3 ">
        <nav id="nav" class="fixed top-6 bottom-0 -left-full bg-blue-900 w-80 md:w-11/12  lg:w-full lg:text-xs xl:text-lg    lg:static transition-all mt-10 ">
            <ul class="lg:flex  lg:drop-shadow-2xl-hidden text-black z-50 bg-white">
<li>
     <div class="ml-5 sm:ml-20">     
  <button id="togglex" class="lg:hidden bg-bgray rounded-full mt-2 p-1 pl-2 pr-2 hover:bg-red-600 ml-72 md:ml-[610px] z-[101] -mb-20">
      x
  </button>        
</div>
<script>document.getElementById("togglex").addEventListener("click", function () {
document.getElementById("nav").classList.toggle("-left-full")
document.getElementById("nav").classList.toggle("left-0")
})</script>
 </li>
            <div class="">
                <li class="lg:hidden w-40 md:w-96" >
                  <div class="ml-5 mr-20">
                <form action="/search"  method="get">
                <div class="inline-flex items-baseline mt-5 w-96">
              <div>
                 <input type="search" name="search" placeholder="Che proddoto stai cercando?" class="outline-none w-60 md:w-[650px] lg:w-28">
              </div>  
            <button type="submit"><div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="16.586" height="17.003" viewBox="0 0 16.586 17.003">
       <path id="Path_151" data-name="Path 151" d="M13411.894,1487.64a5.1,5.1,0,1,1,5.1-5.1A5.1,5.1,0,0,1,13411.894,1487.64Zm4.059.36a6.826,6.826,0,1,1,1.228-1.18l4.262,4.48a.854.854,0,0,1-1.234,1.18Z" transform="translate(-13405.089 -1475.74)" fill-rule="evenodd"/>
       </svg>
   </div>
  </button>
</div>
   <hr class="lg:hidden text-gray mt-2 w-60 md:w-[650px]">
                </form>
          </div>
          </li>
<div class=" ml-1 md:ml-60">
            <li class="lg:hidden" >
@guest
              <div  class="-mb-3 w-60 -mt-3  bg-white">
                <div class="ml-4">
                  <button class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-5 rounded-full w-72 h-9 md:w-80  sm:w-52" type="button" onclick="toggleloggins('loggins-id')" >
                    Accedi
                  </button>
                </div> 
                <div class="inline-flex text-pink mb-6 "><div class="pl-8">Nuovo su Prenatal</div><div >  <button class="underline pl-2" type="button" onclick="toggleregister('register-id')" >
                 Registrati
                </button></div></div> </div>
@endguest
@auth
<div   class="-mb-3 w-60 -mt-3  bg-white">
  <form method="post"  action="/registerlogout">
    @csrf
    <div class="ml-20">    
  <button type="submit"  class="text-black  rounded-full border border-gray w-20 text-center h-7 text-xs ">Esci</button>
  </div>
  </form>
  </div>
  @endauth
            </li></div></div>
              <div class="lg:grid lg:grid-cols-7 xl:grid-cols-9 lg:-ml-80 ">
                @foreach($categories as $item)
                    <li >
                        <div class="block  pr-2 pl-2 lg:-ml-4 lg:pt-1 lg:pr-2 lg:pb-1 hover:text-pink text-xs" href="#">
                          <hr class="lg:hidden pt-1 text-bgray">
                          <div class="inline-flex items-center font-normal"><div class="pl-3">
                            {{-- @if($categorychild!=null)
                            @if($item->c_id!=$categorychild->c_id)
                            <button class="block lg:hidden" onclick="togglesubcatmobile('subcatmobile-id')">{{$item->c_name}}</button> 
                            @else
                            <button class="block lg:hidden text-pink" onclick="togglesubcatmobile('subcatmobile-id')">
                              {{$item->c_name}}</button> 
                            @endif
                            @if($item->c_id!=$categorychild->c_id)  <button class="hidden lg:block" onclick="cat()">{{$item->c_name}}</button>
                          @else
                          <button class="hidden lg:block text-pink" onclick="cat()">{{$item->c_name}}</button>
                          @endif
                          @else --}}
                          <a href="http://127.0.0.1:8000/cat/{{$item->c_id}}"><button class="block lg:hidden" onclick="togglesubcatmobile('subcatmobile-id')">{{$item->c_name}}</button> </a>
                         <a href="http://127.0.0.1:8000/cat/{{$item->c_id}}"> <button class="hidden lg:block">{{$item->c_name}}</button></a>
</div>
                          <div class="hidden pl-[600] text-pink  "><button class="py-5 px-6 bg-white focus:outline-none" data-submenu-open-id="menu-645174" aria-label="Open Submenu">
                            <span class="sr-only">Apri  Mamma</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24" width="24" stroke="currentColor" class="w-6 h-6 text-primary">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg> 
                     </button>
          </div>
          </div>
          </div>
                    </li>
                    @endforeach
                </div>
              </ul>          
          </nav>     
    </div>
    </div>
    <x-userpopup/>
</div>

