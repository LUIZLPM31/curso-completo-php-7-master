<?php
include_once 'php_action/db_connect.php';
include_once 'includes/head.php';
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>
    <div class="row">
    <div class="col s12 m6 push-m3">
       <center> <h3 class="">Editar Cliente</h3></center>
           <form action="php_action/updete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome'];?>" >
                    <label for="sobrenome">Sobrenome</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="email" id="email" value="<?php echo $dados['email'];?>">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="idade" id="idade" value="<?php echo $dados['idade'];?>">
                    <label for="idade">Idade</label>
                </div>
                <button type="submit" name="btn-editar" class="btn">Atualizar</button>
                <a href="index.php" class="btn green">Lista de clientes</a>   
     </div>
    </div>
     <style>
        body {
            background-image: url("https://wallpapers.com/images/hd/ufo-pictures-1re5vol0pb5pmfch.webp");
            background-size: cover;
        }
        h3 {
            color: #fff;
        }
        .btn {
            background-color: #ca1b1b;
        }
     </style>


<?php
include_once 'includes/footer.php';
?>