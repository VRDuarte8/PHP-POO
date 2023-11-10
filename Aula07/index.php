<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 31, 
                            1.75, 68.9, 11, 3, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 
                29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("Snapshadow", "EUA", 35, 
                    1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Austrália", 28, 
                    1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador("UF0Cobol", "Brasil", 37, 
                    1.70, 119.3, 5, 4, 3);
            $l[5] = new Lutador("Nerdaart", "EUA", 30, 
                    1.81, 105.7, 12, 2, 4);
            
            $luta1 = new Luta();
            $luta1->marcarLuta($l[2], $l[3]);
            $luta1->lutar();
            $l[2]->status();
            $l[3]->status();
            
            $luta2 = new Luta();
            $luta2->marcarLuta($l[2], $l[5]);
            $luta2->lutar();
            
            $luta3 = new Luta();
            $luta3->marcarLuta($l[3], $l[3]);
            $luta3->lutar();
        ?>
    </body>
</html>
