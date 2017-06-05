<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            background: #fafafa;
            color: #0a0a0a;
        }

        .header {
            background-color: #232323;
            color: #f3f3f3;
            padding: 5px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .pull-right {
            float: right;
        }

        .body {
            background-color: #F2F2F2;
            color: rgba(0,0,0,0.8);
            font-size: 15px;
            padding: 5px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .logo {
            background-color: #FF5722;
            color: white;
            font-weight: 700;
            border: 3px solid #f3f3f3;
            padding: 5px;
            margin-top: 5px;
        }

        footer {
            background-color: #EEE;
            padding: 15px;
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
</head>
<body>
<div class="header">
    <h1 class="pull-right logo">Espacio Pisanu</h1>
    <h2>{{ $name }}</h2>
</div>
<div class="body">
    <p>
        {{ $menssage }}
    </p>
</div>
<footer>
    <span class="pull-right">Por favor no responda este mensaje.</span>
    Espacio Pisanu &copy;
</footer>
</body>
</html>