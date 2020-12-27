<?php

//echo $movies[0];
/*if (condition) {
    var_dump($_POST['movies']);
    die();
}*/
$movies = unserialize($_POST['movies']); 
//var_dump(empty($movies));
//die();

$selectedKey   = array_rand($movies);
unset($movies[$selectedKey]);
if (isset($_POST['movies']) && !empty($movies)) 
{
    foreach($movies as $movie)
    {       
    echo "<ul><li>".$movie."</li></ul>";      
    } 
}
if (empty($movies)) 
{
    echo "Se han borrado todos";
    $movies = array('Batman', 'Padrino', 'Hulk', 'Mercenarios', 'FaceOff', 'Matrix');
    //mostrar_Array($movies);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    
    <input type="hidden" name="movies" value="<?php echo htmlentities(serialize($movies)); ?>">
    
    <input type="submit" name="submit" value="Enviar">  
</form>
    <a href="index.php">volver</a>
</body>
</html>