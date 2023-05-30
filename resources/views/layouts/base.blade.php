<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>

    <div class="container">
        <h1>T94 - Olá Mundo!</h1>
        <hr>
        @yield('content')
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit excepturi veritatis, nobis assumenda est harum dolore sequi officia, fuga sed vero aliquam eum provident voluptate maiores optio voluptas quae accusamus!</p>
        <p>Odio esse libero officia quasi reiciendis exercitationem et illum. Omnis dolore nobis porro iusto non blanditiis optio est veritatis culpa obcaecati molestias facilis maxime velit, voluptatibus aliquam, nemo, itaque expedita?</p>
        <p>Ipsum eius sunt hic! Totam exercitationem veritatis modi quis, corporis accusamus consequuntur ipsum consectetur architecto assumenda harum nam, illo est explicabo? Quia alias vitae earum at dignissimos nesciunt nam accusamus.</p>
        <p>Id reprehenderit corrupti vitae, laboriosam architecto maxime illum modi animi eos. Esse fuga rerum animi, a hic consequuntur necessitatibus itaque quisquam voluptas ducimus molestiae sit dicta officia veritatis eius corporis?</p>
        <p>Eum eveniet quibusdam repudiandae eaque, beatae at dolorem velit reprehenderit dolorum commodi iusto dolores quia obcaecati ducimus atque tenetur dignissimos, voluptatum minima. Voluptate, commodi? Dolore vero adipisci dignissimos nihil qui!</p>
    </div>
    <footer>
        <p class="fs-5 text-center">T94</p>
    </footer>

</body>
</html>
