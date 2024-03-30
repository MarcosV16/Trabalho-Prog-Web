<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Salas</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f5ff;
        }

        main {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #34495e;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
            color: #34495e;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eaeaea;
        }

        .delete-button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .delete-button:hover {
            background-color: #c0392b;
        }

        .room-info p {
            margin-bottom: 8px;
            color: #34495e;
            display: flex;
            align-items: center;
        }

        .room-info button {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    
    <main>
        <h2>Informações das Salas</h2>

        <table>
            <thead>
                <tr>
                    <th>Nome da Sala</th>
                    <th>Lugares</th>
                    <th>Computadores</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($blocos as $bloco): ?>
                    <tr>
                        <td><?= $bloco['nome'] ?></td>
                        <td><?= $bloco['lugares'] ?></td>
                        <td><?= $bloco['computadores'] ?></td>
                        <td> 
                            <?php if (isset($bloco['sala_id'])): ?>
                                <button class="delete-button" onclick="confirmDelete('<?= base_url('blocos/deletar/'.$bloco['sala_id']) ?>')">Deletar</button>
                            <?php else: ?>
                                <span>ID não disponível</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="room-info">
        </div>
    </main>

    <script>
        function confirmDelete(url) {
            if (confirm("Tem certeza que deseja deletar esta sala?")) {
                window.location.href = url;
            }
        }
    </script>
</body>
</html>
