
<div class="lg:mt-11 lg:ml-3 inline-flex items-center">
  <div class="hidden lg:block">
<div class="lg:inline-flex">
    <div class="text-pink inline-flex items-center mr-8">
        <div><img src="/img/filter.png " class="w-4"></div>
        <div class="pl-1 text-xl">Filtri</div>
    </div>
    <button type="button" class="relative pointer-events-auto lg:hidden focus:outline-none w-full border-2 rounded-full py-2 flex items-center justify-center border-gray-300 text-base text-primary font-medium hover:border-primary">   <div class="text-pink inline-flex items-center mr-8">
      <div><img src="/img/filter.png " class="w-4"></div>
      <div class="pl-1 text-xl">Filtri</div>
  </div></button>
    <div class="mr-4"><button  type="button" onclick="genrefunction()" class=" border rounded-full lg:w-36 h-9"><div class="inline-flex items-center text-center"><div>Genere</div><div class="pl-9"><svg xmlns="http://www.w3.org/2000/svg" width="5.738" height="5.02" viewBox="0 0 5.738 5.02">
        <path id="Path_303" data-name="Path 303" d="M11459.443,949.15a.311.311,0,0,1,.28.17.3.3,0,0,1,0,.32l-2.543,4.37a.324.324,0,0,1-.559,0l-2.544-4.37a.3.3,0,0,1,0-.32.309.309,0,0,1,.281-.17Z" transform="translate(-11454.03 -949.15)" fill="#4a4a44" fill-rule="evenodd"/>
      </svg>
      </div></div></button></div>
    <div class="mr-4"><button type="button" onclick="marcafunction()" class=" border rounded-full lg:w-36 h-9"><div class="inline-flex items-center text-center"><div>Marca</div><div class="pl-9"><svg xmlns="http://www.w3.org/2000/svg" width="5.738" height="5.02" viewBox="0 0 5.738 5.02">
        <path id="Path_303" data-name="Path 303" d="M11459.443,949.15a.311.311,0,0,1,.28.17.3.3,0,0,1,0,.32l-2.543,4.37a.324.324,0,0,1-.559,0l-2.544-4.37a.3.3,0,0,1,0-.32.309.309,0,0,1,.281-.17Z" transform="translate(-11454.03 -949.15)" fill="#4a4a44" fill-rule="evenodd"/>
      </svg></div></div></button></div>
    <div class="mr-4"><button type="button" onclick="colorefunction()" class=" border rounded-full lg:w-36 h-9"><div class="inline-flex items-center text-center"><div>Colore</div><div class="pl-9"><svg xmlns="http://www.w3.org/2000/svg" width="5.738" height="5.02" viewBox="0 0 5.738 5.02">
        <path id="Path_303" data-name="Path 303" d="M11459.443,949.15a.311.311,0,0,1,.28.17.3.3,0,0,1,0,.32l-2.543,4.37a.324.324,0,0,1-.559,0l-2.544-4.37a.3.3,0,0,1,0-.32.309.309,0,0,1,.281-.17Z" transform="translate(-11454.03 -949.15)" fill="#4a4a44" fill-rule="evenodd"/>
      </svg>
    </div>
    </div>
  </button>
      </div>
    <div class="mr-4"><button type="button" onclick="prezzofunction()" class=" border rounded-full lg:w-36 h-9"><div class="inline-flex items-center text-center"><div>Prezzo</div><div class="pl-9"><svg xmlns="http://www.w3.org/2000/svg" width="5.738" height="5.02" viewBox="0 0 5.738 5.02">
        <path id="Path_303" data-name="Path 303" d="M11459.443,949.15a.311.311,0,0,1,.28.17.3.3,0,0,1,0,.32l-2.543,4.37a.324.324,0,0,1-.559,0l-2.544-4.37a.3.3,0,0,1,0-.32.309.309,0,0,1,.281-.17Z" transform="translate(-11454.03 -949.15)" fill="#4a4a44" fill-rule="evenodd"/>
      </svg>
    </div>
  </div>
</button>
</div>
   </div>
   <div class="inline-flex items-center lg:ml-5 xl:ml-36 ">
    <div>
      <button type="button" onclick="attributefunction()" class=" border rounded-full lg-w-60  xl:w-72 ">
        <div class="inline-flex items-center text-center h-9 p-2">
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
   function attributefunction() {
    var x = document.getElementById("attribute");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
  </script> 
<div  id="attribute" class=" w-60 shadow-lg -mt-1  z-40 hidden  bg-white lg:ml-[700px] xl:ml-[960px]">
  <div>
    <div>
      <div class="inline-block pl-2 text-black ">    
              <div id="listt" >
              <ul class="shadow-lg">          
                  <li class="hover:text-pink pl-3 pr-3">
                    <a href="http://127.0.0.1:8000/cat/{{$categorychild->c_id}}/orderby=piucaro" >
Prezzo: dal più caro
               </a>
              </li>
               <hr class="text-bgray">
               <li class="hover:text-pink pl-3 pr-3">
                <a href="http://127.0.0.1:8000/cat/{{$categorychild->c_id}}/orderby=piueconomico" >
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
</div>
<script>
    function genrefunction(){
      var x = document.getElementById("genre");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
    </script>
<div  id="genre" class=" w-[1300px]  shadow-lg -mt-1  z-40  hidden bg-white md:w-[500px]">
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
      <div class="ml-5">
        <input type="submit" value="Applica" class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-10 rounded-full w-36 h-9 ">    
      </div>
</form>
        </div>
        <script>
          function colorefunction() {
            var x = document.getElementById("colore");
            if (x.style.display === "block") {
              x.style.display = "none";
            } else {
              x.style.display = "block";
            }
          }
          </script> 
      <div  id="colore" class=" lg:w-[1300px]   shadow-lg -mt-1  z-40   bg-white hidden md:w-[500px]">
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
        <script>
          function marcafunction() {
            var x = document.getElementById("marca");
            if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
          }
          </script>
      <div  id="marca" class="lg:w-[1300px]  shadow-lg -mt-1 hidden z-40   bg-white md:w-[500px]">
        <form  action="/cat/{{$categorychild->c_id}}/marche-prenatal" method="get">
            @csrf
      <div>
          <div class="text-pink text-xl mt-10 mb-5 ml-12">Filtra per marca</div> 
          <div class="grid md:grid-cols-2 grid-cols-1 lg:grid-cols-10">
            @foreach($marche as $m)
              <div class="inline-flex text-xl items-center pl-4">
                  <div  class=" "><input type="checkbox"  name="cat[]" value="{{$m->marche}}" class="w-5 h-5"></div>
                  <div  class="pl-3 text-xs">{{$m->marche}}</div>
              </div>@endforeach
            </div> 
       <hr class="text-bgray">
      <div class="ml-5"><input type="submit" value="Applica" class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-10 rounded-full w-36 h-9 ">        
      </div>
        </form> 
      </div>
      </div>
      <script>
        function prezzofunction() {
          var x = document.getElementById("prezzo");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
        </script>      
        {{View::make('components/FilterData/filterpricedesktop')->with('categorychild',$categorychild)}}    
      