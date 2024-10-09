<?php
//cojo el valor del coche 
$coche = $_GET['coche'];
$modelos = [
    'Audi A4' => 'img/Audi A4.jfif',
    'Audi RS7' => 'img/Audi RS7.jfif',
    'BMW Serie 3' => 'img/BMW Serie 3.jfif'
];
foreach($modelos as $modelo =>$imagen){
    

}
// $modelo [0]='img/Audi A4.jfif';
echo "<img src='modelo[0]' alt='A4'>";
/*el boton este lo que va a hacer es un bucle donde meta todos los datos 
valores en el carrito datosSesion(coche,audi)*/

echo "<input type='button' name='coche' value='$coche'>";

// $modelo [1]='img/Audi RS7.jfif';
echo "<img src='modelo[1]' alt='A4'>";

echo "<input type='button' name='coche' value='$coche'>";
for (i = 1; i < count($modelo); i++){
    $modelo[i]
}


// echo "<form method='post' action='carrito.php'>
//         <input type='hidden' name='coche' value='$coche'>
//         <input type='hidden' name='imagen' value='$imagen'>
//         <button type='submit'>Añadir al carrito</button>
//       </form>";

// // echo "<button type'' alt='bacon'>"

?>