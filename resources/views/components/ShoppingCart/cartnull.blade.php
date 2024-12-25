<script>
    function shoppingcartfunction() {
      var x = document.getElementById("shoppingcart");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
    </script>
    @if($countcartitems==0)
    <div  id="shoppingcart" class="w-36 sm:w-52 ml-60 mt-24  shadow-lg hidden z-[101]  absolute md:mt-20 sm:ml-[400px] md:ml-[680px] lg:mt-12 lg:ml-[890px] xl:ml-[1270px]  transform -translate-x-1/2 lg:translate-y-1/2 bg-white">
      <div class="p-2">  Il tuo carrello è vuoto.</div>
</div>
@else
<a href="/cart" >
  <div   class="fixed top-0 w-6 text-center text-white bg-green shadow-lg mt-9 z-[101] rounded-full   transform -translate-x-1/2 lg:translate-y-1/2">
    <div>  {{$countcartitems}}</div>
  </div>
  <div   class="fixed top-0 text-center -ml-3 text-white hover:text-green hidden lg:block mt-14  z-10    transform -translate-x-1/2 lg:translate-y-1/2">
    <div>  Apri Carrello</div>
  </div>
  </a>
  @endif
    
   
    