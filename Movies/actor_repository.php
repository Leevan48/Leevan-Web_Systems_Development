<?php

$movies = array(
    "Pineapple Express" => array(
        'Seth Rogen', 'James Franco', 'Danny McBride', 'Amber Heard', 'Craig Robinson', 'Bill Hader',
    ),
    "Superbad" => array(
        'Jonah Hill', 'Michael Cera', 'Seth Rogen', 'Bill Hader', 'Emma Stone',  'Dave Franco'
    ),
    "This Is The End" => array(
      'Jonah Hill', 'Michael Cera', 'Seth Rogen', 'Craig Robinson', 'Danny McBride',  'Rihanna'
    )
);

$actor = $_GET['actor1'];

$keys = array_keys($movies);

$x = 0;

for($i = 0; $i < count($movies); $i++) {

    foreach($movies[$keys[$i]] as $key => $value) {
        if ($actor == $value){
        echo $keys[$i];
        $x++;
        echo '<br>';
        }

    }


}

if ($x == 0) {
echo "$actor does not appear in any movies";
}

