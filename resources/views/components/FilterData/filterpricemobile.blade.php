@extends('layout.app')

<style>
input {
  box-shadow: 0;
  outline: 0;
}
.price-slider {
  width: 300px;
  margin: auto;
  text-align: center;
  position: relative;
  height:1px;
}
.price-slider svg,
.price-slider input[type=range] {
  position: absolute;
  left: 0;
  bottom: 0;
}
input[type=number] {
  border: 1px solid #ddd;
  text-align: center;
  font-size: 1.6em;
  -moz-appearance: textfield;
}
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
input[type=number]:invalid,
input[type=number]:out-of-range {
  border: 2px solid #E5E5E5;
}
input[type=range] {
  -webkit-appearance: none;
  width: 100%;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #E72A6E;
}
input[type=range]:focus::-ms-fill-lower {
  background: #E72A6E;
}
input[type=range]:focus::-ms-fill-upper {
  background: #E72A6E;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  background: #E72A6E;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
input[type=range]::-webkit-slider-thumb {
  z-index: 2;
  position: relative;
  box-shadow: 0px 0px 0px #000;
  border: 1px solid #E72A6E;
  height: 18px;
  width: 18px;
  border-radius: 25px;
  background: #ffffff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -7px;
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  background: #E72A6E;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
input[type=range]::-moz-range-thumb {
  z-index: 2;
  position: relative;
  box-shadow: 0px 0px 0px #000;
  border: 1px solid #E72A6E;
  height: 18px;
  width: 18px;
  border-radius: 25px;
  background: #ffffff;
  cursor: pointer;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
input[type=range]::-ms-fill-lower,
input[type=range]::-ms-fill-upper {
  background: #E72A6E;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
input[type=range]::-ms-thumb {
  z-index: 2;
  position: relative;
  box-shadow: 0px 0px 0px #000;
  border: 1px solid #E72A6E;
  height: 18px;
  width: 18px;
  border-radius: 25px;
  background:white;
  cursor: pointer;
}
    </style>
<div  id="prezzoo"  class="   shadow-lg -mt-1  z-40   bg-white hidden md:w-72">
    <div>
      <div class="text-pink text-xl mt-10 mb-10 ml-12">Filtra per prezzo</div>
<form  action="/cat/{{$categorychild->c_id}}/price-prenatal" method="get">
    @csrf
<div class="price-sliderm">
    <span class="inline-flex items-center mb-4 ml-12">{{---From - To--}}
        <input type="number" name="price1" required value="number" min="number" max="number" placeholder="0" class="w-20 text-xs"/>	
        <input type="number" name="price2" value="number" min="number" max="number"  placeholder="2000" class="w-20 "/></span>
  <input value="0" min="0" max="2000" step="10" type="range"/>
  <input value="2000" min="0" max="2000" step="10" type="range"/>
  <svg width="100%" height="24">
    <line x1="4" y1="0" x2="300" y2="0" stroke="#212121" stroke-width="12" stroke-dasharray="1 28"></line>
  </svg>
</div>
<hr class="text-bgray">
<div class="ml-5"><input type="submit" value="Applica" class="text-white hover:bg-white bg-pink hover:text-pink border-2 mt-5 mb-10 rounded-full w-36 h-9 ">    
</div>
</form>
</div>
</div>
<script>// Code By Webdevtrick ( https://webdevtrick.com )
    (function() {
      var parent = document.querySelector(".price-sliderm");
      if(!parent) return;
      var
        rangeS = parent.querySelectorAll("input[type=range]"),
        numberS = parent.querySelectorAll("input[type=number]");
      rangeS.forEach(function(el) {
        el.oninput = function() {
          var slide1 = parseFloat(rangeS[0].value),
                slide2 = parseFloat(rangeS[1].value);
          if (slide1 > slide2) {
                    [slide1, slide2] = [slide2, slide1];
          }
          numberS[0].value = slide1;
          numberS[1].value = slide2;
        }
      });
      numberS.forEach(function(el) {
        el.oninput = function() {
                var number1 = parseFloat(numberS[0].value),
                        number2 = parseFloat(numberS[1].value);
          if (number1 > number2) {
            var tmp = number1;
            numberS[0].value = number2;
            numberS[1].value = tmp;
          }
          rangeS[0].value = number1;
          rangeS[1].value = number2;
        }
      });
    })();
    </script>