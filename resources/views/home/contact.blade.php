<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>

<h1>{{ $title }}</h1>
<h2>{!! $title !!}</h2>
<h3><?= htmlspecialchars($title) ?></h3>

{{ mb_strlen('Привет, мир!', 'UTF-8') }}

<p>&copy; {{ date('Y') }}</p>

@{{ name }}

<script>
    let data1 = {!! json_encode($data) !!};
    let data2 = <?= json_encode($data) ?>;
    {{--let data3 = {{ \Illuminate\Support\Js::from($data) }};--}}
    let data4 = {{ Js::from($data) }};
    console.log(data1.name);
    console.log(data4.name);
</script>

</body>
</html>

