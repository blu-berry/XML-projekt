<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oblici - Električne Gitare</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        #guitar-list {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #ddd;
        }
        img {
            width: 150px;
        }
        .title {
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="menu-wrapper">
            <div id="menu" class="container">
                <ul>
                    <li><a href="index.html">Početna</a></li>
                    <li class="current_page_item"><a href="oblici.php">Oblici</a></li>
                </ul>
            </div>
        </div>
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h1>Električne Gitare</h1>
                    <h2>Oblici</h2>
                </div>
                <div id="guitar-list">
                    <?php
                    $xml = simplexml_load_file('gitare.xml');

                    if ($xml === false) {
                        echo "<p>Greška pri učitavanju XML datoteke.</p>";
                    } else {
                        echo '<table>';
                        echo '<tr><th>Ime</th><th>Slika</th><th>Godina</th><th>Proizvođač</th><th>Opis</th></tr>';

                        foreach ($xml->guitar as $guitar) {
                            echo '<tr>';
                            echo '<td>' . $guitar->name . '</td>';
                            echo '<td><img src="' . $guitar->image . '" alt="' . $guitar->name . '"/></td>';
                            echo '<td>' . $guitar->year . '</td>';
                            echo '<td>' . $guitar->creator . '</td>';
                            echo '<td>' . $guitar->description . '</td>';
                            echo '</tr>';
                        }

                        echo '</table>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div id="footer" class="container">
            <p>Mihael Levanić 2024.</p>
        </div>
    </div>
</body>
</html>
