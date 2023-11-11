<?php

//tamrin تابع بنویسم که دقیقه رو به ثانیه تبدیل کنه

function seconds($m){

    if($m == true){
        $m = $m * 60;
    }
    return $m;
}

echo seconds(2);

?>