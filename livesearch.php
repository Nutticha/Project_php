<?php
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("query/search_data.applestore");

    $x=$xmlDoc->getElementsByTagName('link'); /*ไปเรียก link search_data*/ 


$q=$_GET["q"];


if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } else {
          $hint=$hint . "<a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

if ($hint=="") {
  $response="<span style='padding:20px;display:block;'>ไม่พบข้อมูลที่คุณต้องการ กรุณาพิมพ์คำค้นคำอื่น</span>";
} else {
  $response=$hint;
}

//output
echo $response;
?>