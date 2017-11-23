<?php error_reporting(E_ALL); ini_set('display_errors', 1);?>
<!DOCTYPE html>
<html>
<style>
.body{
background-color: black;
color:white;
}
.money-label{
}
.money-input{
display:block;
border:0px;
border-bottom: 2px solid lightgray;
outline: none;
background: transparent;
text-align:right;
font-size: 25px;
width: 100px;
padding-right: 5px;
}
.money-input::-webkit-inner-spin-button,
.money-input::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.money-input:focus{
outline:none;
border-bottom: 2px solid orange;
transition: border 1s;
}

</style>
<body>
<div class="body">
<label class="money-label">1 Rs</label>
<input type="number" class="money-input" min="0" data-money="1">
<label  class="money-label">2 Rs</label>
<input type="number" class="money-input" min="0" data-money="2">
<label class="money-label">5 Rs</label>
<input type="number" class="money-input" min="0" data-money="5">
<label class="money-label">10 Rs</label>
<input type="number" class="money-input" min="0" data-money="10">
<label class="money-label">20 Rs</label>
<input type="number" class="money-input" min="0" data-money="20">
<label class="money-label">50 Rs</label>
<input type="number" class="money-input" min="0" data-money="50">
<label class="money-label">100 Rs</label>
<input type="number" class="money-input" min="0" data-money="100">
<label class="money-label">200 Rs</label>
<input type="number" class="money-input" min="0" data-money="200">
<label class="money-label">500 Rs</label>
<input type="number" class="money-input" min="0" data-money="500">
<label class="money-label">1000 Rs</label>
<input type="number" class="money-input" min="0" data-money="1000">
<label class="money-label">2000 Rs</label>
<input type="number" class="money-input" min="0" data-money="2000">
</div>
</body>
</html>