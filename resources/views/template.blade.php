<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/my-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(217, 234, 248);
        }
    </style>
</head>

<body>
    <div class="container">
        {{-- Menyisipkan fungsi php --}}
        <h4>Sekarang tahun <?php echo date('Y'); ?></h4>
        <ol>
            <li><?php echo $one; ?></li>
            <li><?php echo $two; ?></li>
            @foreach ($list as $fromRoute)
                <li><?php echo $fromRoute; ?></li>
            @endforeach
        </ol>

        <div>
            <img src="img/1.png" width="100" alt="">
            <img src="img/2.png" width="100" alt="">
            <img src="img/1.png" width="100" alt="">
            <img src="img/2.png" width="100" alt="">
        </div>

        <br>
        <button class="btn btn-primary text-right">Button</button>
    </div>
    <script src="js/my-script.js"></script>
</body>

</html>

