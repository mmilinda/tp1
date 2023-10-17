<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        
        <?php
            $name = 'Milinda MENDY';
            $sexe = "femme";
            echo '<p>Bonjour ' . $name . '<p>';

            if ($sexe == "homme") {
                echo '<p>Tu es un homme </p>';
            } else {
                echo '<p>Tu es une femme </p>';
            }

            for ($nombre_de_lignes = 1; $nombre_de_lignes <= 5; $nombre_de_lignes++)
            {
                echo 'Ceci est une ligne n°' . $nombre_de_lignes . ' <br/>';
            }

            $foo = array('bar' => 'Guys');
            echo "Hello {$foo['bar']}!";

            
        ?>

    </body>
</html>

