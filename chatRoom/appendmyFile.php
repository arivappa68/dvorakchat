<?php
   date_default_timezone_set('Asia/Kolkata');
   function appendmytext($filename, $writtenText, $name){
         // $filename = "../text/text.txt";
         $file = fopen( $filename, "a" );
         //$name = str_replace('  ',' ',$name);
         $name = trim($name);
         $writtenText = trim($writtenText);
         //date_default_timezone_set('Asia/Kolkata');
         fwrite($file, date("Y-m-d H:i:s",time()));
         fwrite($file, " >> ");
         fwrite($file, $name);
         fwrite($file, ": ");
         fwrite($file, $writtenText);
         fwrite($file, "\n");
         fclose($file);
    }
    function appendmytext2(){
         $filename = "../text/text.txt";
         $file = fopen( $filename, "a" );
         fwrite($file, "\n");
         fclose($file);
    }
?>
