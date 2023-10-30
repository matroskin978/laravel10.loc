<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $site_title }} :: {{ $title }}</title>
</head>
<body>

<nav>
    {!! $menu !!}
</nav>

<h1><?= $title; ?></h1>

<p>Name: <?= $name; ?></p>
<p>Age: <?= $age; ?></p>
<p>Test 1: <?= $test1; ?></p>
<p>Test 2: <?= $test2; ?></p>

</body>
</html>
