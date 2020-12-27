<?php
        $movies = array('Batman', 'Padrino', 'Hulk', 'Mercenarios', 'FaceOff', 'Matrix');
        
        //var_dump($selectedMovie);
        //die();
        /* foreach($movies as $movie)
        {
            $selectedKey   = array_rand($movies);
            $selectedMovie = $movies[$selectedKey];
            
            echo "<ul><li>".$movie."</li></ul>";
            
        } */
        //echo $selectedMovie;
        //echo "document.write($selectedMovie);";
    ?>
    <script>
    
    function funcion1()
    {
        <?php
        $movies = array('Batman', 'Padrino', 'Hulk', 'Mercenarios', 'FaceOff', 'Matrix');
        
        $selectedKey   = array_rand($movies);
        $selectedMovie = $movies[$selectedKey];
        //var_dump($selectedMovie);
        //die();
        //echo $selectedMovie;
        //echo "document.write($selectedMovie);";
       
        echo "document.write('$selectedMovie');";
        ?>
       
    }
    </script>
    
    <button onclick="funcion1()"> Llamar </buton>

    <script>
    function funcion2()
    {
        <?php

        /*foreach($movies as $movie)
        {
            $selectedKey   = array_rand($movies);
            $selectedMovie = $movies[$selectedKey];
            
            echo "<ul><li>".$movie."</li></ul>";
        }*/
        $movies = array('Batman', 'Padrino', 'Hulk', 'Mercenarios', 'FaceOff', 'Matrix');
        $selectedKey   = array_rand($movies);
        echo "document.write('$movies[$selectedKey]<br/>');";
        //unset($movies[$selectedKey]);
        //$selectedMovie = $movies[$selectedKey];
        for ($i=0; $i < sizeof($movies); $i++) { 
            echo "document.write('$movies[$i]<br/>');";
        }
        //echo "document.write('$movies[0]');";
        //return $movies;
        ?>

    }
    </script>
    
    <button onclick="funcion2()"> Reset </buton>