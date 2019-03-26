<?php
 //生成用户密钥
    function RndChar($length){
        $charArr = array(
            "0","1","2","3","4","5","6","7","8","9",
            "A","B","C","D","E","F","G","H","I","J","K","L","O","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
            "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"
        );
        $charCount = count($charArr)-1;
        $output='';
        for ($a=0; $a<$length; $a++){
            @mt_srand();
            $output .= $charArr[mt_rand(0, $charCount)];
        }
        return $output;
    }