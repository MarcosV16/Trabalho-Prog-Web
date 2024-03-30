<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f7fc;
        }

        main {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            max-width: 800px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #3498db;
            transition: color 0.3s ease-in-out;
        }

        h2:hover {
            color: #2980b9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dcdcdc;
            padding: 12px;
            text-align: left;
            transition: background-color 0.3s ease-in-out;
        }

        th {
            background-color: #f2f5f8;
        }

        tr:nth-child(even) {
            background-color: #f7fbff;
        }

        tr:hover {
            background-color: #ebf5ff;
        }

        td:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <main>
        <div>
            <h2>Informações das Salas</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nome da Sala</th>
                        <th>Lugares</th>
                        <th>Computadores</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($blocos as $bloco): ?>
                        <tr>
                            <td><?= $bloco['nome'] ?></td>
                            <td><?= $bloco['lugares'] ?></td>
                            <td><?= $bloco['computadores'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
