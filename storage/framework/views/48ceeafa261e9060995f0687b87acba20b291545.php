<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Главная</title>

    <style>

        body{
            font-family: 'Montserrat', sans-serif;

        }
        .container{
            width: 90%;
            margin: auto;
            padding-top: 100px;
        }


        table, th, td {
            border: 1px solid black;
        }

        th, td {
            height: 50px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {background-color: #f2f2f2;}

        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }

    </style>

</head>
<body>

<div class="container">
    <table>
        <tr>
            <th>Название товара</th>
            <th>Количество</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
    </table>
</div>

</body>
</html>
<?php /**PATH D:\Programs\wamp\apache2\htdocs\Laravel\Laravel\resources\views/welcome.blade.php ENDPATH**/ ?>