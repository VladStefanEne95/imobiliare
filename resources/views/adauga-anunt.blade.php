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

  .demo-droppable {
    background: #08c;
    color: #fff;
    padding: 100px 0;
    text-align: center;
  }
  .demo-droppable.dragover {
    background: #00CC71;
  }
    
      
   .dropzone {
      height: 160px;
      width: 550px;
    }

</style>
 <title>Adauga anunt</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
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
                <li><a href="http://127.0.0.1:8000/price/filter">Cauta</a></li>
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
<h1 class="titlu_anunt">Adauga anuntul tau<br><h3 class="subtitlu_anunt">urmeaza pasii, e mai simplu ca niciodata</h3></h1>
</div>
<div class ="container" style="margin-top:60px">
<div class="btn-secondary" >
  <label class="btn btn-default">
    <input  form="saveForm" type="radio" name="options" id="optapt" value="apartament" > Apartament
  </label>
  <label class="btn btn-default">
    <input  form="saveForm" type="radio" name="options" id="optcasa" value="casa"> Casa
  </label>
  <label class="btn btn-default">
    <input  form="saveForm" type="radio" name="options" id="optteren" value="teren"> Teren
  </label>
  <label class="btn btn-default">
    <input  form="saveForm" type="radio" name="options" id="optcomercial" > Comercial
  </label>
</div>
</div>

<div class ="container" style="margin-top:50px">
<div class="btn-secondary" data-toggle="buttons">
  <label class="btn btn-default">
    <input form="saveForm" type="radio" name="tip_contract" id="option1" value="de-vanzare" checked> De vanzare
  </label>
  <label class="btn btn-default">
    <input form="saveForm" type="radio" name="tip_contract" id="option2" value="de-inchiriat"> De inchiriat
  </label>
  </div>
  </div>



<div class="container" style="margin-top:20px; margin-left:240px;">
  <div class="form-group col-md-6  ">
    <input form ="saveForm" type="text" class="form-control" name="titlu" id="titlu" placeholder="Titlu anunt">
  </div> 
</div>









<div class="container">
 <h3>Adauga imagini</h3>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="/upload" class="dropzone" enctype="multipart/form-data" id="image-upload" method="post">
        <div>    
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  images = "";
   Dropzone.options.imageUpload = {
         success: function( file, response ){
         obj = JSON.parse(response);
         images = images.concat(obj.filename);
         images = images.concat("|");
         document.getElementById('myField').value = images;
    },
         maxFilesize:8,
          dictDefaultMessage: "Adauga imagini",
         acceptedFiles: ".jpeg,.jpg,.png,.gif"
     };
</script>





<form id="saveForm" method="post" action="/anunt-adaugat">
<input type="hidden" name="imagini" id="myField" value="" />
<div class ="container apartament casa stealth" style="margin-top:20px;">
Numar camere
<div class="btn-secondary">
  <label class="btn btn-default">
    <input type="radio" name="cam" id="cam1" value="1">1
  </label>
  <label class="btn btn-default">
    <input type="radio" name="cam" id="cam2" value="2">2
  </label>
  <label class="btn btn-default">
    <input type="radio" name="cam" id="cam3" value="3">3
  </label>
  <label class="btn btn-default">
    <input type="radio" name="cam" id="cam4" value="4">4
  </label>
  <label class="btn btn-default">
    <input type="radio" name="cam" id="cam5" value="5">5+
  </label>
</div>
<script>

</script>


</div>





<div class="container apartament casa stealth" style=" margin-left:240px; margin-top:20px;">
  <div class="form-group col-sm-2  ">
    <label ></label>
    <input type="text" name="nrBai" class="form-control" id="nrBai" placeholder="Nr Bai">
  </div> 
</div>


<div class = "container apartament stealth">
  Compartimentare<br>
 <select style="width:150px" name="compartimentare" id="compartimentare">
      <option >Alege</option>
      <option >Decomandat</option>
      <option >Semidecomandat</option>
      <option >Nedecomandat</option>
      <option >Circular</option>
      <option >Vagon</option>
  </select>
  </div>

<div class = "container apartament stealth" style="margin-top:10px;">
  Confort<br>
 <select style="width:150px;" name="confort" id="confort">
      <option >Alege</option>
      <option >1</option>
      <option >2</option>
      <option >3</option>
      <option >Lux</option>
  </select>
  </div>

  <div class = "container apartament stealth" style="margin-top:10px;">
  Etaj<br>
 <select style="width:150px" name="etaj" id="etaj">
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

<div class = "container teren stealth" style="margin-top:10px;">
  Tip teren<br>
 <select style="width:150px;" name="tipTeren" id="tipTeren">
      <option value="Alege">Alege</option>
      <option value="0">Constructii</option>
      <option value="1">Agricol</option>
      <option value="2">Padure</option>
      <option value="3">Livada</option>
      <option value="1">Pasune</option>
      <option value="2">Faneata</option>
      <option value="3">Helesteu</option>
  </select>
  </div>
<div class = "container teren stealth" style="margin-top:10px;">
  Clasificare teren<br>
 <select style="width:150px;" name="clasificareTeren" id="clasificareTeren">
      <option value="">Alege</option>
      <option value="Intravilan">Intravilan</option>
      <option value="Extravilan">Extravilan</option>
  </select>
  </div>



<div class="container" style=" margin-left:240px; margin-top:20px;">
  <div class="form-group col-sm-2  ">
    <label ></label>
    <input type="text" class="form-control" name="pret" id="pret" placeholder="Pret">
  </div> 
</div>

<div class="container casa stealth" style=" margin-left:240px;">
  <div class="form-group col-md-2  ">
    <label></label>
    <input type="text" class="form-control" name="suprafataTeren" id="suprafataTeren" placeholder="Suprafata teren">
  </div> 
</div>

<div class="container" style=" margin-left:240px;">
  <div class="form-group col-md-2  ">
    <label></label>
    <input  type="text" class="form-control" name="suprafataUtila" id="suprafataUtila" placeholder="Suprafata utila">
  </div> 
</div>

<div class="container teren stealth" style=" margin-left:240px;">
  <div class="form-group col-md-2  ">
    <label ></label>
    <input type="text" name="frontStradal"class="form-control" id="frontStradal" placeholder="Front stradal">
  </div> 
</div>

<div class="container" style="margin-left:240px;">
  <div class="form-group col-md-6  ">
    <label ></label>
    <input type="text" name="adresa"class="form-control" id="adresa" placeholder="Adresa">
    <div style="display:inline !important;">
      <select   style="width:20%" name="oras" id="localitate-js" onchange="jsFunction()"  data-size="6" class="form-control" ><optgroup label="Lista orase"><option selected=selected>Bucuresti</option><option >Bragadiru</option><option>Buftea</option><option >Chitila</option><option >Magurele</option><option >Otopeni</option><option >Pantelimon</option><option >Popesti-Leordeni</option><option >Voluntari</option></optgroup><optgroup label=Comune / sate><option> Decembrie</option><option>Afumati</option><option>Alunisu</option><option>Balaceanca</option><option>Balotesti</option><option >Balta Neagra</option><option >Balteni</option><option >Berceni</option><option >Branesti</option><option >Buciumeni</option><option >Buda</option><option >Burias</option><option >Caciulati</option><option >Caldararu</option><option >Catelu</option><option >Cernica</option><option >Chiajna</option><option >Ciofliceni</option><option >Ciolpani</option><option >Ciorogarla</option><option >Clinceni</option><option >Copaceni</option><option >Corbeanca</option><option >Cornetu</option><option >Cozieni</option><option >Creata</option><option >Cretesti</option><option >Cretuleasca</option><option >Darasti-Ilfov</option><option >Darvari</option><option >Dascalu</option><option >Dimieni</option><option >Dobroesti</option><option >Domnesti</option><option >Dragomiresti-Deal</option><option >Dragomiresti-Vale</option><option >Dudu</option><option >Dumbraveni</option><option >Dumitrana</option><option >Fundeni</option><option >Gagu</option><option >Ganeasa</option><option >Ghermanesti</option><option >Glina</option><option >Gradistea</option><option >Gruiu</option><option >Islaz</option><option >Izvorani</option><option >Jilava</option><option >Lipia</option><option >Luparia</option><option >Maineasca</option><option >Manolache</option><option >Merii Petchii</option><option >Micsunesti-Moara</option><option >Micsunestii Mari</option><option >Moara Domneasca</option><option >Moara Vlasiei</option><option >Mogosoaia</option><option >Nuci</option><option >Odaile</option><option >Olteni</option><option >Ordoreanu</option><option >Ostratu</option><option >Pasarea</option><option >Peris</option><option >Petrachioaia</option><option >Petresti</option><option >Piscu</option><option >Piteasca</option><option >Posta</option><option >Pruni</option><option >Rosu</option><option >Rudeni</option><option >Runcu</option><option >Saftica</option><option >Santu-Floresti</option><option >Silistea Snagovului</option><option >Sindrilita</option><option >Sintesti</option><option >Sitaru</option><option >Snagov</option><option >Stefanestii de Jos</option><option >Stefanestii de Sus</option><option >Surlari</option><option >Tamasi</option><option >Tancabesti</option><option >Tanganu</option><option >Teghes</option><option >Tunari</option><option >Vadu Anei</option><option >Vanatori</option><option >Varteju</option><option >Vidra</option><option >Vladiceasca</option><option >Zurbaua</option></optgroup></select>

      <select class="form-control invizibil"  style="width:35%" name="zona" id="zona-js" autocomplete="off" data-size="5" data-dropup-auto="false" ><option >1 Decembrie 1918</option><option >1 Mai</option><option >13 Septembrie</option><option >16 Februarie</option><option >23 August (Catelul)</option><option >Agronomie</option><option >Alba Iulia</option><option Alexandriei>Alexandriei</option><option Alexandru Obregia>Alexandru Obregia</option><option >Amzei</option><option >Andronache</option><option >Antiaeriana</option><option >Aparatorii Patriei</option><option >Apusului</option><option >Arcul de Triumf</option><option >Armeneasca</option><option >Aviatiei</option><option >Aviatorilor</option><option >Baba Novac</option><option >Baicului</option><option >Balta Alba</option><option >Baneasa</option><option >Banu Manta</option><option >Barbu Vacarescu</option><option >Basarab</option><option >Basarabia</option><option >Batistei</option><option >Bd. Gloriei</option><option >Bd. Laminorului</option><option >Beller</option><option >Berceni</option><option >Brancoveanu</option><option >Brezoianu</option><option >Bucur Obor</option><option >Bucurestii Noi</option><option >Calea Calarasilor</option><option >Calea Plevnei</option><option >Calea Victoriei</option><option >Camil Ressu</option><option >Campia Libertatii</option><option >Candiano Popescu</option><option >Cantemir</option><option >Capitale</option><option >Casin</option><option >Centrul Civic</option><option >Centrul Istoric</option><option >Centura Est</option><option >Centura Nord</option><option >Centura Sud</option><option >Centura Vest</option><option >Chibrit</option><option >Chirigii</option><option >Chisinau</option><option >Chitila</option><option >Cismigiu</option><option >Clabucet</option><option >Clucerului</option><option >Colentina</option><option >Compozitorilor</option><option >Constructorilor</option><option >Cosbuc</option><option >Costin Georgian</option><option >Cotroceni</option><option >Crangasi</option><option >Crevedia</option><option >Cutitul de Argint</option><option >Dacia</option><option >Damaroaia</option><option >Decebal</option><option >DN </option><option >DN </option><option >Doamna Ghica</option><option >Domenii</option><option >Dorobanti</option><option >Dristor</option><option >Drumul Gazarului</option><option >Drumul Sarii</option><option >Drumul Taberei</option><option >Dudesti</option><option >Eminescu</option><option >Eroii Revolutiei</option><option >Ferdinand</option><option >Ferentari</option><option >Fizicienilor</option><option >Floreasca</option><option >Foisorul de Foc</option><option >Fundeni</option><option >Gara de Est</option><option >Gara de Nord</option><option >Ghencea</option><option >Giulesti</option><option >Giulesti Sarbi</option><option >Giurgiului</option><option >Gorjului</option><option >Gradina Icoanei</option><option >Grivita</option><option >Grozavesti</option><option >Herastrau</option><option >I.C. Bratianu</option><option >Iancu Nicolae</option><option >Iancului</option><option >Industriilor</option><option >Ion Creanga</option><option >Jiului</option><option >Kiseleff</option><option >Kogalniceanu</option><option >Lacul Morii</option><option >Lacul Tei</option><option >Lahovari</option><option >Libertatii</option><option >Lipscani</option><option >Liviu Rebreanu</option><option >Lizeanu</option><option >Lucretiu Patrascanu</option><option >Lujerului</option><option >Macaralei</option><option >Magheru</option><option >Magurele</option><option >Marasesti</option><option >Margeanului</option><option >Matei Voievod</option><option >Metalurgiei</option><option >Mihai Bravu</option><option >Militari</option><option >Mitropolie</option><option >Moinesti</option><option >Morarilor</option><option >Mosilor</option><option >Muncii</option><option >Natiunile Unite</option><option >Nerva Traian</option><option >Nicolae Grigorescu</option><option >Nordului</option><option >Obor</option><option >Octavian Goga</option><option >Oltenitei</option><option >Ozana</option><option >P-ta Alba Iulia</option><option >P-ta Amzei</option><option >P-ta Arsenalului</option><option >P-ta de Gros</option><option >P-ta Dorobanti</option><option >P-ta Galati</option><option >P-ta Gorjului</option><option >P-ta Jose Rizal</option><option >P-ta Leul</option><option >P-ta Muncii</option><option >P-ta Operei</option><option >P-ta Presei Libere</option><option >P-ta Resita</option><option >P-ta Romana</option><option >P-ta Rosetti</option><option >P-ta Sfanta Vineri</option><option >P-ta Sfantul Gheorghe</option><option >P-ta Sfantul Stefan</option><option >P-ta Sfintii Voievozi</option><option >P-ta Unirii</option><option >P-ta Universitatii</option><option >P-ta Victoriei</option><option >Pache Protopopescu</option><option >Pacii</option><option >Pajura</option><option >Panduri</option><option >Pantelimon</option><option >Parcul Carol</option><option >Parcul Circului</option><option >Petricani</option><option >Pieptanari</option><option >Pipera</option><option >Plevnei</option><option >Politehnica</option><option >Polona</option><option >Prelungirea Ferentari</option><option >Prelungirea Ghencea</option><option >Primaverii</option><option >Progresul</option><option >Rahova</option><option >Regie</option><option >Regina Elisabeta</option><option >Romana</option><option >Rosetti</option><option >Sala Palatului</option><option >Salaj</option><option >Salajan</option><option >Sebastian</option><option >Serban Voda</option><option >Sisesti</option><option >Socului</option><option >Soseaua Nordului</option><option >Splaiul Independentei</option><option >Splaiul Unirii</option><option >Stefan cel Mare</option><option >Stirbei Voda</option><option >Straulesti</option><option >Sura Mare</option><option >Take Ionescu</option><option >Tei</option><option >Teiul Doamnei</option><option >Televiziune</option><option >Theodor Pallady</option><option >Timisoara</option><option >Timpuri Noi</option><option >Tineretului</option><option >Titan</option><option >Titulescu</option><option >Trafic Greu</option><option >Tudor Vladimirescu</option><option >Turda</option><option >Unirii</option><option >Universitate</option><option >Uverturii</option><option >Vacaresti</option><option >Valea Ialomitei</option><option >Valea Oltului</option><option >Vasile Parvan</option><option >Vatra Luminoasa</option><option >Veteranilor</option><option >Victoriei</option><option >Viilor</option><option >Virtutii</option><option >Vitan</option><option >Vitan Mall</option><option >Vitan-Barzesti</option><option >Vitanul Nou</option><option >Zetarilor</option><option >Central</option><option >Est</option><option >Exterior Est</option><option >Exterior Nord</option><option >Exterior Sud</option><option >Exterior Vest</option><option >Nord</option><option >Nord-Est</option><option >Nord-Vest</option><option >Periferie</option><option >Sud</option><option >Sud-Est</option><option >Sud-Vest</option><option >Ultracentral</option><option >Vest</option></select>
</select>
    </div>
  </div> 
</div>

<div class="container" style="margin-left:250px;">
    <label ></label>
    <textarea name="descriere" cols="75" rows="5" id="descriere" placeholder="Descriere"></textarea>
</div>


<div class = "container" style="margin-top:10px">
<h3>Persoana de contact</h3>
</div>

<div class="date-contact">
    <div class="container" style="margin-top:20px; margin-left:240px;">
      <div class="form-group col-md-2  ">
        <label >Nume</label>
        <input type="text" class="form-control" name="nume" id="nume" placeholder="Nume">
      </div> 
      </div>
    <div class="container" style="margin-top:20px; margin-left:240px;">
      <div class="form-group col-md-2  ">
        <label >Email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="mail@domeniu">
      </div> 
    </div>
    <div class="container" style="margin-top:20px; margin-left:240px;">
      <div class="form-group col-md-2  ">
        <label >Telefon</label>
        <input type="text" class="form-control" name="telefon" id="telefon" placeholder="Telefon">
      </div> 
    </div>
    <div class="container" style="margin-top:20px; margin-left:240px;">
      <div class="form-group col-md-2  ">
        <label >Nume Firma</label>

        <input type="text" class="form-control" name="firma" id="firma" placeholder="Nume firma" requiered>
        <input type="submit" class="btn btn-info btn-lg"  value="Continua">
      </div> 
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>

</div>


<br><br><br><br><br>


<script>
$("#form").trigger('reset');
function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}
var tip = 0;
var nrCamere = 0;
$('#optapt').click(function() {
   if($('#optapt').is(':checked')) {
    $(".casa").addClass("stealth");
    $(".apartament").removeClass("stealth");
     $(".teren").addClass("stealth");
     tip = 1;
  }
});
$('#optcasa').click(function() {
   if($('#optcasa').is(':checked')) { 
    $(".apartament").addClass("stealth");
    $(".casa").removeClass("stealth");
    $(".teren").addClass("stealth");
    tip = 2;
    $('input[name="cam3"]').val("-1");
  }
});
$('#optteren').click(function() {
   if($('#optteren').is(':checked')) { 
    $(".teren").removeClass("stealth");
    $(".casa").addClass("stealth");
    $(".apartament").addClass("stealth");
    tip = 3;
  }
});

$('#cam1').click(function() {
   if($('#cam1').is(':checked')) { 
    nrCamere = 1;
  }
});
$('#cam2').click(function() {
   if($('#cam2').is(':checked')) { 
    nrCamere = 2;
  }
});
$('#cam3').click(function() {
   if($('#cam3').is(':checked')) { 
    nrCamere = 3;
  }
});
$('#cam4').click(function() {
   if($('#cam4').is(':checked')) { 
    nrCamere = 4;
  }
});
$('#cam5').click(function() {
   if($('#cam5').is(':checked')) { 
    nrCamere = 1;
  }
});


function jsFunction(){
  var myselect = document.getElementById("localitate-js");
  if(myselect.options[myselect.selectedIndex].value == 'Bucuresti')
     $('.invizibil').removeClass("stealth");
   else
     $('.invizibil').addClass("stealth");
}

$('form').submit(function() {
  if (! $('#telefon').val()) {
    window.alert("Introduceti numarul de telefon");
    event.preventDefault();
  }


  if (! $('#email').val()){
    window.alert("Introduceti emailul");
    event.preventDefault();
  }

  {
    var email = $('#email').val();
    if( !email.includes("@") || !email.includes(".") || email.lenght < 4){
      window.alert("Introduceti o adresa de email valida");
      event.preventDefault();
    }
  }

  {
    var telefon = $('#telefon').val();
    if( !isNumeric(telefon)){
      window.alert("Introduceti doar numere");
      event.preventDefault();
    }
    if( telefon.length != 10){
      window.alert("Introduceti un numar de telefon valid");
      event.preventDefault();
    }
  }

   {
    var pret = $('#pret').val();
    if( !isNumeric(pret)){
      window.alert("pretul trebuie sa fie format doar din numere");
      event.preventDefault();
    }
  }


  if (! $('#nume').val()) {
    window.alert("Introduceti numele");
    event.preventDefault();
  }

  if (! $('#descriere').val()) {
    window.alert("Introduceti o descriere");
    event.preventDefault();
  }

   if (! $('#titlu').val()) {
    window.alert("Introduceti un titlu");
    event.preventDefault();
  }

  if (! $('#adresa').val()) {
    window.alert("Introduceti adresa");
    event.preventDefault();
  }

  if (! $('#suprafataUtila').val()) {
    window.alert("Introduceti suprafata");
    event.preventDefault();
  }

   {
    var suprafata = $('#suprafataUtila').val();
    if( !isNumeric(suprafata)){
      window.alert("suprafata utila trebuie sa fie format doar din numere");
      event.preventDefault();
    }
  }

  if (! $('#pret').val()) {
    window.alert("Introduceti pretul");
    event.preventDefault();
  }

  if(tip == 0) {
    window.alert("Selectati un tip");
    event.preventDefault();
  }
  if(tip == 1 ) {
    
    if(nrCamere == 0){
      window.alert("Selectati numarul de camere");
      event.preventDefault();
    }

    if (! $('#nrBai').val()) {
      window.alert("Introduceti numarul de bai");
      event.preventDefault();
    }
    if (! isNumeric($('#nrBai').val())) {
      window.alert("numarul de bai trebuie sa fie numeric");
      event.preventDefault();
    }
    if ($('#compartimentare').val() == "Alege"){
      window.alert("Alegeti o compartimentare");
      event.preventDefault();
    }
    if ($('#confort').val() == "Alege"){
      window.alert("Alegeti confortul");
      event.preventDefault();
    } 
    if ($('#etaj').val() == "Alege"){
      window.alert("Alegeti un etaj");
      event.preventDefault();
    }   
  }
  if(tip == 2 ) {
    if (! $('#nrBai').val()) {
      window.alert("Introduceti numarul de bai");
      event.preventDefault();
    }
    if (! isNumeric($('#nrBai').val())) {
      window.alert("numarul de bai trebuie sa fie numeric");
      event.preventDefault();
    }
    if(nrCamere == 0){
      window.alert("Selectati numarul de camere");
      event.preventDefault();
    }
  }

});

</script>

</body>
</html>