<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Components test</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <p>サイドバーです。</p>
    {{ $title }}

    <x-alert message="これはアラートメッセージです。(=ﾟωﾟ)ﾉ"></x-alert>

    {{ $sidebar }}

    {{ $slot }}
</body>
</html>