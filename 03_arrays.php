<?php
$persons =['first post', 'second post', 'third post' ];

//for($x=0; $x<count($persons); $x++){
//    echo $persons[$x];
//}

foreach($persons as $index=> $person){
    echo $index + 1 .'-' .$person. '<br>';
}
