<?php

$file ='extras/user.txt';

if(file_exists($file)) {
   // echo readfile($file);
   $handle= fopen($file, 'r');
   $content= fread($handle , filesize($file));
   fclose($handle);
   echo $content;
} else {
    $handle = fopen($file,'w');
    $content = 'brad' . PHP_EOL . 'sarah';
    fwrite($handle, $content) ;
    fclose($handle);
}