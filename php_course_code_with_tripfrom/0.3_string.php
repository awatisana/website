<?php
    $str = "this";
    echo $str."<br>";
    $lenn = strlen($str);
    echo "the length of this string is".$lenn . ". thank you <br>";
    echo "the number of word in this string is ".str_word_count($str).".thank you<br>";
    "<br>";
    echo "the reversed string is ". strrev($str).".thank you <br>";
    echo " the search for is this string is " . strpos($str,"is").".thank you <br>";
    echo " the replaces for is this string is " . str_replace("is","at",
    $str).".thank you <br>";
    

    //echo $lenn;


    ?>