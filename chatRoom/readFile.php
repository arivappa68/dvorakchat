<?php
   function readmytext($filename){
         // $filename = "../text/text.txt";
         $file = fopen( $filename, "r" );

         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }

         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );

         echo("<pre>$filetext</pre>");
         //echo ( "<pre>$filetext</pre>" );
    }
?>
