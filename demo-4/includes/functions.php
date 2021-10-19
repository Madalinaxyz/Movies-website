<?php 
function runtime_prettier($movie_length=0)
{
    if($movie_length==0){
        $result='Nu am stiut sa calculam lungimea filmului!';
    }
    else{

    
$result=$movie_length. ' minute';
    }
return $result;
}
function check_old_movie($year){
    $age = date('Y')-$year;

    if( $age > 40){
        $result= $age;
    }
    else{
        $result=false;
    }
    return $result;
}