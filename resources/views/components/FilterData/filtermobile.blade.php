                                        {{--Filter Moblie Version--}}
<button type="button" class="hover:text-pink text-bgray ml-5 mr-8 mt-5 rounded-full w-72 md:w-[650px] border-2 lg:hidden" onclick="togglefiltermobile('filtermobile-id')">
  <div  class="p-2 inline-flex  items-center ">
  <div><img src="/img/filter.png " class="w-4"></div>
  <div class="pl-1 text-xl text-pink">Filtri</div>
</div> 
</button>
<div class="hidden lg:hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="filtermobile-id">
    <div class="relative w-11/12 my-6 mx-auto max-w-3xl"> 
      <!--content-->
      <div class="border-0 rounded-lg shadow-lg relative flex flex-col  bg-white outline-none focus:outline-none">
<div class="text-center text-pink ">
    <button class="font-semibold text-lg border-blue text-black hover:text-white  rounded-full  cursor-pointer w-6 h-6 text-center  transform translate-x-3 -translate-y-3 flex items-center justify-center  bg-pink md:ml-[670px] ml-[310px]" onclick="togglefiltermobile('filtermobile-id')">
        X
         </button>
        </div>
         <div class="text-xl ml-20 mb-5">Filtri</div>
         <hr class="bg-bgray mb-5">
  <div class="inline-flex items-center">
      <div class="mr-4 ml-6">
        <button  type="button" onclick="genreefunction()" class="  lg:w-36 h-9">
          <div class="inline-flex items-center text-center">
            <div>Genere</div>
            <div class="pl-9">+
      </div>
    </div>
  </button>
</div>
      <script>
        function genreefunction(){
          var x = document.getElementById("genree");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
        </script>
    <div  id="genree" class=" w-[1300px]  shadow-lg -mt-1  z-40  hidden bg-white md:w-[500px]">
      <form  action="/cat/{{$categorychild->c_id}}/gender-prenatal" method="get">
        @csrf
      <div>
          <div class="text-pink text-xl mt-10 mb-5 ml-12">Filtra per Sesso</div>
          <div class="grid md:grid-cols-2 grid-cols-1 lg:grid-cols-4">
            @foreach($genere as $g)
              <div class="inline-flex text-xl items-center pl-12">
                  <div  class=" "><input type="checkbox"  name="gen[]" value="{{$g->genere}}" class="w-5 h-5"></div>
                  <div  class="pl-3 text-sm">{{$g->genere}}</div>
              </div>
             @endforeach
              </div>
          </div>
          <hr class="text-bgray">
          <div class="ml-5"><input type="submit" value="Applica" class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-10 rounded-full w-36 h-9 ">    
          </div>
    </form>
            </div>
  </div>
  <div class="inline-flex items-center">
    <div class="mr-4 ml-6"><button type="button" onclick="marcaafunction()" class="  lg:w-36 h-9"><div class="inline-flex items-center text-center"><div>Marca</div><div class="pl-9">+</div></div></button></div>
      <script>
      function marcaafunction() {
        var x = document.getElementById("marcaa");
        if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
      }
      </script>
  <div  id="marcaa" class="lg:w-[1300px]  shadow-lg -mt-1 hidden z-40   bg-white md:w-[500px]">
    <form  action="/cat/{{$categorychild->c_id}}/marche-prenatal" method="get">
        @csrf
  <div>
      <div class="text-pink text-xl mt-10 mb-5 ml-12">Filtra per marca</div> 
      <div class="grid md:grid-cols-2 grid-cols-1 lg:grid-cols-10">
        @foreach($marche as $m)
          <div class="inline-flex text-xl items-center pl-4">
              <div  class=" "><input type="checkbox"  name="cat[]" value="{{$m->marche}}" class="w-5 h-5"></div>
              <div  class="pl-3 text-xs">{{$m->marche}}</div>
          </div>
          @endforeach
        </div> 
   <hr class="text-bgray">
  <div class="ml-5">
    <input type="submit" value="Applica" class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-10 rounded-full w-36 h-9 ">        
  </div>
  </div>
    </form> 
  </div>
  </div>
  <div class="inline-flex items-center">
    <div class="mr-4 ml-6">
      <button type="button" onclick="coloreefunction()" class=" lg:w-36 h-9">
        <div class="inline-flex items-center text-center">
          <div>Colore</div>
          <div class="pl-9">+</div>
    </div>
  </button>
      </div>
      <script>
        function coloreefunction() {
          var x = document.getElementById("coloree");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
        </script> 
    <div  id="coloree" class=" lg:w-[1300px]   shadow-lg -mt-1  z-40   bg-white hidden md:w-[500px]">
      <form  action="/cat/{{$categorychild->c_id}}/colore-prenatal" method="get">
          @csrf
        <div>
            <div class="text-pink text-xl mt-10 mb-5 ml-12">Filtra per Colore</div>
            <div class="grid md:grid-cols-2 grid-cols-1 lg:grid-cols-7">
              @foreach($colore as $c)
              @if($c!=null)
                <div class="inline-flex text-xl items-center pl-12">
                    <div  class=" "><input type="checkbox"  name="col[]" value="{{$c->colore}}" class="w-5 h-5"></div>
                    <div  class="pl-3 text-sm">{{$c->colore}}</div>
                </div>
                @endif
               @endforeach
                </div>
            </div>
            <hr class="text-bgray">
            <div class="ml-5"><input type="submit" value="Applica" class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-10 rounded-full w-36 h-9 ">    
            </div>
      </form>
        </div>   
  </div>
  <div class="inline-flex items-center">
    <div class="mr-4 ml-6 mb-3"><button type="button" onclick="prezzoofunction()" class="lg:w-36 h-9"><div class="inline-flex items-center text-center"><div>Prezzo</div><div class="pl-9">+</div></div></button></div>
      <script>
        function prezzoofunction() {
          var x = document.getElementById("prezzoo");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
        </script>
    {{View::make('components/FilterData/filterpricemobile')->with('categorychild',$categorychild)}}</div>     
      </div>
  </div>
   </div>
<div class="hidden lg:hidden opacity-25 fixed inset-0 z-40 bg-black" id="filtermobile-id-backdrop"></div>
  <script type="text/javascript">
    function togglefiltermobile(filtermobileID){
      document.getElementById(filtermobileID).classList.toggle("hidden");
      document.getElementById(filtermobileID + "-backdrop").classList.toggle("hidden");
      document.getElementById(filtermobileID).classList.toggle("flex");
      document.getElementById(filtermobileID + "-backdrop").classList.toggle("flex");
    }
  </script>
{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
<div class="lg:hidden mt-4 md:ml-96">
<div class="inline-flex items-center  ">
  <div>
    <button type="button" onclick="attributeefunction()" class=" border border-bgray rounded-full w-72 h-9"><div class="inline-flex items-center text-center">
      <div>Pertinenza</div>
      <div class="pl-9">
        <svg xmlns="http://www.w3.org/2000/svg" width="5.738" height="5.02" viewBox="0 0 5.738 5.02">
      <path id="Path_303" data-name="Path 303" d="M11459.443,949.15a.311.311,0,0,1,.28.17.3.3,0,0,1,0,.32l-2.543,4.37a.324.324,0,0,1-.559,0l-2.544-4.37a.3.3,0,0,1,0-.32.309.309,0,0,1,.281-.17Z" transform="translate(-11454.03 -949.15)" fill="#4a4a44" fill-rule="evenodd"/>
    </svg>
  </div>
</div>
</button>
</div>
 </div>
 <script>     
 function attributeefunction() {
  var x = document.getElementById("attributee");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script> 
<div  id="attributee" class=" w-60 shadow-lg -mt-1  z-40 hidden  bg-white lg:ml-[980px]">
<div>
  <div>
    <div class="inline-block pl-2 text-black ">    
            <div id="listt" >
            <ul class="shadow-lg">          
                <li class="hover:text-pink pl-3 pr-3"><a href="http://127.0.0.1:8000/cat/{{$categorychild->c_id}}/orderby=piucaro" >
Prezzo: dal più caro
             </a>
            </li>
             <hr class="text-bgray">
             <li class="hover:text-pink pl-3 pr-3"><a href="http://127.0.0.1:8000/cat/{{$categorychild->c_id}}/orderby=piueconomico" >
                  Prezzo: dal più economico
             </a>
            </li>
                       </ul>
        </div>
        </div>
</div>
</div>
    </div>
  </div>