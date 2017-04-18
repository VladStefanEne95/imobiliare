<!DOCTYPE html>
<html lang="en">
<head>
    <title>anunt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                <li><a href="#">Cauta</a></li>
                <li><a href="#">Inca ceva</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
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
                       echo  "<img src='http://127.0.0.1:8000$first'
                             alt='Apartament' style='width:304px;height:228px;'><br>"?><br>
            </td>
            <td style ="padding-left:2cm; ">
                <p><?php echo $anunt->nume ?><p>
                <p><?php echo $anunt->oras ?><p>
                <p><?php echo $anunt->zona ?><p>
                <p><?php echo $anunt->telefon ?><p>
            </td>
        </tr>
    </table>
<table>
    <tr>
        <td  >
<div class="thumbnail">
    <div class="image">
<img src="https://img3.imonet.ro/X8SP/8SP00H2IF84/apartament-de-vanzare-2-camere-bucuresti-aparatorii-patriei-74465148_277x208.jpg"
alt="Apartament" style="width:154px;height:128px ;">
    </div>
</div>
        </td>
        <td>
<div class="thumbnail">
    <div class="image">
<img src="https://img3.imonet.ro/X8SP/8SP00H2IF84/apartament-de-vanzare-2-camere-bucuresti-aparatorii-patriei-74465148_277x208.jpg"
alt="Apartament" style="width:154px;height:128px;">
    </div>
</div>
        </td>
    </tr>
</table>
    <p>Detalii text despre apartament</p>
    <p><?php echo $anunt->descriere ?><p>
    <p>Caracteristici</p>
    <table>
        <tr>
            <td style="padding-right: 1cm">
                <div>Titlu: </div>
            </td>
        <td>
            <?php echo $anunt->titlu ?>
        </td>
        </tr>
        <tr>
            <td style="padding-right: 1cm">
                <div>Pret: </div>
            </td>
            <td>
                <?php echo $anunt->pret ?>
            </td>
        </tr>
        <tr>
            <td style="padding-right: 1cm">
                <div>Numar camer: </div>
            </td>
            <td>
                <?php echo $anunt->nr_camere ?>
            </td>
        </tr>
        <tr>
            <td style="padding-right: 1cm">
                <div>Confort: </div>
            </td>
            <td>
                <?php echo $anunt->confort ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>