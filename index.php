<!DOCTYPE html> <!-- Declaración del tipo de documento HTML -->
<html>
<head>
    <title>Tienda en línea</title> <!-- Título de la página web -->
    <style>
        /* Estilos para el cuerpo de la página */
        body {
            font-family: Arial, sans-serif; /* Tipo de letra para el cuerpo de la página */
        }
        /* Estilos para cada producto */
        .producto {
            border: 1px solid #000; /* Borde alrededor de cada producto */
            margin-bottom: 10px; /* Espacio debajo de cada producto */
            padding: 10px; /* Espacio alrededor del contenido dentro de cada producto */
        }
        .producto h2 {
            margin: 0; /* Eliminar el margen alrededor del título del producto */
        }
        .producto p {
            margin: 5px 0; /* Espacio arriba y debajo de cada párrafo */
        }
        /* Estilos para la imagen de cada producto */
        .producto img {
            width: 100px; /* Ancho de la imagen */
            height: 100px; /* Altura de la imagen */
        }
        /* Estilos para el botón de cada producto */
        .producto button {
            background-color: #008CBA; /* Color de fondo del botón */
            border: none; /* Sin borde alrededor del botón */
            color: white; /* Color del texto del botón */
            padding: 15px 32px; /* Espacio alrededor del texto dentro del botón */
            text-align: center; /* Alinear el texto al centro */
            text-decoration: none; /* Sin decoración en el texto */
            display: inline-block; /* Hacer que el botón se comporte como un elemento en línea */
            font-size: 16px; /* Tamaño del texto del botón */
            margin: 4px 2px; /* Espacio alrededor del botón */
            cursor: pointer; /* Cambiar el cursor a un puntero cuando se pasa el mouse sobre el botón */
        }
    </style>
    <script>
        /* Función para manejar el evento de clic en el botón de agregar al carrito */
        function agregarAlCarrito(id) {
            alert('Producto ' + id + ' agregado al carrito'); /* Mostrar una alerta cuando se hace clic en el botón */
        }
    </script>
</head>
<body>
    <?php
    /* Crear un arreglo de productos */
    $productos = array(
        array('id' => 1, 'nombre' => 'Versace Eros', 'descripcion' => 'Perfume Versace Eros Eau de toilette 100 ml para hombre', 'precio' => 602.900, 'imagen' => 'imagenes/producto1/imagen1.jpg'),
        array('id' => 2, 'nombre' => 'One Million', 'descripcion' => 'Perfume One Million De Paco Rabanne Para Hombre 100 ml', 'precio' => 279.900, 'imagen' => 'imagenes/producto2/imagen2.jpg'),
        array('id' => 3, 'nombre' => 'Dolce Gabbana', 'descripcion' => 'Perfume Light Blue De Dolce Gabbana Para Hombre 125 ml', 'precio' => 414.900, 'imagen' => 'imagenes/producto3/imagen3.jpg'),
        // Puedes agregar más productos aquí
    );

    /* Recorrer el arreglo de productos y mostrar cada uno */
    foreach ($productos as $producto): ?>
        <div class="producto">
            <!-- Mostrar la imagen del producto -->
            <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
            <!-- Mostrar el nombre del producto -->
            <h2><?php echo $producto['nombre']; ?></h2>
            <!-- Mostrar la descripción del producto -->
            <p><?php echo $producto['descripcion']; ?></p>
            <!-- Mostrar el precio del producto con el signo de dólar -->
            <p>Precio: $<?php echo number_format($producto['precio'], 2); ?></p>
            <!-- Botón para agregar el producto al carrito -->
            <button onclick="agregarAlCarrito(<?php echo $producto['id']; ?>)">Agregar al carrito</button>
        </div>
    <?php endforeach; ?>
</body>
</html>
