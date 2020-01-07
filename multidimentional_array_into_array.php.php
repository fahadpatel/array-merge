<?php

   $array1 = array(
    'task' => 'delete',
    'before' =>'test'
);


    $array2=array(
                array(
                    'id'    => '1', 
                    'type'  => 'post',
                ),
                array(
                    'id'    => '2', 
                    'type'  => 'category',
                ),
                array(
                    'id'    => '1', 
                    'type'  => 'tag',
                ),
            );


    array_walk($array2, function(&$newarray) use ($array1) {
        $newarray = array_merge($newarray, $array1);
    });

print_r($array2);

?>
