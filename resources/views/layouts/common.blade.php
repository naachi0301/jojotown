<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>リアルタイムトレンド</title> 
        <link href="css/index.css" rel="stylesheet">
    </head>
    <body>
<!-----------------------------header----------------------------->
        <div class="header">
            <h1>リアルタイムトレンド</h1>
        </div>
        
<!-------------------------------main----------------------------->
      @yield('content')
<!---------------------------------------------footer---------------------------------------->
        <div class="footer">
            <p>©️2020 c-kusuda</p>
        </div>
        <a href={{ route('logout') }} onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
</a>
<form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
    @csrf
    </body>
</html>