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

    <style>
    .thumbnail {
    width: 154px;
    height: 128px;
    }

    .image {
    width: 100%;
    height: 100%;
    }

 
.dx{
    width:100%;
    height:100px;
    overflow:scroll;
    overflow-y: hidden;
    white-space: nowrap;
}


    .image img {
    -webkit-transition: all 1s ease; /* Safari and Chrome */
    -moz-transition: all 1s ease; /* Firefox */
    -ms-transition: all 1s ease; /* IE 9 */
    -o-transition: all 1s ease; /* Opera */
    transition: all 1s ease;
    }

    .image:hover img {
    -webkit-transform:scale(2); /* Safari and Chrome */
    -moz-transform:scale(2); /* Firefox */
    -ms-transform:scale(2); /* IE 9 */
    -o-transform:scale(2); /* Opera */
    transform:scale(2);
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
        top: 45%;
        right:37%;
    }
    .display-left {
        position: absolute;
        top: 45%;
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
                <div style="position: fixed">
                    <?php echo $anunt->pret ,"euro <br>";
                        echo $anunt->adresa, "<br>";
                    ?>
                </div>
                    <?php  $first = current(explode("|", $anunt->imagini)); 
                       echo  "<a href='#test'> <img id='img99' src='http://127.0.0.1:8000$first'
                             alt='Apartament' class='top_img'></a><br>"?><br>
            </td>
            <td style ="padding-left:2cm; ">
                <p>Anunț publicat de <?php echo $anunt->nume ?><p>
                <p>Oraș: <?php echo $anunt->oras ?><p>
                <p>Zonă: <?php echo $anunt->zona ?><p>
                <p>Telefon <?php echo $anunt->telefon ?><p>
            </td>
        </tr>
    </table>


<div style="width:500px; ">
    <div  class="dx">
    <?php
    $i = 0;
    $imagini = array();
    while($anunt->imagini != "")
    {
    
      $first = current(explode("|", $anunt->imagini)); 
                       echo  "<img id = 'img$i' src='http://127.0.0.1:8000$first'
                             alt='Apartament' class='small_img'>";
    $imagini[$i] = "http://127.0.0.1:8000$first";
    $first = $first."|";
   

    $anunt->imagini = str_replace($first, "", $anunt->imagini);

    $i++;
    }
    ?><br>
    
</div>
</div>
 <!--
    if(last != 0){
        var aux = '#img'.concat(last);
        $(aux).addClass('mySlides');    
    }
    $('#img$j$j$j').removeClass('mySlides');
    last = $j$j$j;
    -->


    <p>Detalii text despre apartament</p>
    <p><?php echo $anunt->descriere ?><p>
    <p><h3>Caracteristici</h3></p>
    <table>
        <tr>
            <td style="padding-right: 1cm">
                <div>Titlu: </div>
            </td>
            <td>
                <?php echo $anunt->titlu ?>
            </td>

             <td style="padding-right: 1cm;padding-left:1cm;">
                <div>Număr băi: </div>
            </td>
            <td>
                <?php echo $anunt->nr_bai ?>
            </td>
        </tr>
        <tr>
            <td style="padding-right: 1cm">
                <div>Preț: </div>
            </td>
            <td>
                <?php echo $anunt->pret ?>
            </td>
             <td style="padding-right: 1cm; padding-left:1cm">
                <div>Suprafața utilă: </div>
            </td>
            <td>
                <?php echo $anunt->suprafata_utila ?>
            </td>
        </tr>
        <tr>
            <td style="padding-right: 1cm">
                <div>Număr camere: </div>
            </td>
            <td>
                <?php echo $anunt->nr_camere ?>
            </td>
        </tr>


        
    </table>
</div>
  </div>   

<div class="stealth content display-container container" id="test">
<div class="slide">

     <?php 
   
   for($index = 0; $index < $i; $index++)
    
    echo "<img id = '$index' class='mySlides' src='$imagini[$index]'
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
    for($j = 0;$j < $i; $j++)
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
        if (aux < $i){
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
  else if(e.keyCode == 38) { // right
    slideIndex = 1;
  }
});

  
  $('#img99').click(function() {
    $('#test').removeClass("stealth");
    $('body').css("background-color","#c2c2d6");
    $('#all').addClass("stealth");
    var images = $('#img99').attr('src');
    $('#0').attr('src',images);
    counter = 1;
    slideIndex = 1;
  });

  
   $('.mySlides').click(function (e) { 
        e.stopPropagation();
    });
    $('.buton').click(function (e) { 
        e.stopPropagation();
    });   

    $(document).click(function (e) { 
        if (counter == 2){
             $('#test').addClass("stealth");
             $('body').css("background-color","white");
             $('#all').removeClass("stealth");
             slideIndex = 1;
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
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block"; 
}
</script>
</body>
</html>