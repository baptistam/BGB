<?php require "Foo.php5"; ?>

<html>
    <head>

    </head>
    <body>
        <h1>
            <?php echo "This application says 'Hello World'"; ?>
        </h1>

        <?php
            $foo = new Foo();

            echo $foo -> Count(100);
        ?>

        <br/>

        <?php
            $person = new Person();
            $person -> firstName = "Manuel Baptista";

            echo $foo -> Greet($person);
        ?>
    </body>
</html>