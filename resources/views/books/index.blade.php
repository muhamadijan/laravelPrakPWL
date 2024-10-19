<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body><br>
    <h1 class="text-center text-5xl">Hello, world!</h1>
    <br>

    @foreach ($buku as $item)

        <span>{{$item['judul']}}</span>
        <span>{{$item['halaman']}}</span>
        <span>{{$item['penulis']}}</span>
        <br>

        @endforeach

  </body>
</html>