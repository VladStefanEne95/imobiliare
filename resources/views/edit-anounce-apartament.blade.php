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

.bt {
     list-style-type:none;
     margin:25px 0 0 0;
     padding:0;
}

.bt li {
     float:left;
     margin:0 5px 0 0;
    width:35px;
    height:40px;
    position:relative;
}

.bt label, .bt input {
    display:block;
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
}

.bt input[type="radio"] {
    opacity:0.01;
    z-index:100;
}

.bt input[type="radio"]:checked + label,
.Checked + label {
    background:#507fbe;
}

.bt label {
     padding:5px;
     border:1px solid #CCC; 
     cursor:pointer;
    z-index:90;
}

.bt label:hover {
     background:#DDD;
}

.form-group label {
    float: left;
    text-align: left;
    font-weight: normal;
}

.form-group select {
    display: inline-block;
    width: auto;
    vertical-align: middle;
}

</style>
 <title>Editeaza enuntul</title>
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
<h1 class="titlu_anunt">Editeaza anuntul<br></h1>
</div>



<form method="post" action='/anunt-editat/{{Request::segment(2)}}'>


<div class="container" style=" margin-left:240px;">
  <div class="form-group col-md-2  ">
    <label></label>
    <input  type="text" class="form-control" name="structuraRezistenta" id="structuraRezistenta" placeholder="Structura de rezistenta">
  </div> 
</div>

<div class="container" style=" margin-left:240px;">
  <div class="form-group col-md-2  ">
    <label></label>
    <input  type="text" class="form-control" name="suprafata_utila_totala" id="suprafata_utila_totala" placeholder="Suprafata utila totala">
  </div> 
</div>

<div class="container" style=" margin-left:240px;">
  <div class="form-group col-md-2  ">
    <label></label>
    <input  type="text" class="form-control" name="suprafata_construita" id="suprafata_construita" placeholder="Suprafata construita">
  </div> 
</div>


<div class = "container apartament">
  Locuri parcare<br>
 <select style="width:150px" name="locuri_parcare" id="locuri_parcare">
      <option >Alege</option>
      <option >1</option>
      <option >2</option>
      <option >3</option>
      <option >4</option>
      <option >5</option>
  </select>
  </div>

  <div class = "container apartament">
  Numar garaje<br>
 <select style="width:150px" name="nr_garaje" id="nr_garaje">
      <option >Alege</option>
      <option >1</option>
      <option >2</option>
      <option >3</option>
      <option >4</option>
      <option >5</option>
  </select>
  </div>

  <div class = "container apartament">
  Numar balcoane<br>
 <select style="width:150px" name="nr_balcoane" id="nr_balcoane">
      <option >Alege</option>
      <option >1</option>
      <option >2</option>
      <option >3</option>
      <option >4</option>
      <option >5</option>
  </select>
  </div>

  <div class = "container apartament">
  Numar bucatarii<br>
 <select style="width:150px" name="nr_bucatarii" id="nr_bucatarii">
      <option >Alege</option>
      <option >1</option>
      <option >2</option>
      <option >3</option>
      <option >4</option>
      <option >5</option>
  </select>
  </div>
<br>




<div class="container" style=" margin-left:240px;">
  <div class="form-group col-md-2  ">
    <label></label>
    <input  type="text" class="form-control" name="an_constructie" id="an_constructie" placeholder="an constructie">
  </div> 
</div>

<div class="container" style=" margin-left:240px;">
  <div class="form-group col-md-2  ">
    <label></label>
    <input  type="text" class="form-control" name="tip_bloc" id="tip_bloc" placeholder="tip bloc">
  </div> 
</div>


<div class="container">
 <input type="submit" class="btn btn-info btn-lg"  value="Continua">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</div>

</form>

<script>
function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

$(document).ready(function() {
  $('form').on('submit', function(e){
    // validation code here
    var suprafata = $('#suprafata_utila_totala').val();
    if ( $('#suprafata_utila_totala').val()) {
   if( !isNumeric(suprafata)){
      window.alert("suprafata utila totala trebuie sa fie format doar din numere");
      event.preventDefault();
    }
   }

     var suprafata = $('#suprafata_construita').val();
    if ( $('#suprafata_construita').val()) {
   if( !isNumeric(suprafata)){
      window.alert("suprafata construita totala trebuie sa fie format doar din numere");
      event.preventDefault();
    }
   }


    var an = $('#an_constructie').val();
    if ( $('#an_constructie').val()) {
   if( !isNumeric(an)){
      window.alert("anul construirii trebuie sa fie format doar din numere");
      event.preventDefault();
    }
   }


  });
});


</script>

<br><br><br><br><br>


</body>
</html>