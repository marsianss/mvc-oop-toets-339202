<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zangeressen Overzicht</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Zangeressen Overzicht</h2>
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Nettowaarde (miljoen)</th>
                    <th>Land</th>
                    <th>Mobiel</th>
                    <th>Leeftijd</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($zangeressen as $zangeres): ?>
                    <tr>
                        <td><?= $zangeres['Naam'] ?></td>
                        <td><?= $zangeres['Nettowaarde (miljoen)'] ?></td>
                        <td><?= $zangeres['Land'] ?></td>
                        <td><?= $zangeres['Mobiel'] ?></td>
                        <td><?= $zangeres['Leeftijd'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
