@extends('layout.app')
    <div class="hidden -ml-10  md:ml-6 overflow-x-hidden overflow-y-auto fixed inset-0 z-[190] outline-none focus:outline-none justify-center items-center" id="subcatmobile-id">
        <div class="relative w-80 md:w-11/12 my-6 mx-auto max-w-3xl">      
          <!--content-->
          <div class="border-0 rounded-lg shadow-lg relative flex flex-col  bg-white outline-none focus:outline-none">
    <div class="text-center ">
        <hr class="text-black">
        <button class="font-semibold text-lg border-blue text-black hover:text-pink bg-white rounded-full  cursor-pointer w-6 h-6 text-center  transform translate-x-3 -translate-y-3 flex items-center justify-center  md:ml-[630px] ml-[300px]" onclick="togglesubcatmobile('subcatmobile-id')">
            X
             </button>
             @foreach($categoryc as $d)
             @if($d->c_id==$d->c_parent_id)
             <div class="inline-block"><div class="font-bold mt-5 pb-1 ml-5 xl:text-lg lg:text-base"><a href="http://127.0.0.1:8000/cat/{{$d->c_id}}">{{$d->c_name}} <hr class="text-bgray w-28 mt-3"></div></a></div>
             @endif
             @endforeach
             @if($coll!=null)
    @foreach($categoryc as $d)
    @if($d->c_id!=$d->c_parent_id)
    <div class="font-bold mt-5 pb-1 ml-5 xl:text-lg lg:text-base"><a href="http://127.0.0.1:8000/cat/{{$d->c_id}}">{{$d->c_name}}</a></div>
    @foreach($coll as $index)
        @foreach($index as $c)
        @foreach($c as $data)
        <div class=" pl-10 xl:text-lg lg:text-base">
            @if($data->c_parent_id==$d->c_id)
            <a href="http://127.0.0.1:8000/cat/{{$data->c_id}}">{{$data->c_name}}</a>
        @endif
    </div>
        @endforeach
    @endforeach
        @endforeach
        @endif
        @endforeach
        @endif
    </div>
          </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="subcatmobile-id-backdrop"></div>
      <script type="text/javascript">
        function togglesubcatmobile(subcatmobileID){
          document.getElementById(subcatmobileID).classList.toggle("hidden");
          document.getElementById(subcatmobileID + "-backdrop").classList.toggle("hidden");
          document.getElementById(subcatmobileID).classList.toggle("flex");
          document.getElementById(subcatmobileID + "-backdrop").classList.toggle("flex");
        }
      </script>