<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-[190] outline-none focus:outline-none justify-center items-center" id="flags-id">
    <div class="relative w-11/12 my-6 mx-auto max-w-3xl">      
      <!--content-->
      <div class="border-0 rounded-lg shadow-lg relative flex flex-col  bg-white outline-none focus:outline-none">
<div class="text-center text-pink ">
    <hr class="text-black">
    <button class="font-semibold text-lg border-blue text-black hover:text-pink bg-white rounded-full  cursor-pointer w-6 h-6 text-center  transform translate-x-3 -translate-y-3 flex items-center justify-center  md:ml-[740px] ml-[310px]" onclick="toggleflags('flags-id')">
        X
         </button>
<div class="text-black font-bold  pb-3">Selezionare il paese a cui si desidera essere reindirizzati:</div>
<div class="inline-flex">
    <div class="pt-3">
        <a href="">
        <div class="pl-2"><img src="/img/albania.jpg" width="36"></div>
       <div class="pt-2"> Albania</div></a></a>
    </div>
    <div class="p-3">
        <a href="">
       <div class="pl-2"> <img src="/img/armenia.jpg"  width="40"></div>
      <div class="pt-2">  Armenia</div></a>
    </div>
    <div class="p-3">
        <a href="">
      <div class="pl-1">  <img src="/img/france.jpg" width="40"></div>
<div class="pt-2">France</div></a>
    </div>
    <div class="p-3">
        <a href="">
      <div class="pl-1">  <img src="/img/greece.jpg" width="40"></div>
<div  class="pt-2">Greece</div></a>
    </div>
</div><br>
<div class="inline-flex">
    <div class="pt-3">
        <a href="">
        <div><img src="/img/italy.jpg" width="40"></div>
        <div class="pt-2">Italy</div>
    </a>
    </div>
    <div class="p-3">
        <a href="">
      <div class="pl-3"><img src="/img/portugal.jpg" width="40"></div>
       <div class="pt-2"> Portugal</div>
    </div>
    <div class="p-3" >
        <a href="">
       <div class="pl-2"><img src="/img/romania.jpg" width="40"></div>
        <div class="pt-2">Romania</div>
    </a>
    </div>
    <div class="pt-3 ">
        <a href="">
       <div> <img src="/img/spain.jpg" width="38"></div>
    </a>
<div  class="pt-2 ">Spain</div>
        </a>
    </div>
</div>
<div class="p-3 flex flex-col items-center justify-center">
    <a href="">
    <div class="pl-6"><img src="/img/turkmenistan.jpg " width="40"></div>
    <div class="pt-2 ">Turkmenistan</div>
</a>
</div>
</div>
      </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="flags-id-backdrop"></div>
  <script type="text/javascript">
    function toggleflags(flagsID){
      document.getElementById(flagsID).classList.toggle("hidden");
      document.getElementById(flagsID + "-backdrop").classList.toggle("hidden");
      document.getElementById(flagsID).classList.toggle("flex");
      document.getElementById(flagsID + "-backdrop").classList.toggle("flex");
    }
  </script>