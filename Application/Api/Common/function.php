<?php


function signature($options){

    if (!$options){
        $options['timestamp'] = 'a';
        $options['noncestr'] = 'b';
        $options['userid'] = 'c';
        $options['secret'] = 'd';
    }
 
    ksort($options);
    $signature = sha1(http_build_query($options));

    return $signature;
}

