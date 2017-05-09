<!DOCTYPE html>
<html lang="en">
<head>
    <title>anunt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/b791d93d6c.js"></script>
    <style>
    .thumbnail {
    width: 154px;
    height: 128px;
    }

    .image {
    width: 100%;
    height: 100%;
    }

/*
.dx{
    width:100%;
    height:100px;
    overflow:scroll;
    overflow-y: hidden;
    white-space: nowrap;
}
*/
 
    .dx {
        width:100%;
        height:100px;
        white-space: nowrap;
    }


    .top_img{
        width:500px;
        height:500px;
    }

     .small_img{
        width:100px;
        height:100px;
        margin-left: 1px;
    }

    .stealth {
        display: none !important;
    }

   
    .display-right {
        position: absolute;
        top: 50%;
        left:41%;
    }
    .display-left {
        position: absolute;
        top: 50%;
        left: -33.5%;
    }
    .black, .hover-black:hover {
        color: #fff!important;
        background-color: #000!important;
}
    .content {
        max-width:980px;margin:auto
    }
    .display-container {
        position: relative;
    }

    .slide {
        margin-left:100px;
         margin-top:60px;"
         background-color: black;
    }
    .date-principale {
        margin-left: 30px;
        background-color: #ffffcc;  
        text-align: center;
        border-style: solid;
        border-color: gray;
        box-shadow: 0 19px 19px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
    }
    .date-auxiliare {
        margin-top: 25px;
        margin-left: 30px;
        background-color: #b3b3cc;  
        text-align: left;
        

    }
    .detalii-secundare {
        width: 500px;
        margin-top: 30px;
        margin-left: 0px; 
        text-align: left;
    }
    .send-message {
        margin-top: 10px;
        margin-left: 30px;
    }
    
    .buton {
         margin-top: 10px;
        margin-left: 45%;
    }
    hr { 
        display: block;
        margin-top: 0.5em;
        margin-bottom: 0.5em;
        margin-left: auto;
        margin-right: auto;
        border-style: inset;
        border-width: 1px;
} 
    #img99 {
        box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

    </style>

</head>
<body >
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
<div class="all" id="all">
<div class="container" style="padding-left: 2cm;padding-top: 1cm">
    <table>
        <tr>
            <td>
                    <?php  $first = current(explode("|", $anunt->imagini)); 
                            $link = URL::to('/');
                       echo  "<a href='#test'> <img id='img99' src='$link$first'
                             alt='Apartament' class='top_img'></a><br>"?><br>
            </td>
            <td >
                <div class="date-principale">
                Anunț publicat de <?php echo $anunt->nume ?><br>
                Oraș: <?php echo $anunt->oras ?><br>
                Zonă: <?php echo $anunt->zona ?><br>
                <h3 style="color:#507fbe ">Telefon: <?php echo $anunt->telefon ?></h3>
                </div>
                <div class="date-auxiliare">Cere detalii suplimentare proprietarului.<br> Te anunţam când răspunde şi poţi continua<br> discuţia din contul tău!
                </div>
                <div class="send-message">
                     <textarea class="form-control" name="descriere" cols="10" rows="5" id="descriere" placeholder="Mă interesează proprietatea mobiliare.ro. Rog detalii..." style="width:100%;"></textarea>
                </div>
                <div class="buton">
                    <button type="button" class="btn btn-warning">Trimite</button>
                </div>
            </td>
        </tr>
    </table>

<div style="width:500px; ">
    <div  class="dx">
    <?php
    $i = 0;
    $ii = 0;
    $imagini = array();
    while($anunt->imagini != "")
    {
        $first = current(explode("|", $anunt->imagini));

        if ($ii < 8 && $ii % 2 == 0)
            echo  "<img id = 'img$i' src='$link$first'
                             alt='Apartament' class='small_img'>";

        else if ($ii == 8) {
           echo  "<img id = 'img$i' src='$link/add_text.jpg'
                             alt='Apartament' class='small_img'>";
           
        }

    $imagini[$i] = "$link$first";
    $first = $first."|";
   

    $anunt->imagini = str_replace($first, "", $anunt->imagini);

    $i++;
    $ii++;
    }
    ?><br>
    
</div>

</div>
    <div class="detalii-secundare container">
    <p>Detalii</p>
    <hr>
    <p><?php echo $anunt->descriere ?><p>
    <p><h3>Caracteristici</h3></p>
    <hr>
    <table>
        <tr valign="top">
            <td style="padding-right: 1cm">
                <div>Titlu: </div>
            </td>
            <td>
                <?php echo $anunt->titlu; ?>
            </td>

             <td style="padding-right: 1cm;padding-left:1cm;">
                <div>Număr băi: </div>
            </td>
            <td>
                <?php echo $anunt->nr_bai; ?>
            </td>
        </tr valign="top">
        <tr>
            <td style="padding-right: 1cm">
                <div>Preț: </div>
            </td>
            <td>
                <?php echo $anunt->pret; ?>
            </td>
             <td style="padding-right: 1cm; padding-left:1cm">
                <div>Compartimentare: </div>
            </td>
            <td>
                <?php echo $anunt->compartimentare; ?>
            </td>
        </tr>
        <tr valign="top">
            <td style="padding-right: 1cm">
                <div>Număr camere: </div>
            </td>
            <td>
                <?php echo $anunt->nr_camere; ?>
            </td>
            <td style="padding-right: 1cm; padding-left:1cm">
                <div>Confort: </div>
            </td>
            <td>
                <?php echo $anunt->confort; ?>
            </td>

        </tr>
        <tr valign="top">
            <td style="padding-right: 1cm">
                <div>Suprafata utila: </div>
            </td>
            <td>
                <?php echo $anunt->suprafata_utila; ?>
            </td>
            <td style="padding-right: 1cm; padding-left:1cm">
                <div>Tip Bloc: </div>
            </td>
            <td>
                <?php echo $anunt->tip_bloc; ?>
            </td>

        </tr>
          <tr valign="top">
            <td style="padding-right: 1cm">
                <div>Numar bai: </div>
            </td>
            <td>
                <?php echo $anunt->nr_bai; ?>
            </td>
        </tr>
        <tr valign="top">
            <td style="padding-right: 1cm">
                <div>Numar bucatarii: </div>
            </td>
            <td>
                <?php echo $anunt->nr_bucatarii; ?>
            </td>
        </tr>
        <tr valign="top">
            <td style="padding-right: 1cm">
                <div>Numar balcoane: </div>
            </td>
            <td>
                <?php echo $anunt->nr_balcoane; ?>
            </td>
        </tr>
        
    </table>
    </div>
</div>
  </div>   
<br><br><br>
<div class="content display-container container" id="test">
<div class="slide">

     <?php 
   
   for($index = 0; $index < $i; $index++)
        if($index % 2 == 1)
    echo "<img style='height:90%;width:90%;' id = '$index' class='mySlides' src='$imagini[$index]'
                             alt='Apartament'>";
    ?>

  <button class="w3-button black display-left buton" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button black display-right buton" onclick="plusDivs(1)">&#10095;</button>
</div>
</div>
<script>
var slideIndex = 1;
var imagini = <?php echo json_encode($imagini); ?>;
<?php
    for($j = 0;$j < $i && $j != 8; $j++)
    echo "

var last = 0;
var contor = 0;
$('#img$j').click(function() {
    var images = $('#img$j').attr('src');
    $('#img99').attr('src',images);
    $('#0').attr('src',images);
    contor = 0;
    for (i = 0; i < $i;i++) {
        var aux = $j + i;
        if (aux < $i) {
            $('#' + i).attr('src', imagini[aux]);
        }
        else {
             $('#' + i).attr('src', imagini[contor]);
             contor++;
        }
    }

    
});";
?>

$(document).ready(function () {

var counter = 0;
var counter2 = 0;

$("body").keydown(function(e) {
  if(e.keyCode == 37) { // left
     $(document).trigger(plusDivs(-1));
  }
  else if(e.keyCode == 39) { // right
    $(document).trigger(plusDivs(1));
  }
});

  
  $('#img99').click(function() {
   // alert($('#1').height());
    $('#test').removeClass("stealth");
    $('body').css("background-color","#c2c2d6");
    $('#all').addClass("stealth");
    var images = $('#img99').attr('src');
    $('#0').attr('src',images);
    counter = 1;
    slideIndex = 1;
    counter2 = 1;
    showDivs(1);
  });

  $('#img8').click(function() {
    $('#test').removeClass("stealth");
    $('body').css("background-color","#c2c2d6");
    $('#all').addClass("stealth");
    var images = $('#img99').attr('src');
    $('#0').attr('src',images);
    counter = 1;
    slideIndex = 1;
    counter2 = 1;
    
  });
  
   $('.mySlides').click(function (e) { 
        e.stopPropagation();
    });
    $('.buton').click(function (e) { 
        e.stopPropagation();
    });   

    $(document).click(function (e) { 
        if (counter == 2) {
             $('#test').addClass("stealth");
             $('body').css("background-color","white");
             $('#all').removeClass("stealth");
             slideIndex = 1;
             counter2 = 0;
             counter = 0;
        }

        if (counter == 1)
            counter++;
    });
});



showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1;}

  if (n < 1) {slideIndex = x.length;}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";
}
</script>
</body>
</html>