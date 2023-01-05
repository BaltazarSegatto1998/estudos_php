<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<form action="index.php" method="POST">

        <div class="container">
                <h1>Formulário com PHP</h1>
                <span class="error">* Obrigatório</span>
                <br> <br>
                Nome: <input  type="text" name="nome" id=""> <br> <br>
                E-mail: <input  type="text" name="email" id=""> <br> <br>
                Website <input  type="text" name="website" id=""> <br> <br>
                Comentário <textarea  name="comentario" id="" cols="30" rows="10"></textarea> <br><br>
                <div class="genero">
                Gênero:
                <input value="masculino"  type="radio" name="genero" id=""> Masculino
                <input value="feminino" type="radio" name="genero" id=""> Feminino
                <input value="outro" type="radio" name="genero" id=""> Outro
                </div>
                <br><br>
                <button name="enviado" type="submit">Enviar</button>
                <h1>Dados Enviados:</h1>

        </div>
        <?php 
        if(isset($_POST['enviado'])) {
           

            if(empty($_POST['nome']) || strlen ($_POST['nome']) < 3 || strlen($_POST['nome']) > 100) {
                echo '<p class="error">Preencha o campo nome</p>';
                die();
            }

            if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo '<p class="error">Preencha o campo Email</p>';
                die();
            }

            if(!empty($_POST['website']) && !filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
                echo '<p class="error">Preencha corretamente o website</p>';
                die();
            }
            
            $genero = "Não selecionado";
            if(isset($_POST['genero']))  {
                $genero = $_POST['genero'];
                    if($genero != "masculino" && $genero != "feminino" && $genero != "outros") {
                        echo '<p class="error">Preencha corretamente o gênero</p>';
                        die();
                    }
            }
           
                

            echo "<p><b>Nome:</b>" . $_POST['nome'] ."</p>";
            echo "<p><b>E-mail:</b>" . $_POST['email'] ."</p>";
            echo "<p><b>Website:</b>" . $_POST['website'] ."</p>";
            echo "<p><b>Comentário:</b>" . $_POST['comentario'] ."</p>";
            echo "<p><b>Gênero:</b>" . $genero ."</p>";
        }
        
        
        ?>



          
        
</form>


</body>
</html>