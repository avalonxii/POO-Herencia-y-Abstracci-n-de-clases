<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
      <H2>PROGRAMACION ORIENTADA A OBJETOS EN PHP</H2>
      <?php
         // require_once('../clases/clase.php'); 
         // require_once('../clases/cliente.php');
         // require_once('../clases/Productos.php');
         require_once('../clases/Padre.php');
         require_once('../clases/Hijo.php');
         require_once('../clases/Hija.php');

         // echo "<p>probando php</p>";
      
         // $coche = new Coche();
         // echo $coche -> getColor();
         // echo $coche -> color;

         // echo "<h3>Clases y Objetos</h3>";

         // $objeto = new ClasePropiedades();//instanciar
         // echo $objeto -> ciudad;

         // $cli = new Cliente("indra",3,true);
         // echo "<p>" . $cli -> getNombre() . "</p>";

         // //modificar el nombre del cliente
         // $cli -> setNombre("Repsol");
         // echo "<p>" . $cli -> getNombre() . "</p>";

         // echo "<hr>";
         // echo "<h3>ACTIVIDAD</h3>";

         // $producto1 = new Producto(100 ,"camisa" ,5 ,7.99);
         // echo $producto1 -> mostrar();

         // echo "despues:";
         // //modificar precio producto1 
         // $producto1 -> setPrecio(7.95);
         // echo $producto1 -> mostrar();

         // echo "TOTAL(con iva):". $producto1 -> calcularTotal();  ;

         // echo "<hr>";

         //$padre=new Padre("nombre1",10,9.95);
         //echo $padre->nombre;
         //echo $padre->unidades; //no puede acceder a protected
         //echo $padre->precio; //no puede acceder a private
     
         //$hijo= new Hijo("Sevilla");
         //$hijo->saludar();
         //echo $hijo->ciudad;

        
         $hijo1 = new Hijo("Sevilla");
          //2.muentra mensaje en cursiva
         $hijo1 -> saludar("juan");

         $hijo2 = new Hijo("sevilla");
         $hijo2 -> __construct1("sevilla" , "hijo2@gmail.com");
         $hijo2 -> mostrarCiudadEmail();
         
         $hijo1 -> verTareas("URGENTE");

         //5.usar los metodos saludar y verTareas
         $hija1 = new Hija("maria",5,70);
         $hija1 -> saludar("maria");
         $hija1 -> verTareas("importante")
       

      ?>
   </body>
</html>