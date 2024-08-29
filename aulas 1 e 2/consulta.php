<?php

/*  AULA 1  */
    include "conecta.php";
    
    echo "<br>";

    $sql = "SELECT id, nome, senha, email FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
    
    echo "<br> Mostrando todos os registros <br><br>";

    if (mysqli_num_rows($resultado) > 0) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            echo "Id: " . $registro["id"]. " - Nome: " . $registro["nome"].
            " - Senha: " . $registro["senha"]. " - Email: " . $registro["email"].
            "<br>";
        }
    } else {
        echo "Nenhum registro econtrado.";
    }    



    
    echo "<br>Nomes que começam com S : <br>";
    

    $sql = "SELECT id, nome, senha, email FROM usuario WHERE nome LIKE 's%'";
    $resultado = mysqli_query($conexao, $sql);
    
    echo "<br>";

    if (mysqli_num_rows($resultado) > 0) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            echo "Id: " . $registro["id"]. " - Nome: " . $registro["nome"].
            " - Senha: " . $registro["senha"]. " - Email: " . $registro["email"].
            "<br>";
        }
    } else {
        echo "Nenhum registro econtrado.";
    }    


    
    echo "<br> Ordernados por email : <br>";
    
    
    $sql = "SELECT id, nome, senha, email FROM usuario ORDER BY email;";
    $resultado = mysqli_query($conexao, $sql);
    
    echo "<br>";

    if (mysqli_num_rows($resultado) > 0) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            echo "Id: " . $registro["id"]. " - Nome: " . $registro["nome"].
            " - Senha: " . $registro["senha"]. " - Email: " . $registro["email"].
            "<br>";
        }
    } else {
        echo "Nenhum registro econtrado.";
    }
    
    


    echo "<br> Verificando se existe usuário = 'Sarah' com senha = '123' e mostrando seu email : <br>";
    

    $sql = "SELECT id, nome, senha, email FROM usuario WHERE nome = 'Sarah' AND senha = '123' ;";
    $resultado = mysqli_query($conexao, $sql);
    
    echo "<br>";

    if (mysqli_num_rows($resultado) > 0) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            echo "Id: " . $registro["id"]. " - Nome: " . $registro["nome"].
            " - Senha: " . $registro["senha"]. " - Email: " . $registro["email"].
            "<br>";
        }
    } else {
        echo "Nenhum registro econtrado.";
    }   
    

    
/*  AULA 2  */    
?>



