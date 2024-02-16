<!-- cadastro_colaborador.php -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="\tour11\style.css">
    <title>Cadastro Colaborador</title>
</head>
<body>

<div class="container">
    <?php include 'navbar.php'; ?>

    <h1 class="text-center mt-4">Cadastro de Colaborador</h1>

    <!-- Formulário de Cadastro -->
    <form action="processar_cadastro.php" method="post">
        <div class="form-group">
            <label for="nome">Nome da Agência/Pousada</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="imagem">URL da Imagem</label>
            <input type="text" class="form-control" id="imagem" name="imagem" required>
        </div>

        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar para Análise</button>
    </form>
</div>

</body>
</html>
