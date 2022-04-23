<?php
echo "Guess the text";
?> 

<p id="txtJapan" style="font-size:50px;"></p>

<script>
var kana = 
{ a: "あア", i: "いイ", u: "うウ", e: "えエ", o: "おオ",
  ka:"かカ", ki:"きキ", ku:"くク", ke:"けケ", ko: "こコ",
  sa:"さサ", si:"しシ", su:"すス", se:"せセ", so: "そソ",
  ta:"たタ", ti:"ちチ", tu:"つツ", te:"てテ", to: "とト",
  na:"なナ", ni:"にニ", nu:"ぬヌ", ne:"ねネ", no: "のノ",
  ha:"はハ", hi:"ひヒ", hu:"ふフ", he:"へヘ", ho: "ほホ"};

document.getElementById("txtJapan").innerHTML = kana[Object.keys(kana)[Math.floor(Math.random() * Object.keys(kana).length)]];
</script>
