<!--
Criar um página em PHP+HTML+CSS que contenha um formulário com os dados:
Nome - Texto
Telefone - numérico 
e-mail - texto
Mensagem - texto parágrafo
Fazer o envio dos dados através de um form para um destino e nesse destino exibir os dados enviados 
e também todo o cabeçalho da requisição HTTP, bem como o método utilizado.
Também montar uma URL que envie requisição por GET.


PROFESSOR SANDRO//////
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\style.css">
    <title> Atividade 01 </title>
</head>
<body>
    <header>Formulario de dados</header>
    <main>        
        <div class="forms">
            <h1>Fill in your details</h1>
            <form action="" method="POST">
                <label for="name">Name</label>
                <input type="text" name="name" required>
                <br>
                <label for="number">Number</label>
                <input type="number" name="number" required>
                <br>
                <label for="email"> Email</label>
                <input type="text" name="email" required>
                <br>
                <label for="message">Message</label>
                <input type="text" name="message" required>
                <br>
                <button type="submit">Send data</button>
            </form>            
        </div>            
        <?php
            function valid_email($sEmail){
                If(!filter_var($sEmail,FILTER_VALIDATE_EMAIL)){
                    return false;
                }
                return true;
            }
            function validData($array_post){            
                Foreach($array_post as $array_key => $array_value ){
                    If ($array_value <> ''){
                        switch ($array_key){
                            case 'email':
                                If (!(valid_email($array_value))){
                                    echo "<div><p><em>Error : Preecha o campo de email corretamente!</em></p></div>";
                                };
                            break; 
                            case 'number':
                                If (!(is_numeric($array_value))){
                                    echo "<div><p><em>Error : Preecha o campo de número corretamente!</em></p></div>";
                                };                           
                            break;
                            case 'name':
                                If (!(is_string($array_value))){
                                    echo "<div><p><em>Error : Preecha o campo de nome corretamente!</em></p></div>";
                                };
                            break;
                        }
                    }
                    else 
                        return false;
                }
                return true;
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                If (validData($_POST)){
                    echo 
                    "<div class='div_link_get'>                    
                        <a href='process/process_data.php?name={$_POST['name']}&number={$_POST['number']}&email={$_POST['email']}&message={$_POST['message']}'?>
                        Clique aqui para enviar os dados via GET</a>
                    </div>";
                    $_POST = Null;
                }           
            }            
        ?>
    </main>
    <footer>
        <?="<p>By = Marcus Demarchi " . date('Y') . "</p>"?>
    </footer>
</body>
</html>

