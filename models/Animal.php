<?php

/*
..######..##.....##.########..########.########.
.##....##.##.....##.##.....##.##.......##.....##
.##.......##.....##.##.....##.##.......##.....##
..######..##.....##.########..######...########.
.......##.##.....##.##........##.......##...##..
.##....##.##.....##.##........##.......##....##.
..######...#######..##........########.##.....##

..######..##..........###.....######...######.
.##....##.##.........##.##...##....##.##....##
.##.......##........##...##..##.......##......
.##.......##.......##.....##..######...######.
.##.......##.......#########.......##.......##
.##....##.##.......##.....##.##....##.##....##
..######..########.##.....##..######...######.
*/

// SUPER CLASS OF PERSONA:

class animal{

    public $id;
    public $foto;
    public $raza;
    public $peso;
    public $color;
    public $tamanyo;
    public $edad = 'N/A';
    public $danyos = 'Ningún daño sufrido. ';
    public $actitud = 'Normal';
    public $alimentacion = 'Pienso';
    public $nombre;
    public $sexo;
    public $enfermedad;

    // CONSTRUCTOR:

    public function __construct($id,$nombre,$foto,$raza,$color,$edad,$actitud,$sexo){ //quitar cosas del constructor que no son necesarias!!!
        
        $this->id = $id;
        $this->foto = $foto;
        $this->raza = $raza;
        $this->color = $color;
        $this->edad = $edad;
        $this->actitud = $actitud;
        $this->nombre = $nombre;
        $this->sexo = $sexo;
    }

    // METODOS

        // Imprimir imagen

        public function imprimirFoto(){

         echo('<img class="animalFoto" src="' . $this-> foto .'">');

        }


    //  imprimir datos ordenados en pantalla

     public function imprimirDatos(){


        echo('<ul>');

        echo('<li>ID:' .' '. '<span>'.  $this-> id .'</span></li>');

        echo('<li>Nombre:' .' '. '<span>'.  $this-> nombre .'</span></li>');

        echo('<li>Raza:' .' '. '<span>' . $this-> raza .'</span></li>');

        echo('<li>Color:' .' '. '<span>'.  $this-> color .'</span></li>');
        
        echo('<li>Edad:' .' '. '<span>' . $this-> edad .'</span></li>');

        echo('<li>Actitud:' .' '. '<span>' . $this-> actitud .'</span></li>');

        echo('<li>Sexo:' .' '. '<span>' . $this-> sexo .'</span></li>');

        echo('</ul><br>');

        echo('<a href="http://localhost/trabajo/clase/centro_adopcion/formulario.php?nombre=' . $this->nombre .'">LO ADOPTO!</a>');
        
    }
    

}


// CUANDO CREAMOS UNA CLASS, ESTE ACTUA COMO UN MOLDE (super class)

// class pajaro{

        // propiedades

    // public $id;
    // public $color;
    // private $tamano;
    // protected $peso;
        // public $plumaje; CUANDO AÑADIMOS PROPIEDADES AL PADRE NO HACE FALTA PONERLO EN EL CONSTRUCTOR, LA PODEMOS PONER COMO SE VE EN LA LINEA 157!!
    // default $medidas;

    // constructor 

        // public function __construct($id,$color,$tamano){ 

            // $this-> id = $id;
            // $this-> color = $color;
            // $this-> $tamano;
            
            //no todas las propiedades de la class tienen que ir dentro del constructor, solo las mas importantes!!!!



            

        // }

    // metodos

        //  function que al estar dentro de una clase se llaman metodos!!, Tambien pueden ser privadas.

    // public function comer($hora){ 

            // if($hora < 10:00:00)

            // $this->color // el this nos permite acceder a la informacon de las propiedades
            
            
        // }
// }
// $objeto->comer(14:00:13);

// $pajaro01 = new pajaro();

// CUANDO CREAMOS UNA CLASS, ESTE ACTUA COMO UN MOLDE (sub clase) /// No se pueden tener dos clases en el mismo archivo!!! Por eso necesitamos el require

        // require_once('Pajaro.php');

    // class cuervo extends pajaro{


        // Propiedades

            // public $tamanoPico;




        // Constructor COMO ESTA CLASE HIJO TIENE UNA PROPIEDAD NUEVA ES CUANDO TENEMOS QUE CREAER EL CONSTRUCTOR CON EL PARENT

            // public function __construct($id,$color,$tamano, $tamanoPico){ Como se ve tamano pico es una propiedad del hijo que emos añadido a las propiedades del padre

                // $this-> tamanoPico = $tamanoPico;
                
                // en este caso en el objeto solo tendriamos que poner la informacion de tamano pico!!, si queremos que herede las propiedades del padre tenemos que hacer el parent

                // parent:: __construct($tamanoPico)



            // }




        // Metodos

        // public function arrancarOjos(){ ESTE SERIA UN METODO EXCLUSIVO DEL HIJO



        // }



    // }

    // $cuervo = new cuervo(Es la misma peticion de la clase padre($id,$color,$tamano, $tamanoPico));

// $cuervo -> plumaje = 'Amarillo';