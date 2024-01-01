<?php
    if(isset($_POST['submit']))
    {
        /*  print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('Email: ' . $_POST['email']);
        print_r('<br>');
        print_r('Telefone: ' . $_POST['telefone']);
        print_r('<br>');
        print_r('Sexo: ' . $_POST['genero']);
        print_r('<br>');
        print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Estado: ' . $_POST['estado']);
        print_r('<br>');
        print_r('Endereço: ' . $_POST['endereco']);
        print_r('<br>');  */

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco)
        VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
    }
?>


<!DOCTYPE html>
<html lang="en">
<!--Adicionar: listas no Estado e na cidade
    Validar nome não inferior a 3 caracteres
    Validar e-mail
    Validar nascimento não inferior a idade 0-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário de Clientes</title>
        <style>
            body{
                font-family: Arial, helvetica, sans-serif;
                background-image: linear-gradient(to right, rgba(52, 127, 176, 0.808), rgb(38, 16, 72));
            }
            .box{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, .6);
                padding: 15px;
                border-radius: 15px;
                width: 50%;
                color: white;
            }
            fieldset{
                border: 3px solid #0c34b5;
            }
            legend{
                border: 1px solid #0c34b5;
                padding: 10px;
                text-align: center;
                background-color: #0c34b5;
                border-radius: 8px;
                color: white;
            }
            .inputbox{
                position: relative;
            }
            .inputUser{
                background: none;
                border: none;
                border-bottom: 1px solid white;
                outline: none;
                color: white;
                font-size:5 15px;
                width: 100%;
                letter-spacing: 2px;
            }
            .labelInput{
                position: absolute;
                top: 0px;
                left: 0px;
                pointer-events: none;
                transition: .5s;
            }
            .inputUser:focus ~ .labelInput,
            .inputUser:valid ~ .labelInput{
                top: -70%;
                font-size: 12px;
                color: #0c34b5
            }
            #data_nascimento{
                border: none;
                padding: 8px;
                border-radius: 10px;
                outline: none;
                font-size: 15px;
            }
            #submit{
                background-image: linear-gradient(to right, rgb(0,2,197), rgb(90,0,220));
                width: 100%;
                border: none;
                padding: 15px;
                color: white;
                font-size: 15px;
            }
            #submit:hover{
                background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
            }
        </style>
</head>
<body>
    
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend><br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div><br><br>

                <div class="inputbox"> <!--Type tinha q ser e-mail... verificar-->
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div><br><br>

                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label><br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label><br><br>

                    <label for="nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento"  required><br><br>

                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>   <br><br>
                
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div><br><br>

                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div><br><br>
                    
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>