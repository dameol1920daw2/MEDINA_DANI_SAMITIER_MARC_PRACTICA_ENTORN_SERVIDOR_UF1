<html>
    <head>
        <meta content="text/html" charset="UTF-8">
        <title>TiendaSetas</title>
        <link href="css/Proyectophp.css" rel="styleSheet"  TYPE="text/css">
    </head>
    <body>
    
        <?php 
            session_start(); 
            $valor = isset($_SESSION["login"]);
            if ($valor=="1"){
                $usuario =  $_SESSION["usuario"];
                echo "<div class='sesion'>";
                    echo "Sesión iniciada como: ".$usuario;
                    echo "<div class='cerrarsesion'><a href=cerrarsesion.php><input type='Submit' value='Cerrar sesion'></a></div>";
                echo "</div>";
                echo "<center><h1>Camisetas de Fútbol</h1></center>";
                
                class camiseta{
                    
                    private $nombre;
                    private $precio;
                    private $foto;
        
                    function __construct($nombre, $precio, $foto) {
                        $this->nombre = $nombre;
                        $this->precio = $precio;
                        $this->foto = $foto;
                    }
                    function bloque() {
                        echo "<div class='gordo'>";
                            echo "<div class='producto'> ";
                                    echo "<div class='texto'>";
                                        echo "$this->nombre\n";
                                    echo "</div>";
                                    echo "<div class='precio'>";
                                        echo "$this->precio €\n";
                                    echo "</div>";
                                    echo "<div class='imagen'>";
                                        echo "$this->foto\n";
                                    echo "</div>";
                                    echo "<form action='tienda.php' method='post'>";
                                        echo "<input type='Submit' name='cesta' value='Añadir al carrito'>";
                                    echo "</form>";
                            echo "</div>";
                        echo "</div>";
                        if(isset($_POST["cesta"])) {
                            header('Location: cesta.php');
                        }
                    }
                } 
                $camisetaargentina= new camiseta("1a Equipación Argentina 16/17", "89'99", "<img src=imagenes/camisetaargentina.jpg>");
                $camisetaarsenal= new camiseta("1a Equipación Arsenal 19/20", "99'99", "<img src=imagenes/camisetaarsenal.jpg>");
                $camisetaatleti= new camiseta("1a Equipación Atletico 16/17", "89'99", "<img src=imagenes/camisetaatleti.jpg>");
                $camisetabarcelona= new camiseta("3a Equipación Barcelona 19/20", "69'99", "<img src=imagenes/camisetabarcelona.jpg>");
                $camisetaliverpool= new camiseta("2a Equipación Liverpool 19/20", "99'99", "<img src=imagenes/camisetaliverpool.jpg>");
                $camisetaargentina->bloque();
                $camisetaarsenal->bloque();
                $camisetaatleti->bloque();
                $camisetabarcelona->bloque();
                $camisetaliverpool->bloque();
           }
        ?>
    
    </body>
</html>
