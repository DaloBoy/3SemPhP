<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Swag.css">
    <style>
        body {margin:0;}

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: blue;
        }
    </style>
</head>
<body>

<ul>
    <li><a href="../controllers/Index.php">Home</a></li>
    <li><a href="../controllers/MalingsSoap.php">Historik</a></li>
    <li><a class="active" href="../controllers/Opsættere.php">Opsættere</a></li>
</ul>

<div style="padding:20px;margin-top:30px;background-color:lightblue;height:1500px;">

    <table id="opsættere">
        <tr>
            <th>Navn</th>
            <th>Telefon</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>Billy Joe, Jimbob</td>
            <td>07042017</td>
            <td>Redneck.YEAH@gmail.com</td>
        </tr>
        <tr>
            <td>Ivan Ivanson, Ivanovitch</td>
            <td>87652341</td>
            <td>Cyka.Blyat@Vodka.com</td>
        </tr>
        <tr>
            <td>Jens Jeppersen, Jensen</td>
            <td>55586114</td>
            <td>Jens.Jensen@hotmail.com</td>
        </tr>

    </table>
</div>

</body>
</html>