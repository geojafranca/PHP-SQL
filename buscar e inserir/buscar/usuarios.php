<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <p>logo</p>
                <li><a href="">home</a></li>
                <li><a href="">sobre</a></li>
                <li><a href="">contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <img src="images.png" alt="" srcset="">
        </div>

        <div>
            <?php 
               include "conecta.php";
               echo "<br>";
               $sql = "SELECT id, nome, senha, email FROM usuario";
               $resultado = mysqli_query($conexao, $sql);
               if (mysqli_num_rows($resultado) > 0) {
                while($registro = mysqli_fetch_assoc($resultado)) {
                    echo "<span> ID :   </span>". $registro["id"];
                    echo "<span> - NOME :   </span>". $registro["nome"];
                    echo "<span> - EMAIL :   </span>". $registro["email"];
                    echo "<br>";
                }
               }

            ?>

        </div>
    </main>
</body>
</html>