<?php
$conexion = mysqli_connect("localhost", "root", "", "el_pecado") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "INSERT INTO pedidos(nombre_cliente,fecha,bebida,costo) VALUES 
                       ('$_REQUEST[nombre_c]','$_REQUEST[fecha]',$_REQUEST[tipo_bebidas],$_REQUEST[precio_b])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El pedido fue dado de alta.";
    
?>

