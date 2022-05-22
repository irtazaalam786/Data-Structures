<?php

function merge_sort(&$arr,$p,$r){

    // echo $p;
    // echo $r;
    // echo '<br>';

    if($p == $r) 
       return;

    if($p<$r){
        $q=floor(($p+$r)/2);
        merge_sort($arr,$p,$q);
        merge_sort($arr,$q+1,$r);
        merge($arr,$p,$q,$r);
    }
}

function merge(&$arr,$p,$q,$r){
       $left_slot = $p;
       $right_slot = $q+1;

       $temp_arr = [];
       $k = 0;

       while($left_slot <= $q && $right_slot <=$r){
            if($arr[$left_slot] < $arr[$right_slot]){
                $temp_arr[$k] = $arr[$left_slot];
                $left_slot=$left_slot+1;
            }else if($arr[$right_slot] < $arr[$left_slot]){
                $temp_arr[$k] = $arr[$right_slot];
                $right_slot=$right_slot+1;
            }
            $k = $k+1;
       }

       if($left_slot <= $q){
           while($left_slot <= $q){
               $temp_arr[$k] = $arr[$left_slot];
               $left_slot++;
               $k = $k + 1;
           }
       }

       if($right_slot <= $r){
            while($right_slot <= $r){
                $temp_arr[$k] = $arr[$right_slot];
                $right_slot++;
                $k = $k + 1;
            }
        }

        for($i=0;$i<count($temp_arr);$i++){
            $arr[$p+$i] = $temp_arr[$i];
        }

    //    print_r($temp_arr);

    //    foreach($arr as $key=>$value){
    //        $value = $temp_arr[$key];
    //    }
}

$arr = [
    11,2,10,4,5,7,13,15
];

merge_sort($arr,0,7);

foreach($arr as $value){
    echo $value.'<br>';
}

?>