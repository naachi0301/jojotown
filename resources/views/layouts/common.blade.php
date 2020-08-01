<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>リアルタイムトレンド</title> 
        <link href="css/index.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
<!-----------------------------header----------------------------->
        <header class="header fixed-top">
            <p class="font-weight-bold text-nowrap text-dark">リアルタイムトレンド</p> 
        </header>
    <!-------------------------------main----------------------------->
          @yield('content')
    <!---------------------------------------------footer---------------------------------------->
        <footer class="footer mb-0">
            <p class="text-center font-weight-light">©️2020 c-kusuda</p>
        </footer>
        <div><a href="/admin/product">管理機能</a></div>
    </body>
</html>