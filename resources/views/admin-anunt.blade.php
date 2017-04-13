<!DOCTYPE html>
<head>
<style type="text/css">
  .titlu_anunt{
    margin-left: 30%;
    margin-top: 50px;
  }
  .subtitlu_anunt{
    margin-left:  30%;
  }

  ::-webkit-input-placeholder {
   text-align: left;
}

.date-contact {
    border-top: 1px solid #f0f0f0;
    border-bottom: 1px solid #f0f0f0;
    background: #f9f9fa;  
}


.stealth{
  display: none !important;
}



</style>
 <title>Editeaza anunturi</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <a class="navbar-brand" href="#">Imobiliare</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Alte anunturi <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">Cauta</a></li>
                <li><a href="http://127.0.0.1:8000/adauga-anunt">Adauga anunt</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://127.0.0.1:8000/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="http://127.0.0.1:8000/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
<h1 class="titlu_anunt">Editeaza anunturi<br></h1>
</div>
<div class ="container" style="margin-top:60px">
<div class="btn-secondary" >
  <label class="btn btn-default">
    <input type="radio" name="options" id="add"  > Adauga anunt
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="delete" > Sterge anunt
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="modify" > Modifica anunt
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="list" > Listeaza anunturi
  </label>
</div>
</div>
<div class="container stealth listAn" style="margin-top:30px;" id="listUser">
<form class="form-inline " action="/price/filter">
   <button type="submit" class="btn btn-default">Listeaza</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
  </form>
</div>

<div class="addAn container stealth" id="addAn" style="margin-top:30px;">
<form class="form-inline" action="/adauga-anunt" method="get">
  <button type="submit" class="btn btn-default">Adauga anunt</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div>

<div class="delAn container stealth" id="delAn" style="margin-top:30px;">
<form class="form-inline" action="/anunt-sters" method="post">
<h3>Sterge un anunt</h3><br><br>
  <div class="form-group">
    <label for="name">id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="id_an" class="form-control" id="id_an">
  </div> 
  <br><br>
  <button type="submit" class="btn btn-default">Submit</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div>
<div class ="container">


<div class="modifyAn container stealth" id="modifyAn" style="margin-top:30px;">
<form class="form-inline" action="/anunt-modificat" method="post">
  <div class="form-group"><h3>Modifica</h3><br>
    <label for="name">id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="id_an" class="form-control" id="id_modify">
  </div>
  <br><br>
  <div class="form-group"><br>
    <label for="name">Field&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="Field" class="form-control" id="Field">
  </div>
  <br><br>
    <div class="form-group"><br>
    <label for="name">Value&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="value" class="form-control" id="value">
  </div>
  <br><br>
  
  <br><br>
  <button type="submit" class="btn btn-default">Submit</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div>


<br><br><br><br><br>


<script>
var tip = 0;
$('#add').click(function() {
   if($('#add').is(':checked')) {
    $(".addAn").removeClass("stealth");
    $(".delAn").addClass("stealth");
    $(".modifyAn").addClass("stealth");
    $(".listAn").addClass("stealth");


  }
});

$('#delete').click(function() {
   if($('#delete').is(':checked')) {
    $(".delAn").removeClass("stealth");
     $(".addAn").addClass("stealth");
    $(".modifyAn").addClass("stealth");
    $(".listAn").addClass("stealth");

  }
});

$('#modify').click(function() {
   if($('#modify').is(':checked')) {
    $(".modifyAn").removeClass("stealth");
     $(".delAn").addClass("stealth");
    $(".addAn").addClass("stealth");
    $(".listAn").addClass("stealth");
  }
});
$('#list').click(function() {
   if($('#list').is(':checked')) {
    $(".listAn").removeClass("stealth");
     $(".delAn").addClass("stealth");
    $(".modifyAn").addClass("stealth");
    $(".addAn").addClass("stealth");

  }
});
 


</script>

</body>
</html>