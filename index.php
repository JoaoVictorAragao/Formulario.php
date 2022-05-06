<?php
    include_once "conex.php";
// Desenvolvimento do programa iniciado dia 19/04/2022
?> 
<!DOCTYPE html>
    <html lang="pt-br">
        
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <meta charset="UTF-8">
            <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="style.css"> 
            <title>Formulário</title>
            
        </head>

        <body>
            <header class="cabecalho">
                <h1>Formulário</h1>
                <h2>Formulário desenvolvido por propósitos de processo seletivo<p>
                
            </header>

            <main class="principal">
                <form method="post" id="cad_user_form">
                    Nome<br>
                    <input type="text" name="nome" required><br>

                    CPF<br>
                    <input type="text" name="CPF" required><br>

                    Idade<br>
                    <input type="number" name="Idade" required><br>

                    Sexo<br>
                    <input type="radio" name="Sexo" value="M" required>Masculino<br>
                    <input type="radio" name="Sexo" value="F" required>Feminino<br>

                    Endereço<br>
                    <input type="text" name="Endereco" required><br>

                    Grau de escolaridade<br>
                    <input type="text" name="Escolaridade" required><br>

                    Nome do pai<br>
                    <input type="text" name="Pai" required><br>

                    Nome da mãe<br>
                    <input type="text" name="Mae" required><br>

                    Se descreva de forma breve<br>
                    <textarea name="desc" required></textarea>
                    <br>
                    <input type="submit" class="btn btn-success" value="Cadastrar" id="cad_user"/>

                    <a href="relatorio.html" type="button" class="btn btn-primary">
                        Relatório
                    </a>
                </form>
                
                
                

            </main>
            <footer class="rodape">
                Desenvolvido por João Victor Ferreira de Aragão | <?= date("Y") ?> 
            </footer>
            <script src="script.js"></script>
        </body>
        
    </html>