<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'GoldFish.php';
            require_once 'Arara.php';
            
            $c = new Canguru();
            $k = new Cachorro();
            $j = new Cobra();
            $t = new Tartaruga();
            $g = new GoldFish();
            $a = new Arara();
            
            echo "<p>### CANGURU ###</p>";
            $c->locomover();
            $c->alimentar();
            $c->emitirSom();
            echo "<p>-------------------</p>";
            
            echo "<p>### CACHORRO ###</p>";
            $k->locomover();
            $k->alimentar();
            $k->emitirSom();
            echo "<p>-------------------</p>";
            
            echo "<p>### COBRA ###</p>";
            $j->locomover();
            $j->alimentar();
            $j->emitirSom();
            echo "<p>-------------------</p>";
            
            echo "<p>### TARTARUGA ###</p>";
            $t->locomover();
            $t->alimentar();
            $t->emitirSom();
            echo "<p>-------------------</p>";
            
            echo "<p>### GOLDFISH ###</p>";
            $g->locomover();
            $g->alimentar();
            $g->emitirSom();
            echo "<p>-------------------</p>";
            
            echo "<p>### ARARA ###</p>";
            $a->locomover();
            $a->alimentar();
            $a->emitirSom();
            echo "<p>-------------------</p>";
        ?>
    </body>
</html>
