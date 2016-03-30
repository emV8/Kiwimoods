<?php

/*

if(isset($_POST['mood'])){

foreach ((array) $_POST['mood'] as $valeur) 
{
   echo "La checkbox $valeur a été cochée<br>";
}
}
*/
if(!empty($_POST['mood'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['mood'] as $selected){
echo $selected."</br>";
}
}

?>