<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="/bootstrap.css">

    <title>Halaman {{$title}}</title>
</head>

<body>

    <!-- navbar from component path component-->
    @include('component.navbar')

    <div class="container">
        <div class="row">

            <!-- child section -->
            @yield('container')

        </div>
    </div>

</body>

</html>