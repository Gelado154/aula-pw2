<?php
 
 require_once $_SERVER['DOCUMENT_ROOT'] . '/exemplo_banco_dados/controller/conexao.php';
 ?>
<!DOCTYPE html>
<html>
<head>
   /**esta definindo o titulo da pagina */
    <title>Tela de Consulta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Consulta</h2>
        <table class="table">
            <thead>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                <tr>
                <tbody>
                    <?php
                    $pessoaController = new pessoaController();
                    $pessoas = $pessoaControler->listar();
                    foreach($pessoas as $pessoas){
                        ?>
                        <tr>
                            <th><?php echo $pessoa['nome']; ?></th>
                            <th><?php echo $pessoa['telefone']; ?></th>
                            <th><?php echo $pessoa['celular']; ?></th>

                        </tr>
                <?php } ?>
                    </tbody>

                    
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</body>
</html>