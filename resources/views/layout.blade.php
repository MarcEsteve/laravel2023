<!DOCTYPE html>
<html>
<head>
    <title>Laravel Blade Template</title>
    <style>
        /* Estilo general */

        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        }

        .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        }

        /* Encabezado */

        header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        }

        /* Navegación */

        nav {
        background-color: aliceblue;
        text-align: center;
        padding: 10px 0;
        }

        nav:hover {
        background-color: #555;
        }

        nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        }

        nav li {
        display: inline-block;
        margin: 0 10px;
        }

        nav a {
        color: aliceblue;
        text-decoration: none;
        padding: 5px 10px;
        }

        nav a:hover {
        background-color: #555;
        }

        /* Contenido central */

        main {
        padding: 20px;
        }

        /* Footer */

        footer {
        background-color:aliceblue;
        color: #000;
        text-align: center;
        padding: 10px 0;
        }

        /* Estilos adicionales para hacerlo bonito */

        header h1 {
        font-size: 36px;
        }

        nav a {
        border-radius: 5px;
        }

        footer p {
        font-style: italic;
        }
    </style>   
</head>
<body>
    @yield('nav')
    <div class="container">
        @yield('content')
    </div>
    @yield('footer')
</body>
</html>