<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso php</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <h1 id='logo'> <a href="/index.php"> Blog de Videojuegos</a></h1>
        <nav id="menu">
            <ul>
                <li> <a href="http://"> Inicio</a></li>
                <li> <a href="http://"> Categoria 1</a></li>
                <li> <a href="http://"> Categoria 2</a></li>
                <li> <a href="http://"> Categoria 3</a></li>
                <li> <a href="http://"> Categoria 4</a></li>
                <li> <a href="http://"> Sobre nosotros</a></li>
                <li> <a href="http://"> Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div id="contenedor">
        <aside id="sidebar">
            <div id="login" class="block-aside">
            
                <h3>Entrar a la web</h3>
                <form action="login.php" method="get">
                    <label for="user">Email:</label>
                    <input type="email" name="user" id="user" />
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" />
                    <input type="submit" class="boton" value="Entrar">
                </form>
            </div>

            <div id="register" class="block-aside">
                <h3>Registrate en la web</h3>
                <form action="register.php" method="post">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" />
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" />
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" />
                    <input  type="submit" class="boton" value="Registrate">
                </form>
            </div>
        </aside>

        <div id="principal">

            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <a href="#">
                    <h2>Titulo de la entrada</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Repellendus laudantium possimus facilis nemo iusto numquam reiciendis error, sed dicta beatae nesciunt fugiat sapiente obcaecati, quod pariatur,
                        omnis ut accusamus praesentium
                    </p>
                </a>
            </article>
            <article class="entrada">
                <a href="#">
                    <h2>Titulo de la entrada</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Repellendus laudantium possimus facilis nemo iusto numquam reiciendis error, sed dicta beatae nesciunt fugiat sapiente obcaecati, quod pariatur,
                        omnis ut accusamus praesentium
                    </p>
                </a>
            </article>
            <article class="entrada">
                <a href="#">
                    <h2>Titulo de la entrada</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Repellendus laudantium possimus facilis nemo iusto numquam reiciendis error, sed dicta beatae nesciunt fugiat sapiente obcaecati, quod pariatur,
                        omnis ut accusamus praesentium
                    </p>
                </a>
            </article>
            <div id="ver-todas"><a href="#" >Ver todas las entradas</a></div>
        </div>

    </div>

    <footer id="pie">
        Desarrollado por Aitor Guerrero
    </footer>

</body>
</html>