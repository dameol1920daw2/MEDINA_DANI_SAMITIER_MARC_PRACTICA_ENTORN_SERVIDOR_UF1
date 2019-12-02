<html>
    <head>
        <meta content="text/html" charset="UTF-8">
        <title>Cesta</title>
    </head>
    <body>
        <?php
            session_start();
            echo "Producto añadido a la cesta";
            header('refresh:2 url=tienda.php');
        ?>
    </body>
</html> 
