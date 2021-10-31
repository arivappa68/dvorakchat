<?php
   function formatmyfile($filename){
        // $filename = "../text/text.txt";
        // $file = fopen( $filename, "a+" );
        // ftruncate($file, 20);
         $lines = file($filename);
         $last = sizeof($lines) - 1 ;
         unset($lines[$last]);

         $fp = fopen($filename, 'w');
         fwrite($fp, implode('', $lines));
         fclose($fp);
    }
?>
