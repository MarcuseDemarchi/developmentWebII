<!--
**Precisa para fazer o curriculo**
Experiência
Habilidades
Educação
Atividades 

filepath: /C:/xampp/htdocs/developmentWebII/Activity/Activity-02/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style_get_data.css">
    <title>Formulario curriculo</title>
</head>
<body>
    <div class="forms_main">
        <header>
            <h1>Crie seu curriculo</h1>
        </header>
        <main>
            <div class="get_data_curriculum">
                <form action="src/generator_pdf.php" method="post">                    
                    <h2 class="subtitle_form">Dados iniciais</h2>
                    <label for="name">Nome completo</label>
                    <br>
                    <input type="text" name="name">
                    <br>
                    <h2 class="subtitle_form">Endereço</h2>
                    <label for="andress">Endereço completo</label>
                    <br>
                    <input type="text" name="andress">
                    <br>
                    <h2 class="subtitle_form">Endereços</h2>
                    <label for="number_phone">Numero de telefone</label>
                    <br>
                    <input type="number" name="number_phone">
                    <br>
                    <label for="email">Email</label>
                    <br>
                    <input type="text" name="email">
                    <br>
                    <label for="linkedin">Link linkedin</label>
                    <br>
                    <input type="text" name="linkedin">
                    <br>
                    <h2 class="subtitle_form">Endereço</h2>
                    <label for="experience">Descritivo de experiencia</label>
                    <br>
                    <input type="text" name="experience">  
                    <br>
                    <label for="skills">Habilidades</label>
                    <br>
                    <input type="text" name="skills">
                    <br>
                    <label for="formacao">Formações</label>
                    <br>
                    <input type="text" name="formacao">
                    <br>                                    
                    <button type="submit">Gerar curriculo</button>
                </form>
            </div>
        </main>
        <footer>
            <?= "By Marcus Demarchi " . date('Y') ?>
        </footer>
    </div>
</body>
</html>

