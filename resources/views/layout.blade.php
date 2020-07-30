<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    
<link rel="stylesheet" href="{{ mix('/css/theme.css') }}">


    <title>Kechcool.ma | Administration</title>
</head>
<body>

    
    
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{route('produits.index')}}">Produits</a></li>
            <!--<li class="nav-item"><a class="nav-link" href="{{route('produits.create')}}">New product</a></li>-->
        </ul>
    </nav>
    <br>
    @if(session()->has('status'))
    <div class="alert alert-success alert-dismissible fade show container" id="successMessage" role="alert">
        {{session()->get('status')}}
      
      </div>
      @endif

   <div class="container">
       @yield('content')
   </div>
    
   <script src="{{ mix('/js/app.js') }}"></script>
   <script type="text/javascript">window.setTimeout("document.getElementById('successMessage').style.display='none';", 5000); </script>
</body>
</html>