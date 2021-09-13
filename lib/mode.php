
<script>

<?php

function modeController() {
  <input type="button" value="DarkMode" onclick="

  var target=document.querySelector('body');

  if(this.value==='DarkMode') {
  target.style.color='white';
  target.style.backgroundColor='black';

  this.value='LightMode';

  }else {
  target.style.color='black';
  target.style.backgroundColor='white';

  this.value='DarkMode';
  }

  var links = document.querySelectorAll('a');
  var i=0;
  while (i<links.length) {
    if(this.value==='LightMode') {
      links[i].style.color='powderblue';
    }
    else {
      links[i].style.color='blue';
    }
    i=1+1;
  }
  ">
}

 ?>
 </script>
