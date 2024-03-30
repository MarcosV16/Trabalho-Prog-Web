<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
    <style>
        body {
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            background-color: #f0f5ff;
        }

        main {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #264653;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            padding: 12px;
            margin: 8px 0;
            border-radius: 6px;
            border: 1px solid #264653;
            width: 300px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="submit"]:focus {
            outline: none;
            box-shadow: 0 0 5px #264653;
        }

        input[type="submit"] {
            background-color: #264653;
            color: #ffffff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2a9d8f;
        }
    </style>
</head>

<body>
    <main>
        <div class="form-container">
            <h2><?php echo $titulo ?></h2>
            <strong><?php echo $msg ?></strong>
            <form method="post">
                <p>Nome da sala: <br><input type="text" name="nome" /></p>
                <p>Lugares: <br><input type="number" name="lugares" /></p>
                <p>Computadores: <br><input type="number" name="computadores" /></p>
                <p><input type="submit" value="<?php echo $acao ?>"></p>
            </form>
        </div>
    </main>
</body>
</html>
