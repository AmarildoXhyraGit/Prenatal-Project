@extends('layout.app')

@auth
<div class="mt-20"></div>
@endauth
<div class="lg:hidden -mt-36 lg:-mt-20"></div>
 {{--Display Categories link--}}
<div class="inline-block md:inline-flex mb-5 w-auto  text-xs m:text-sm md:text-md lg:text-lg ml-2 mt-52">  
    <div><a href="/">Home / </a></div>
    <div ><a href="http://127.0.0.1:8000/cat/{{$categorygg->c_id}}/">
        {{$categorygg->c_name}}
    </a></div>/
    @if($categorygg->c_name!=$categoryg->c_name)
    <div><a href="http://127.0.0.1:8000/cat/{{$categoryg->c_id}}/">
        {{$categoryg->c_name}}
    </a></div>/@endif
    @if($categoryg->c_name!=$categoryparent->c_name)
    <div class="text-pink"><a href="http://127.0.0.1:8000/cat/{{$categorychild->c_id}}/">
        {{$categoryparent->c_name}}
    </a></div>/@endif
    @if($categoryparent->c_name!=$categorychild->c_name)
    <div class="text-pink">
        {{$categorychild->c_name}}
    </div>/
    @endif  
<script>
    function myFunctionn() {
  var x ;
  x= document.getElementById("listt"); 
  if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
  }
  </script>
<div>
    <div class="inline-block pl-2 text-black ">
        <div><button onclick="myFunctionn()"><div class="inline-flex items-center"><div class="text-pink"> SubCategorie</div><div class="pl-5  "><svg xmlns="http://www.w3.org/2000/svg" width="9.86" height="5.63" viewBox="0 0 9.86 5.63">
            <path id="Path_187" data-name="Path 187" d="M13349.729,4793.358l3.715,3.716,3.713-3.716a.713.713,0,0,1,1.008,1.009l-4.2,4.206a.755.755,0,0,1-1.038,0l-4.2-4.206a.713.713,0,1,1,1.008-1.009Z" transform="translate(-13348.513 -4793.149)" fill="#000000" fill-rule="evenodd"/>
          </svg>
          </div></div></button></div>    
            <div id="listt" class=" hidden ">
            <ul class="shadow-lg">          
        @foreach($items as $item)
                <li class="hover:text-pink pl-3 pr-3"><a href="http://127.0.0.1:8000/cat/{{$item->c_id}}/" >@if($item->c_id!=$item->c_parent_id)
                    {{$item->c_name}}
                    <hr class="black mt-2 mb-2 text-bgray w-full"> @endif </a></li>
           @endforeach
                </ul>
        </div>
        </div>
</div>
</div>
<div class="font-bold  ml-4 ">
{{$categorychild->c_name}}
</div>