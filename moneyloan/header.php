<!--
  light purple
#DACCDB (218, 204, 219) Storybook Charm (Glidden)
#D9A5BF (217, 165, 191) Hollyhock (Pratt & Lambert)
#E7D3D5 (231, 211, 213) Brushed Lavender (Valspar)
#D4C6D3 (212, 198, 211) Enchant (Sherwin Williams)
#C8C4DA (200, 196, 218) French Lilac (Benjamin Moore)
  dark purple
#675C78 (103, 92, 120) Purple Passage (Sherwin-Williams)
#493E63 (73, 62, 99) Purple Rain (Valspar)
#825779 (130,87,121) Purple Davenport (Valspar)
#774C6f (119, 76, 111) Passion Plum (Benjamin Moore)
#3F3B52 (63, 59, 82) Purple Blanket (Behr)
  footer
#76406A (118, 64, 106) Regal Purple (Glidden)

background ng box
#E6E4E8

footer
#675C78

header
#825779

background
#E7D3D5

button
background-color:  #4E424F;color: rgb(255,255,255);




-->
<?php
error_reporting(0);


?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3 css/w3.css">
<link rel="shortcut icon" type="image/png" href="favicon.webp">
<link rel="icon" type="image/png" href="favicon.webp">
<style>

/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    .b {background: red;}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    .b {background: green;}
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    .b {background: blue;}
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    .b {background: orange;}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    .b {background: pink;}
}



@keyframes slideInFromLeft {
  0% {
       transition: 9s;

    opacity: 0;
         -webkit-transition: 9s;


  }
  100% {
   transition: 9s;

   opacity: 1;
        -webkit-transition: 9s;

  }
}

body {  
     transition: 9s;
     -webkit-transition: 9s;

  /* This section calls the slideInFromLeft animation we defined above */
  animation: 1s ease-out 0s 1 slideInFromLeft;


}

</style>


<!-- Links (sit on top) -->
<header>
<div class="w3-top " style="">
  <div class="w3-row  " style="">
    <div class="w3-col s3 " style="background-color: #80B763; color: white;">
      <a href="index.php" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3" style="background-color: #80B763;color: white;">
      <a href="howto.php" class="w3-button w3-block">How to</a>
    </div>
    <div class="w3-col s3" style="background-color: #80B763;color: white;">
      <a href="aboutus.php" class="w3-button w3-block">About us</a>
    </div>
    <div class="w3-col s3" style="background-color: #80B763;color: white;">
      <a href="login.php" class="w3-button w3-block">Login</a>
    </div>

<!--     <div class="b">&nbsp;</div>
 -->
  </div>
</div>
</header>