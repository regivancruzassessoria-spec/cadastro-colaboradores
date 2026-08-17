<?php

//Recebimento dos dados enviados pelo formulario
$nome1 = $_POST["nome1"] ?? "";
$idade2 = $_POST["idade2"] ?? "";
$profissao3 = $_POST["profissao3"] ?? "";
$salario4 = $_POST["salario4"] ?? "";
$experiencia5 = $_POST["experiencia5"] ?? "";

//Proteção para exibição dos dados no HTML
$nome1 = htmlspecialchars($nome1, ENT_QUOTES, "UTF-8");
$idade2 = htmlspecialchars($idade2, ENT_QUOTES, "UTF-8");
$profissao3 = htmlspecialchars($profissao3, ENT_QUOTES, "UTF-8");
$salario4 = htmlspecialchars($salario4, ENT_QUOTES, "UTF-8");
$experiencia5 = htmlspecialchars($experiencia5, ENT_QUOTES, "UTF-8");

//Formatação simples do salário
$salarioFormatado = number_format((float)$salario4, 2, ",", ".");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação do Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="container resultado">
        <h1>Cadastro recebido com sucesso!</h1>

        <div class="dados">
            <p><strong>Nome completo:</strong> <?php echo $nome1; ?></p>
            <p><strong>Idade:</strong> <?php echo $idade2; ?> anos</p>
            <p><strong>Profissão:</strong> <?php echo $profissao3; ?></p>
            <p><strong>Salário pretendido:</strong> R$ <?php echo $salarioFormatado; ?></p>
            <p><strong>Experiência anterior:</strong><br><?php echo nl2br($experiencia5); ?></p>
        </div>

        <div class="mensagem">
            <h2>Mensagem personalizada</h2>
            <p>
                Olá, <strong><?php echo $nome1; ?></strong>!
                Agradecemos pelo seu interesse em trabalhar conosco como
                <strong><?php echo $profissao3; ?></strong>.
                Sua experiência informada foi:
                <strong><?php echo $experiencia5; ?></strong>.
                Seu cadastro foi recebido e será analisado pela equipe
                das Lojas Brincos e Companhia.
            </p>
        </div>

        <a class="botao" href="cadastro.html">Voltar ao formulário</a>
    </main>

</body>
</html>
