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
// SUB CLASS PERRO OF CLASS Animales

require_once('Animal.php');



    // SUB CLASE
class Perro extends Animal{

    public $adiestrado;

 
    public function __construct($id,$nombre,$foto,$raza,$color,$edad,$actitud,$sexo,$adiestrado){

            parent:: __construct($id,$nombre,$foto,$raza,$color,$edad,$actitud,$sexo);
    
        $this-> adiestrado = $adiestrado;
    

}
}

$bobby = new Perro(75,'Bobby.','img/bobby.jpg','Bull Dog Francés.','Marrón.','7 años APROX.','Normal, Muy cariñoso..','Macho.','SI.');

$camilo = new Perro(90,'Camilo.','img/camilo.jpg','Bicho raro.','Canela.','5 años APROX.','Un poco rabioso.','Macho.','NO.');

$fluffy = new Perro(78,'Fluffy.','img/fluffy.jpg','De otra galaxia.','Marrón oscuro.','10 años APROX.','A pesar de su aspecto, no dudara en defenderte hasta la muerte.','Macho.','SI');

$jack = new Perro(100,'Jack.','img/jack.jpg','Husky.','Blanco y negro.','5 años APROX.','Simplemente adorable!.','Macho','NO.');

$joker = new Perro(110,'Joker.','img/joker.jpg','Fleetary Irlandés.','Marrón Oscuro.','4 años Aprox.','Te dara compañía y todo su cariño.','Macho.','NO.');

$ruffy = new Perro(120,'Ruffy.','img/ruffy.jpg','Pastor Alemán.','Marron y negro.','7 años APROX.','Sin duda el mas leal de todos.','Macho','NO');


// $jack = new Perro(100,'Jack')
    // Comprovacion del Objeto

// echo('<pre>');

// print_r ($boby);

// echo('</pre>');