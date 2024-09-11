<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <style>
        body {
            background-color: #57c2db;
        }
        h1,h2,h3,p {
            margin: 0;
            text-align: center;
            background-color: #deeaed;
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
            max-width: 400px;
        }
    </style>
</head>

<body>
    <h1>Halaman User</h1>
    <img src="https://i.pinimg.com/originals/3c/8d/af/3c8daf4b6318ed7a6b768e80d83059ee.jpg">
    <h2>ID USER <tr>: {{ $id }}</h2>
    <h2>NAMA USER <tr>: {{ $nama }}</h2>
</body>

</html>
