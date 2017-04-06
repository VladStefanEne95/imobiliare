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
    <input type="radio" name="options" id="optapt"  > Apartament
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="optcasa" > Casa
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="optteren" > Teren
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="optcomercial" > Comercial
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
    <label ></label>
    <input type="text" class="form-control" id="titlu" placeholder="Titlu anunt">
  </div> 
</div>
</form>

<div class="container">
<form action="upload.php" method="get" enctype="multipart/form-data">
    Adauga poze:
    <input type="file" name="fileToUpload" id="fileToUpload">
</form>
</div>

<form method="post" action="/anunt-adaugat">
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
      <select   style="width:20%" name="id_localitate" id="localitate-js" onchange="jsFunction()"  data-size="6" class="form-control" ><optgroup label="Lista orase"><option value="13822" selected="selected">Bucuresti</option><option value="8112">Bragadiru</option><option value="8116">Buftea</option><option value="8123">Chitila</option><option value="8158">Magurele</option><option value="8172">Otopeni</option><option value="8173">Pantelimon</option><option value="8180">Popesti-Leordeni</option><option value="8206">Voluntari</option></optgroup><optgroup label="Comune / sate"><option value="8104">1 Decembrie</option><option value="8105">Afumati</option><option value="8106">Alunisu</option><option value="8107">Balaceanca</option><option value="8108">Balotesti</option><option value="8109">Balta Neagra</option><option value="8110">Balteni</option><option value="8111">Berceni</option><option value="8113">Branesti</option><option value="8114">Buciumeni</option><option value="8115">Buda</option><option value="8117">Burias</option><option value="8118">Caciulati</option><option value="8119">Caldararu</option><option value="8120">Catelu</option><option value="8121">Cernica</option><option value="8122">Chiajna</option><option value="8124">Ciofliceni</option><option value="8125">Ciolpani</option><option value="8126">Ciorogarla</option><option value="8127">Clinceni</option><option value="8128">Copaceni</option><option value="8129">Corbeanca</option><option value="8130">Cornetu</option><option value="8131">Cozieni</option><option value="8132">Creata</option><option value="8133">Cretesti</option><option value="8134">Cretuleasca</option><option value="8135">Darasti-Ilfov</option><option value="8136">Darvari</option><option value="8137">Dascalu</option><option value="8138">Dimieni</option><option value="8139">Dobroesti</option><option value="8140">Domnesti</option><option value="8141">Dragomiresti-Deal</option><option value="8142">Dragomiresti-Vale</option><option value="8143">Dudu</option><option value="8144">Dumbraveni</option><option value="8145">Dumitrana</option><option value="8146">Fundeni</option><option value="8147">Gagu</option><option value="8148">Ganeasa</option><option value="8149">Ghermanesti</option><option value="8150">Glina</option><option value="8151">Gradistea</option><option value="8152">Gruiu</option><option value="8153">Islaz</option><option value="8154">Izvorani</option><option value="8155">Jilava</option><option value="8156">Lipia</option><option value="8157">Luparia</option><option value="8159">Maineasca</option><option value="8160">Manolache</option><option value="8161">Merii Petchii</option><option value="8162">Micsunesti-Moara</option><option value="8163">Micsunestii Mari</option><option value="8164">Moara Domneasca</option><option value="8165">Moara Vlasiei</option><option value="8166">Mogosoaia</option><option value="8167">Nuci</option><option value="8168">Odaile</option><option value="8169">Olteni</option><option value="8170">Ordoreanu</option><option value="8171">Ostratu</option><option value="8174">Pasarea</option><option value="8175">Peris</option><option value="8176">Petrachioaia</option><option value="8177">Petresti</option><option value="8178">Piscu</option><option value="8179">Piteasca</option><option value="8181">Posta</option><option value="8182">Pruni</option><option value="8183">Rosu</option><option value="8184">Rudeni</option><option value="8185">Runcu</option><option value="8186">Saftica</option><option value="8187">Santu-Floresti</option><option value="8188">Silistea Snagovului</option><option value="8189">Sindrilita</option><option value="8190">Sintesti</option><option value="8191">Sitaru</option><option value="8192">Snagov</option><option value="8193">Stefanestii de Jos</option><option value="8194">Stefanestii de Sus</option><option value="8195">Surlari</option><option value="8196">Tamasi</option><option value="8197">Tancabesti</option><option value="8198">Tanganu</option><option value="8199">Teghes</option><option value="8200">Tunari</option><option value="8201">Vadu Anei</option><option value="8202">Vanatori</option><option value="8203">Varteju</option><option value="8204">Vidra</option><option value="8205">Vladiceasca</option><option value="8207">Zurbaua</option></optgroup></select>
      <select class="form-control invizibil"  style="width:35%" name="id_zona" id="zona-js" autocomplete="off" data-size="5" data-dropup-auto="false" ><option value="776">1 Decembrie 1918</option><option value="804">1 Mai</option><option value="844">13 Septembrie</option><option value="1066">16 Februarie</option><option value="1155">23 August (Catelul)</option><option value="1153">Agronomie</option><option value="744">Alba Iulia</option><option value="1024">Alexandriei</option><option value="1078">Alexandru Obregia</option><option value="745">Amzei</option><option value="1467">Andronache</option><option value="1058">Antiaeriana</option><option value="746">Aparatorii Patriei</option><option value="1171">Apusului</option><option value="747">Arcul de Triumf</option><option value="748">Armeneasca</option><option value="750">Aviatiei</option><option value="749">Aviatorilor</option><option value="751">Baba Novac</option><option value="1081">Baicului</option><option value="752">Balta Alba</option><option value="754">Baneasa</option><option value="753">Banu Manta</option><option value="755">Barbu Vacarescu</option><option value="1064">Basarab</option><option value="756">Basarabia</option><option value="1102">Batistei</option><option value="1177">Bd. Gloriei</option><option value="1173">Bd. Laminorului</option><option value="757">Beller</option><option value="758">Berceni</option><option value="759">Brancoveanu</option><option value="1084">Brezoianu</option><option value="1149">Bucur Obor</option><option value="761">Bucurestii Noi</option><option value="762">Calea Calarasilor</option><option value="1095">Calea Plevnei</option><option value="763">Calea Victoriei</option><option value="1079">Camil Ressu</option><option value="765">Campia Libertatii</option><option value="1145">Candiano Popescu</option><option value="764">Cantemir</option><option value="1101">Capitale</option><option value="1176">Casin</option><option value="767">Centrul Civic</option><option value="768">Centrul Istoric</option><option value="1400">Centura Est</option><option value="1398">Centura Nord</option><option value="1399">Centura Sud</option><option value="1401">Centura Vest</option><option value="770">Chibrit</option><option value="1016">Chirigii</option><option value="1158">Chisinau</option><option value="1019">Chitila</option><option value="769">Cismigiu</option><option value="1065">Clabucet</option><option value="1166">Clucerului</option><option value="771">Colentina</option><option value="1179">Compozitorilor</option><option value="1184">Constructorilor</option><option value="1028">Cosbuc</option><option value="1080">Costin Georgian</option><option value="772">Cotroceni</option><option value="766">Crangasi</option><option value="1150">Crevedia</option><option value="1164">Cutitul de Argint</option><option value="773">Dacia</option><option value="774">Damaroaia</option><option value="775">Decebal</option><option value="1396">DN 1</option><option value="1397">DN 2</option><option value="1082">Doamna Ghica</option><option value="777">Domenii</option><option value="778">Dorobanti</option><option value="779">Dristor</option><option value="1104">Drumul Gazarului</option><option value="1059">Drumul Sarii</option><option value="780">Drumul Taberei</option><option value="781">Dudesti</option><option value="1021">Eminescu</option><option value="1103">Eroii Revolutiei</option><option value="782">Ferdinand</option><option value="783">Ferentari</option><option value="1165">Fizicienilor</option><option value="784">Floreasca</option><option value="785">Foisorul de Foc</option><option value="786">Fundeni</option><option value="1172">Gara de Est</option><option value="787">Gara de Nord</option><option value="788">Ghencea</option><option value="789">Giulesti</option><option value="1469">Giulesti Sarbi</option><option value="790">Giurgiului</option><option value="1034">Gorjului</option><option value="791">Gradina Icoanei</option><option value="792">Grivita</option><option value="1085">Grozavesti</option><option value="793">Herastrau</option><option value="1183">I.C. Bratianu</option><option value="1152">Iancu Nicolae</option><option value="794">Iancului</option><option value="1063">Industriilor</option><option value="1468">Ion Creanga</option><option value="1029">Jiului</option><option value="795">Kiseleff</option><option value="796">Kogalniceanu</option><option value="1031">Lacul Morii</option><option value="797">Lacul Tei</option><option value="798">Lahovari</option><option value="799">Libertatii</option><option value="800">Lipscani</option><option value="801">Liviu Rebreanu</option><option value="802">Lizeanu</option><option value="803">Lucretiu Patrascanu</option><option value="1027">Lujerului</option><option value="1098">Macaralei</option><option value="805">Magheru</option><option value="1017">Magurele</option><option value="806">Marasesti</option><option value="1161">Margeanului</option><option value="1162">Matei Voievod</option><option value="807">Metalurgiei</option><option value="808">Mihai Bravu</option><option value="809">Militari</option><option value="1157">Mitropolie</option><option value="1033">Moinesti</option><option value="1168">Morarilor</option><option value="810">Mosilor</option><option value="811">Muncii</option><option value="812">Natiunile Unite</option><option value="813">Nerva Traian</option><option value="1156">Nicolae Grigorescu</option><option value="814">Nordului</option><option value="815">Obor</option><option value="1160">Octavian Goga</option><option value="816">Oltenitei</option><option value="1093">Ozana</option><option value="822">P-ta Alba Iulia</option><option value="823">P-ta Amzei</option><option value="1070">P-ta Arsenalului</option><option value="1077">P-ta de Gros</option><option value="1099">P-ta Dorobanti</option><option value="824">P-ta Galati</option><option value="1061">P-ta Gorjului</option><option value="1083">P-ta Jose Rizal</option><option value="1060">P-ta Leul</option><option value="825">P-ta Muncii</option><option value="1069">P-ta Operei</option><option value="826">P-ta Presei Libere</option><option value="1074">P-ta Resita</option><option value="827">P-ta Romana</option><option value="828">P-ta Rosetti</option><option value="1072">P-ta Sfanta Vineri</option><option value="1071">P-ta Sfantul Gheorghe</option><option value="829">P-ta Sfantul Stefan</option><option value="1067">P-ta Sfintii Voievozi</option><option value="830">P-ta Unirii</option><option value="831">P-ta Universitatii</option><option value="832">P-ta Victoriei</option><option value="817">Pache Protopopescu</option><option value="1062">Pacii</option><option value="818">Pajura</option><option value="819">Panduri</option><option value="820">Pantelimon</option><option value="821">Parcul Carol</option><option value="1163">Parcul Circului</option><option value="1097">Petricani</option><option value="1148">Pieptanari</option><option value="833">Pipera</option><option value="1154">Plevnei</option><option value="1022">Politehnica</option><option value="834">Polona</option><option value="1096">Prelungirea Ferentari</option><option value="835">Prelungirea Ghencea</option><option value="836">Primaverii</option><option value="1076">Progresul</option><option value="837">Rahova</option><option value="838">Regie</option><option value="1146">Regina Elisabeta</option><option value="839">Romana</option><option value="840">Rosetti</option><option value="841">Sala Palatului</option><option value="1025">Salaj</option><option value="842">Salajan</option><option value="843">Sebastian</option><option value="845">Serban Voda</option><option value="1023">Sisesti</option><option value="1182">Socului</option><option value="846">Soseaua Nordului</option><option value="1147">Splaiul Independentei</option><option value="847">Splaiul Unirii</option><option value="848">Stefan cel Mare</option><option value="849">Stirbei Voda</option><option value="1018">Straulesti</option><option value="1075">Sura Mare</option><option value="1151">Take Ionescu</option><option value="850">Tei</option><option value="1159">Teiul Doamnei</option><option value="1100">Televiziune</option><option value="1026">Theodor Pallady</option><option value="1030">Timisoara</option><option value="851">Timpuri Noi</option><option value="852">Tineretului</option><option value="853">Titan</option><option value="854">Titulescu</option><option value="1170">Trafic Greu</option><option value="1055">Tudor Vladimirescu</option><option value="855">Turda</option><option value="856">Unirii</option><option value="857">Universitate</option><option value="1032">Uverturii</option><option value="859">Vacaresti</option><option value="1057">Valea Ialomitei</option><option value="1056">Valea Oltului</option><option value="1068">Vasile Parvan</option><option value="858">Vatra Luminoasa</option><option value="1035">Veteranilor</option><option value="860">Victoriei</option><option value="1020">Viilor</option><option value="1167">Virtutii</option><option value="861">Vitan</option><option value="862">Vitan Mall</option><option value="1180">Vitan-Barzesti</option><option value="1174">Vitanul Nou</option><option value="1073">Zetarilor</option><option value="9">Central</option><option value="3">Est</option><option value="14">Exterior Est</option><option value="12">Exterior Nord</option><option value="13">Exterior Sud</option><option value="15">Exterior Vest</option><option value="1">Nord</option><option value="6">Nord-Est</option><option value="8">Nord-Vest</option><option value="11">Periferie</option><option value="2">Sud</option><option value="5">Sud-Est</option><option value="7">Sud-Vest</option><option value="10">Ultracentral</option><option value="4">Vest</option></select>
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
var tip = 0;
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
$( document ).ready(function() {
  $('#cam2').click(function() {
   
    window.alert("Introduceti numarul de telefon");
  });
});

function jsFunction(){
  var myselect = document.getElementById("localitate-js");
  if(myselect.options[myselect.selectedIndex].value == 13822)
     $('.invizibil').removeClass("stealth");
   else
     $('.invizibil').addClass("stealth");
 
 // alert(myselect.options[myselect.selectedIndex].value);
}

// $('form').submit(function() {
//   if (! $('#telefon').val()){
//     window.alert("Introduceti numarul de telefon");
//     event.preventDefault();
//   }


//   if (! $('#email').val()){
//     window.alert("Introduceti emailul");
//     event.preventDefault();
//   }
//   else{
//     var email = $('#email').val();
//     if( !email.includes("@") || !email.includes(".") || email.lenght < 4){
//       window.alert("Introduceti o adresa de email valida");
//       event.preventDefault();
//     }
//   }


//   if (! $('#nume').val()){
//     window.alert("Introduceti numele");
//     event.preventDefault();
//   }

//   if (! $('#descriere').val()){
//     window.alert("Introduceti o descriere");
//     event.preventDefault();
//   }



//   if (! $('#adresa').val()){
//     window.alert("Introduceti adresa");
//     event.preventDefault();
//   }

//    if (! $('#suprafataUtila').val()){
//     window.alert("Introduceti suprafata");
//     event.preventDefault();
//   }

//   if (! $('#pret').val()){
//     window.alert("Introduceti pretul");
//     event.preventDefault();
//   }

//   if(tip == 0){
//     window.alert("Selectati un tip");
//     event.preventDefault();
//   }
//   if(tip == 1 ){
//     if (! $('#nrBai').val()){
//       window.alert("Introduceti numarul de bai");
//       event.preventDefault();
//     }
//     if (isNaN ($('#nrBai').val())){
//        window.alert("Introduceti numarul de bai");
//        event.preventDefault();
//     } 
//     if ($('#compartimentare').val() == "Alege"){
//       window.alert("Alegeti o compartimentare");
//       event.preventDefault();
//     }
//     if ($('#confort').val() == "Alege"){
//       window.alert("Alegeti confortul");
//       event.preventDefault();
//     } 
//     if ($('#etaj').val() == "Alege"){
//       window.alert("Alegeti un etaj");
//       event.preventDefault();
//     }   
//   }
// });

</script>

</body>
</html>