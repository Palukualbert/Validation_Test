<?php
namespace App\Calcul;
use App\Calcul;
test('somme de deux nombres entiers', function () {
    $c = new Calcul(7, 9);
    expect($c->som())->toBe(16);    
});

?>