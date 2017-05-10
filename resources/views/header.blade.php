<!DOCTYPE html>
<head>
<style type="text/css">
</style>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('/')}}">Imobiliare</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Alte anunturi <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="{{URL::to('/')}}/price/filter">Cauta</a></li>
                <li><a href="{{URL::to('/')}}/adauga-anunt">Adauga anunt</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{URL::to('/')}}/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="{{URL::to('/')}}/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>