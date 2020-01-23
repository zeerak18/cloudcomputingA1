<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet' type='text/css' href='style2.css' />
    <title></title>
  </head>
  <body>




<?php

 // for every random user that comes onto the webpage, the page increments by 1
function pageview_counter(){
    if (isset($randomuser))
    {
    if ($randomuser=="visited")
      include("pageview-counter.txt");
      }
      else{

      $file=fopen("pageview-counter.txt","r+");
      $result=fread($file,filesize("pageview-counter.txt"));
      fclose($file);
      // increment the view
      $result++;
      $file=fopen("pageview-counter.txt","w+");
      fputs($file,$result);
      fclose($file);
      include("pageview-counter.txt");
    }
  }


 ?>

     <p class="num-of-views">Views Count: <strong>
       <?php
       echo pageview_counter();
       ?>
     </strong></p>

   </body>
 </html>
