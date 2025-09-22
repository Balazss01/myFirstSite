<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saját bevásárlás</title>
</head>
<body>
    <h1>Bevásárlólista</h1>
    <div>
        <ol>
            {{-- <?php foreach($bevasarlolista as $elem) :  ?>
                <li><?= $elem; ?></li>
            <?php endforeach; ?> --}}

            @foreach ($bevasarlolista as $listaelem)
                <li>{{$listaelem}}</li>
            @endforeach
        </ol>
    </div>
</body>
</html>
