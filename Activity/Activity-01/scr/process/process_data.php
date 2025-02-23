<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style_get.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <title>Data Get</title>
</head>
<body>
    <header>
        <a href="../index.php">
            <i class='bi bi-box-arrow-left'></i>
        </a>        
        <h1>Formulario de dados</h1>
    </header>

    <main>
        <div class="data_header_request">
            <?php
                $headers_request = apache_request_headers();
                echo "<div class='title_data_request'>                  
                        <h1>Dados recebidos via GET <br></h1>
                     </div>";
                foreach ($headers_request as $header => $value){
                    echo "<p class='information_get_header'>$header : $value </p>";
                };
            ?>
        </div>
        <div class="data_get">
            <h2 class="title_data_get">
                Data get
            </h2>
            <div class="data_get_form">
                <p class="information_get">Name = <?php echo $_GET['name'] ?></p>
                <p class="information_get">Number = <?php echo $_GET['number'] ?></p>
                <p class="information_get">Email = <?php echo $_GET['email'] ?></p>
                <p class="information_get">Message = <?php echo $_GET['message'] ?></p>
            </div>
        </div>
    </main>

    <footer>
        <a href="https://github.com/MarcuseDemarchi/developmentWebII" target="_blank">Clique aqui para acessar o link no GitHub</a>
    </footer>
</body>
</html>