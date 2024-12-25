<script>
  function myFunction1() {
var x ;
x= document.getElementById("list1");
if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
}
function myFunction2() {
var x ;
x= document.getElementById("list2");
if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
}
function myFunction3() {
var x ;
x= document.getElementById("list3");
if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
}
function myFunction4() {
var x ;
x= document.getElementById("list4");
if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
}
  </script>
<div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-4 md:items-start mt-10 mb-16 ml-24 md:ml-36 lg:-ml-10">
<div>
<div class="md:hidden font-bold"><button onclick="myFunction1()"><div class="inline-flex items-center"><div> CATEGORIE</div><div class="pl-5 block md:hidden "><svg xmlns="http://www.w3.org/2000/svg" width="9.86" height="5.63" viewBox="0 0 9.86 5.63">
    <path id="Path_187" data-name="Path 187" d="M13349.729,4793.358l3.715,3.716,3.713-3.716a.713.713,0,0,1,1.008,1.009l-4.2,4.206a.755.755,0,0,1-1.038,0l-4.2-4.206a.713.713,0,1,1,1.008-1.009Z" transform="translate(-13348.513 -4793.149)" fill="#e72a6e" fill-rule="evenodd"/>
  </svg>
  </div></div></button></div>
    <div id="list1" class="md:pl-32 md:-ml-28 pt-5 hidden md:block">
    <ul >
        <li class="font-bold pb-3 hidden md:block">CATEGORIE</li>
        @foreach($categorieslimit as $item)
        <li><a href="http://127.0.0.1:8000/cat/{{$item->c_id}}" >{{$item->c_name}}</a></li>
        @endforeach
       
        </ul>
</div>
</div>
<div>
    <div class="md:hidden font-bold">
      <button onclick="myFunction2()">
        <div class="inline-flex items-center">
          <div>TU E PRENATAL</div>
          <div class="pl-5 block md:hidden ">
            <svg xmlns="http://www.w3.org/2000/svg" width="9.86" height="5.63" viewBox="0 0 9.86 5.63">
        <path id="Path_187" data-name="Path 187" d="M13349.729,4793.358l3.715,3.716,3.713-3.716a.713.713,0,0,1,1.008,1.009l-4.2,4.206a.755.755,0,0,1-1.038,0l-4.2-4.206a.713.713,0,1,1,1.008-1.009Z" transform="translate(-13348.513 -4793.149)" fill="#e72a6e" fill-rule="evenodd"/>
      </svg>
      </div>
    </div>
  </button>
</div>
        <div id="list2" class=" pt-5 hidden md:block">
        <ul>
             <li class="font-bold pb-3  w-full hidden md:block ">TU E PRENATAL</li>
              <a href="" > <li>MAGAZINE</li></a>
                <a href="" >  <li>SERVIZI IN STORE</li></a>
                  <a href="" ><li>MONDO PRENATAL</li></a>
                    <a href="" > <li>VIP CLUB</li></a>
                      <a href="" ><li>LISTA NASCITA</li></a>
          </ul>
    </div>
    </div>
    <div>
        <div class="md:hidden font-bold">
          <button onclick="myFunction3()">
            <div class="inline-flex items-center">
              <div>AZIENDA</div>
              <div class="pl-5 block md:hidden ">
                <svg xmlns="http://www.w3.org/2000/svg" width="9.86" height="5.63" viewBox="0 0 9.86 5.63">
            <path id="Path_187" data-name="Path 187" d="M13349.729,4793.358l3.715,3.716,3.713-3.716a.713.713,0,0,1,1.008,1.009l-4.2,4.206a.755.755,0,0,1-1.038,0l-4.2-4.206a.713.713,0,1,1,1.008-1.009Z" transform="translate(-13348.513 -4793.149)" fill="#e72a6e" fill-rule="evenodd"/>
          </svg>
          </div>
        </div>
      </button>
    </div>   
            <div id="list3" class=" pt-5 hidden md:block">
            <ul>
                <li class="font-bold pb-3 hidden md:block">AZIENDA</li>
                <a href="" > <li>CONOSCI PRENATAL</li></a>
                 <a href="" > <li>STORE LOCATOR</li></a>
                   <a href="" > <li>CONDIZIONI DI VENDITA</li></a>
                     <a href="" > <li>CONDIZIONI D’USO</li></a>
                       <a href="" >  <li>PRIVACY POLICY</li></a>
                         <a href="" >   <li>COOKIES</li></a>                
               </ul>
        </div>
</div>     
            <div class="md:hidden font-bold">
              <button onclick="myFunction4()">
                <div class="inline-flex items-center">
                  <div> SUPPORTO</div><div class="pl-5 block md:hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.86" height="5.63" viewBox="0 0 9.86 5.63">
                <path id="Path_187" data-name="Path 187" d="M13349.729,4793.358l3.715,3.716,3.713-3.716a.713.713,0,0,1,1.008,1.009l-4.2,4.206a.755.755,0,0,1-1.038,0l-4.2-4.206a.713.713,0,1,1,1.008-1.009Z" transform="translate(-13348.513 -4793.149)" fill="#e72a6e" fill-rule="evenodd"/>
              </svg>
              </div>
            </div>
          </button>
        </div>
                <div id="list4" class=" hidden md:block">
                <ul>
                   <li class="font-bold pb-3 hidden md:block ">SUPPORTO</li>
                    <a href="" > <li>CONTATTACI</li></a>
                     <a href="" > <li>METODI DI PAGAMENTO</li></a>
                       <a href="" > <li>TEMPI DI SPEDIZIONE</li></a>
                         <a href="" > <li>RISOLUZIONE CONTROVERSIE</li></a>
                           <a href="" >  <li>RESI & RIMBORSI</li></a>
                             <a href="" >   <li>REGOLAMENTO PRÉNATAL</li></a>
                             <a href="" >   <li>FAQ</li></a>
                   </ul>
                  </div>
            </div>