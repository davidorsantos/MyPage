<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Pessoal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            width: 100%;
            padding: 1rem 0;
            text-align: center;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 2rem auto;
            text-align: center;
        }
        .photos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
        }
        .photo {
            width: 200px;
            height: 200px;
            background-size: cover;
            background-position: center;
            border: 2px solid #ccc;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo à Minha Página Pessoal</h1>
    </header>
    <div class="container">
        <p>Fotos:</p>
        <div class="photos">
            <div class="photo" style="background-image: url('imgs/foto1.jpg');"></div>
            <div class="photo" style="background-image: url('imgs/foto2.jpg');"></div>
            <div class="photo" style="background-image: url('imgs/foto3.jpg');"></div>
            <div class="photo" style="background-image: url('imgs/foto4.jpg');"></div>
            <div class="photo" style="background-image: url('imgs/foto5.jpg');"></div>
        </div>
    </div>
</body>
</html>
