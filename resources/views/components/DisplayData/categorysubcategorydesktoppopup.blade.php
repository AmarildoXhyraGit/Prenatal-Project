@extends('layout.app')
    <script>
        function cat() {
          var x = document.getElementById("cat");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
        </script>
        @if($categoryc!=null)
        @if($itemforcategory!=null)
        <div  id="cat" class="xl:w-[1480px] lg:w-[900px] xl:-ml-10 mt-52 shadow-lg lg:block hidden z-[101] pb-5 -mb-44 bg-white">
            <button class="font-semibold text-lg border-bgray text-black hover:text-pink bg-white rounded-full  cursor-pointer w-6 h-6 text-center items-center -pt-1 xl:ml-[1300px] border-2 lg:ml-[850px]" onclick="cat()">
                X
                 </button>
   <div class="inline-flex ml-5 xl:ml-32">
    <div>
                @foreach($categoryc as $d)
                @if($d->c_id!=$d->c_parent_id)
                <div class="font-bold mt-5 pb-1 ml-5 text-base"><a href="http://127.0.0.1:8000/cat/{{$d->c_id}}">{{$d->c_name}}</a></div>
                @foreach($coll as $index)    
                    @foreach($index as $c) 
                    @foreach($c as $data)
                    @if($data->c_parent_id==$d->c_id)
                    <a href="http://127.0.0.1:8000/cat/{{$data->c_id}}">
                    <div class=" text-base">
                        {{$data->c_name}} 
                </div>
            </a>
                @endif
                    @endforeach               
                @endforeach
                    @endforeach
                    @endif
                    @endforeach
    </div>
    <div class="xl:ml-40 grid grid-cols-2">    
        @foreach($itemforcategory as $ic)
        <div class="w-40 md:w-80  ml-5 xl:ml-14  mb-5 hover:shadow-black">   
           <div class="border border-bgray   w-44  mt-2">
                <img src="{{$ic->image_link}}" class="w-44"></div>
        <div>
            <div class=" w-44  text-lg md:text-md mt-1 pl-1">{{$ic->marche}}</div>
            <div class=" w-48  text-sm md:text-md mt-1 pl-1">{{$ic->title}}</div>
        </div>
    </div>
    @endforeach
@endif
   </div>
                </div>
            </div>
                @endif