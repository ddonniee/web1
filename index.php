<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>welcome to planned days</title>
  </head>
  <body>
  <h1>welcome to planned days</h1>
<input type="button" value="DarkMode" onclick="

  var target=document.querySelector('body');

  if(this.value==='DarkMode') {
  target.style.color='white';
  target.style.backgroundColor='black';

  var links = document.querySelectorAll('a');
  var i=0;
  while (i<links.length) {
      links[i].style.color='powderblue';
      i=i+1;
    }

  this.value='LightMode';
 }
  else {
  target.style.color='black';
  target.style.backgroundColor='white';

    var links = document.querySelectorAll('a');
    var i=0;
    while (i<links.length) {
        links[i].style.color='blue';
        i=i+1;
      }
      this.value='DarkMode';
  }

">
 <br>

<ol>
<p>
<?php
// by 은정, data 폴더에 저장된 list 를 링크를 가져오기
   $list=scandir('./data');
   $i=0;
   while($i<count($list)) {
     if($list[$i] !='.') {
       if($list[$i] !='..') {
         echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
       }
     }
     $i=$i+1;
   }

?>
</p>
<?php
if(isset($_GET['id'])) {
  echo file_get_contents("data/".$_GET['id']);
}else {
  echo "<br>";
  echo "Why don't you join us?";
}
 ?>

  </ol>

<h2>

 </h2>

  </body>
</html>
