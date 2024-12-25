<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-[200] outline-none focus:outline-none justify-center items-center" id="taglie-id">
    <div class="relative w-11/12 h-4/5  my-6 mx-auto max-w-3xl">   
      <!--content-->
      <div class="border-0 rounded-lg shadow-lg relative flex flex-col  bg-white outline-none focus:outline-none">
<div class="text-center text-pink ">
  <hr class="text-black">
    <button class="fixed font-semibold text-lg border-blue text-black hover:text-red-200 bg-white rounded-full  cursor-pointer w-6 h-6 text-center  transform translate-x-3 -translate-y-3 flex items-center justify-center bg-pink  md:ml-[740px] ml-[310px]" onclick="toggletaglie('taglie-id')">
        X
         </button>
        </div>
<div class="text-black font-bold  text-center mt-5">Guida alle Taglie:</div>
<img src="/img/taglie.png">
      </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="taglie-id-backdrop"></div>
  <script type="text/javascript">
    function toggletaglie(taglieID){
      document.getElementById(taglieID).classList.toggle("hidden");
      document.getElementById(taglieID + "-backdrop").classList.toggle("hidden");
      document.getElementById(taglieID).classList.toggle("flex");
      document.getElementById(taglieID + "-backdrop").classList.toggle("flex");
    }
  </script>


