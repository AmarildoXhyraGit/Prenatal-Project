<script>
    function userpopupfunction() {
      var x = document.getElementById("userpopup");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
    </script>
   @guest
<div  id="userpopup" class=" w-60  hidden shadow-lg -mt-1  z-[101]  absolute lg:ml-[850px] xl:ml-[1150px]  transform -translate-x-1/2 lg:translate-y-1/2 bg-white">
    <div class="ml-4">
      <button class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-5 rounded-full w-72 h-9 sm:w-52" type="button" onclick="toggleloggins('loggins-id'),userpopupfunction()" >
        Accedi
      </button>
    </div> 
    <div class="inline-flex text-pink mb-6 ml-4"><div>Nuovo su Prenatal</div><div >  <button class="underline pl-2" type="button" onclick="toggleregister('register-id'),userpopupfunction()" >
     Registrati
    </button></div></div> </div>@endguest
    @auth
    <div  id="userpopup" class=" w-60 hidden  shadow-lg mt-16  z-40  absolute lg:ml-[950px] xl:ml-[1150px]  transform -translate-x-1/2 lg:translate-y-1/2 bg-white">
    <form method="post"  action="/registerlogout">
      @csrf
      <div class="ml-20">    
  <button type="submit"  class="text-black  rounded-full border border-gray w-20 text-center h-7 text-xs ">Esci</button>
</div>
    </form>
    </div>
    @endauth
      </div>
    <script>
      function userpopupmfunction() {
        var x = document.getElementById("userpopupm");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
      </script>
     @guest
  <div  id="userpopupm" class="hidden lg:hidden w-60   shadow-lg ml-[700px] -mt-14 z-[101]  absolute lg:ml-[950px] xl:ml-[1150px]  transform -translate-x-1/2 lg:translate-y-1/2 bg-white">
      <div class="ml-4">
        <button class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-5 rounded-full w-72 h-9 sm:w-52" type="button" onclick="toggleloggins('loggins-id'),userpopupmfunction()" >
          Accedi
        </button>
      </div> 
      <div class="inline-flex text-pink mb-6 ml-4">
        <div>Nuovo su Prenatal</div>
        <div > 
           <button class="underline pl-2" type="button" onclick="toggleregister('register-id'),userpopupmfunction()" >
       Registrati
      </button>
    </div>
  </div>
 </div>
 @endguest
      @auth
      <div  id="userpopup" class=" w-60 hidden  shadow-lg mt-16  z-40  absolute lg:ml-[950px] xl:ml-[1150px]  transform -translate-x-1/2 lg:translate-y-1/2 bg-white">
      <form method="post"  action="/registerlogout">
        @csrf
        <div class="ml-20">    
    <button type="submit"  class="text-black  rounded-full border border-gray w-20 text-center h-7 text-xs ">Esci</button>
  </div>
      </form>
      </div>
      @endauth
        </div>
        {{View::make('components/Authentication/loginnew')}}
        {{View::make('components/Authentication/registrati')}}