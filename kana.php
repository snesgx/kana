<?php
echo "Guess the text";
?> 

<p id="txtJapan" style="font-size:50px;"></p>

<input id="txtAnswer" value="Your answer...">
<button id="btnCheck" onclick="checkAnswer()">Button</button>

<script>
var input = document.getElementById("txtAnswer");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("btnCheck").click();
  }
});
</script>

<script>
var kana = 
{ a: "あア", i: "いイ", u: "うウ", e: "えエ", o: "おオ",
  ka:"かカ", ki:"きキ", ku:"くク", ke:"けケ", ko: "こコ",
  sa:"さサ", si:"しシ", su:"すス", se:"せセ", so: "そソ",
  ta:"たタ", ti:"ちチ", tu:"つツ", te:"てテ", to: "とト",
  na:"なナ", ni:"にニ", nu:"ぬヌ", ne:"ねネ", no: "のノ",
  ha:"はハ", hi:"ひヒ", hu:"ふフ", he:"へヘ", ho: "ほホ"};

	var lastWordRomaji="";
	var lastWordKana="";  
  
function GenerateQuery(){
	lastWordRomaji="";
	lastWordKana="";
	var HiraOrKata = Math.floor(Math.random() * 2);
	
	for (let i = 0; i < Math.floor(Math.random() * 6)+1; i++) {
		var nextSyllabe = Object.keys(kana)[Math.floor(Math.random() * Object.keys(kana).length)];
		lastWordRomaji += nextSyllabe;
		lastWordKana += kana[nextSyllabe][HiraOrKata];
	}
	
	document.getElementById("txtJapan").innerHTML = lastWordKana;
}

function checkAnswer() {
	console.log(lastWordRomaji);
	console.log(document.getElementById("txtAnswer").value);
}

GenerateQuery();



</script>

