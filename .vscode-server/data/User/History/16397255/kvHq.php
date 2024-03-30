<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Selecionar Sala para Edição</title>
</head>
<style>
    body{
        height: 100%;
        width: 100%;
    }

    @media (min-width: 640px){
        table{
            display: inline-table;
        }

        thead tr:not(:first-child){
            display: none;
        }
    }

    #header{
        width: 100%;
    }
</style>
<body>
<div class="w-screen h-screen bg-gradient-to-t from-gray-950 to-blue-600 flex flex-col items-center p-20 ">
    <h2>Selecionar Sala para Edição</h2>
    <form method="get" action="salaseditarselecionada/editar">
        <select name="sala_id">
            <?php foreach ($salas as $sala): ?>
                <option value="<?= $sala['sala_id'] ?>"><?= $sala['nome'] ?></option>
            <?php endforeach; ?>
        </select>
        <p><input type="submit" value="Editar Sala"></p>
    </form>
</div>
</body>
</html>
