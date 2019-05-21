<?php

/*
..######..##.....##.########.
.##....##.##.....##.##.....##
.##.......##.....##.##.....##
..######..##.....##.########.
.......##.##.....##.##.....##
.##....##.##.....##.##.....##
..######...#######..########.

..######..##..........###.....######...######.
.##....##.##.........##.##...##....##.##....##
.##.......##........##...##..##.......##......
.##.......##.......##.....##..######...######.
.##.......##.......#########.......##.......##
.##....##.##.......##.....##.##....##.##....##
..######..########.##.....##..######...######.
*/

require_once('Animal.php');

class Gato extends Animal{

    public $pedigree;

    // CONSTRUCTOR
    public function __construct($id,$nombre,$foto,$raza,$color,$edad,$actitud,$sexo,$pedigree){

        parent:: __construct($id,$nombre,$foto,$raza,$color,$edad,$actitud,$sexo);

        $this-> pedigree = $pedigree;
    }
}
$miaumiau = new Gato( 056,'Miau-Miau','img/miaumiau.jpg','Extraterrestre','Blanco/Grisaceo','3 años APROX','Dócil pero mui a su rollo','Hembra','SI');

      // Comprovacion del Objeto

// echo('<pre>');

// print_r ($miaumiau);

// echo('</pre>');