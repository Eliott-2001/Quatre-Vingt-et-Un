<?php

// foncion qui lance trois dé en leur attribuant une valeur aléatoir et qui les compare au valeur gagnante
function do_421() {
    $jets = [random_int(1,6), random_int(1,6), random_int(1,6)];
    $goods = [4,2,1];
    $i = 0;
    foreach($goods as $good) {
        $searched = array_search($good, $jets);
        if ($searched !== false) {
            $i++;
        }
    }
    $tab = [var_dump($jets[0]),var_dump($jets[1]),var_dump($jets[2])];
    echo($tab);
    return $i;

}

do_421();

// lorsque le dé un ne comporte pas de valeurs gagnante alors ils est possible de le rejoué
function new_tryde1($jets,$tab,$goods){
    $lance= [random_int(1,6)];
    if (var_dump($jets[0] != $goods)){
        $tab[0] = [var_dump($lance)];
        echo $tab;
    }
}
// lorsque le dé un ne comporte pas de valeurs gagnante alors ils est possible de le rejoué
function new_tryde2($jets,$tab,$goods){
    $lance= [random_int(1,6)];
    if (var_dump($jets[1] != $goods)){
        $tab[1] = [var_dump($lance)];
        echo $tab;
    }
}
// lorsque le dé un ne comporte pas de valeurs gagnante alors ils est possible de le rejoué
function new_tryde3($jets,$tab,$goods){
    $lance= [random_int(1,6)];
    if (var_dump($jets[2] != $goods)){
        $tab[2] = [var_dump($lance)];
        echo $tab;
    }
}
echo <<<MON_HTML
<button  onclick="new_tryde1()">relancé dé 1</button>
<button  onclick="new_tryde1()">relancé dé 2</button>
<button  onclick="new_tryde1()">relancé dé 3</button>
MON_HTML;
// si aucun 421 n'est effectue alors on prend le plus grand nombre possible avec les chiffre de chaque dé
function add($tab){
    $tab=arsort($tab);
    echo "your score is ".var_dump($tab[0]).var_dump($tab[1]).var_dump($tab[2]).".";

}
add();




?>

