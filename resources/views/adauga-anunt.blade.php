<!DOCTYPE html>
<head>
<style type="text/css">
  .titlu_anunt{
    margin-left:  40%;
    margin-top: 60px;
  }
  .subtitlu_anunt{
    margin-left:  40%;
  }

  ::-webkit-input-placeholder {
   text-align: left;
}

.date-contact {
    border-top: 1px solid #f0f0f0;
    border-bottom: 1px solid #f0f0f0;
    background: #f9f9fa;  
}
.reveal-if-active {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
}
 

</style>
 <title>Adauga anunt</title>
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
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>

</nav>

<h1 class="titlu_anunt">Adauga anuntul tau<br><h4 class="subtitlu_anunt">urmeaza pasii, e mai simplu ca niciodata</h4></h1>

<div class ="container" style="margin-top:60px">
<div class="btn-secondary" data-toggle="buttons">
  <label class="btn btn-default">
    <input type="radio" name="options" id="option1" autocomplete="off" checked> Apartament
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="option2" autocomplete="off"> Casa
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="option3" autocomplete="off"> Teren
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="option3" autocomplete="off"> Comercial
  </label>
</div>
</div>

<div class ="container" style="margin-top:50px">
<div class="btn-secondary" data-toggle="buttons">
  <label class="btn btn-default">
    <input type="radio" name="options" id="option1" autocomplete="off" checked> De vanzare
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="option2" autocomplete="off"> De inchiriat
  </label>
  </div>
  </div>


<form>
<div class="container" style="margin-top:20px; margin-left:240px;">
  <div class="form-group col-md-6  ">
    <label for="formGroupExampleInput"></label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titlu anunt">
  </div> 
</div>
</form>

<div class="container">
<form action="upload.php" method="post" enctype="multipart/form-data">
    Adauga poze:
    <input type="file" name="fileToUpload" id="fileToUpload">
</form>
</div>


<div class ="container" style="margin-top:20px">
Numar camere
<div class="btn-secondary" data-toggle="buttons">
  <label class="btn btn-default">
    <input type="radio" name="options" id="option1" autocomplete="off" checked>1
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="option2" autocomplete="off">2
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="option3" autocomplete="off">3
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="option3" autocomplete="off">4
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="option3" autocomplete="off">5+
  </label>
    <label>
    <div class="reveal-if-active">
    <input type="text" class="form-control"size="1">
    </div>
    </label>
</div>
</div>


<form>
<div class="container" style=" margin-left:240px; margin-top:20px;">
  <div class="form-group col-sm-2  ">
    <label for="formGroupExampleInput"></label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nr Bai">
  </div> 
</div>
</form>

<div class = "container">
  Compartimentare<br>
 <select style="width:150px">
      <option value="Bucuresti">Alege</option>
      <option value="Bucuresti">Decomandat</option>
      <option value="Brasov">Semidecomandat</option>
      <option value="Timisoara">Nedecomandat</option>
      <option value="Bucuresti">Circular</option>
      <option value="Brasov">Vagon</option>
  </select>
  </div>

<div class = "container" style="margin-top:10px;">
  Confort<br>
 <select style="width:150px;">
      <option value="">Alege</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="Lux">Lux</option>
  </select>
  </div>

  <div class = "container" style="margin-top:10px;">
  Etaj<br>
 <select style="width:150px">
      <option value="">Alege</option>
      <option value="Decomandat">Decomandat</option>
      <option value="Semidecomandat">Semidecomandat</option>
     <?php
     for ($i = 1; $i <= 40; $i++) {
    echo "<option value='$i'> Etaj ",$i,"</option>";
    }
     ?>
      <option value="Mansarda">Mansada</option>
      <option value="Ultimele 2 etaje">Ultimele 2 etaje</option>
  </select>
  </div>

<div class = "container" style="margin-top:10px;">
  Tip teren<br>
 <select style="width:150px;">
      <option value="Lux">Alege</option>
      <option value="">Constructii</option>
      <option value="1">Agricol</option>
      <option value="2">Padure</option>
      <option value="3">Livada</option>
      <option value="1">Pasune</option>
      <option value="2">Faneata</option>
      <option value="3">Helesteu</option>
  </select>
  </div>
<div class = "container" style="margin-top:10px;">
  Clasificare teren<br>
 <select style="width:150px;">
      <option value="">Alege</option>
      <option value="Intravilan">Intravilan</option>
      <option value="Extravilan">Extravilan</option>
  </select>
  </div>


<form>
<div class="container" style=" margin-left:240px; margin-top:20px;">
  <div class="form-group col-sm-2  ">
    <label for="formGroupExampleInput"></label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Pret">
  </div> 
</div>
</form>

<form>
<div class="container" style=" margin-left:240px;">
  <div class="form-group col-md-2  ">
    <label for="formGroupExampleInput"></label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Suprafata teren">
  </div> 
</div>
</form>

<form>
<div class="container" style=" margin-left:240px;">
  <div class="form-group col-md-2  ">
    <label for="formGroupExampleInput"></label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Suprafata utila">
  </div> 
</div>
</form>
<form>
<div class="container" style=" margin-left:240px;">
  <div class="form-group col-md-2  ">
    <label for="formGroupExampleInput"></label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Front stradal">
  </div> 
</div>
</form>

<form>
<div class="container" style="margin-left:240px;">
  <div class="form-group col-md-6  ">
    <label for="formGroupExampleInput"></label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Adresa">
    <select>
      <option value="Bucuresti">Bucuresti</option>
      <option value="Brasov">Brasov</option>
      <option value="Timisoara">Timisoara</option>
  </select>
     <select>
      <option value="Unirii">Unirii</option>
      <option value="Berceni">Berceni</option>
      <option value="Ferentari">Ferentari</option>
  </select>
  </div> 
</div>
</form>

<form>
<div class="container" style="margin-left:250px;">
    <label for="formGroupExampleInput"></label>
    <textarea name="Text1" cols="75" rows="5" placeholder="Descriere"></textarea>

</div>
</form>

<div class = "container" style="margin-top:10px">
<h3>Persoana de contact</h3>
</div>

<div class="date-contact">
  <form>
    <div class="container" style="margin-top:20px; margin-left:240px;">
      <div class="form-group col-md-2  ">
        <label for="formGroupExampleInput">Nume</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nume">
      </div> 
      </div>
  </form>
  <form>
    <div class="container" style="margin-top:20px; margin-left:240px;">
      <div class="form-group col-md-2  ">
        <label for="formGroupExampleInput">Email</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="mail@domeniu">
      </div> 
    </div>
  </form>
  <form>
    <div class="container" style="margin-top:20px; margin-left:240px;">
      <div class="form-group col-md-2  ">
        <label for="formGroupExampleInput">Telefon</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Telefon">
      </div> 
    </div>
    </form>
  <form>
    <div class="container" style="margin-top:20px; margin-left:240px;">
      <div class="form-group col-md-2  ">
        <label for="formGroupExampleInput">Nume Firma</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nume firma">
      </div> 
    </div>
  </form>

</div>

<div class="container">
  <input type="submit" class="btn btn-info btn-lg"  value="Continua">
</div>
<br><br><br><br><br>



  







</body>
</html>