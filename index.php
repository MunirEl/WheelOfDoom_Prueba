<?php
    include_once 'header.php';
?>

<h1>Introduction</h1>
<br>
    <div class="wrapper">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <br>
    <br>
    <hr>
    <br>
<h2>List Of Movies</h2>
<br/>
    <div class="wrapper">
    <?php
    function mostrar_Array($movies)
    {
        foreach($movies as $movie)
        {   
            echo "<ul><li>".$movie."</li></ul>";   
        }
    }
    if (isset($_POST['movies']))
    {
        $movies = unserialize($_POST['movies']);
        mostrar_Array($movies);
    }
    else{
        $movies = array('Batman', 'Padrino', 'Hulk', 'Mercenarios', 'FaceOff', 'Matrix');
        mostrar_Array($movies);
    }
    ?>
    </div>
    <form action="Ruleta.php" method="post">
    
    <input type="hidden" name="movies" value="<?php echo htmlentities(serialize($movies)); ?>">
    
    <input type="submit" name="submit" value="Enviar">
  </form>
</body>
</html>