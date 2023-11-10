<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Usuario.php';
            require_once 'Visualizacao.php';
            
            $v = array();
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de Python");
            $v[2] = new Video("Aula 10 de HTML5");
            
            $u = array();
            $u[0] = new Usuario("Vinicius", 22, "M", "VRDuarte");
            $u[1] = new Usuario("Isabella", 19, "F", "Isinha");
            
            $vis = array();
            $vis[0] = new Visualizacao($u[0], $v[0]);
            $vis[0]->avaliar(10);
            $vis[1] = new Visualizacao($u[1], $v[0]);
            $vis[1]->avaliarPorc(87);
            print_r($vis[0]);
            echo "<p>----------------</p>";
            $vis[2] = new Visualizacao($u[0], $v[1]);
            $vis[2]->avaliar();
            print_r($vis[2]);
        ?>
        </pre>
    </body>
</html>
