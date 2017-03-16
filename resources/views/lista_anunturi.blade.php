<!DOCTYPE html>
<head>

    <?php 
    function parseC($link){
        $aux = strpos($link,'c');
        if ($aux > -1){
            $aux2 = substr($link, $aux, $aux + 2);
            $ret =  str_replace($aux2, "", $link);
            return $ret;
        }
    }
    function parseP($link){
        $aux = strpos($link,'p');
        if ($aux > -1){
            $aux2 = substr($link, $aux, $aux + 2);
            $ret =  str_replace($aux2, "", $link);
            return $ret;
        }
    }
  ?>

    <title>Lista anunturi</title>
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
                    <li><a href="#">Inca ceva</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <style>
        .primul td
        {
            padding:15px 15px 0 15px;
        }

         .second td
        {
            padding:15px 0 0 15px;
        }

      
        img{
            height: 200px;
            width: 500px;
        }
        .div1 {
            float:left;
          
        }
        .div2 {
           
            float:right;
        }
    </style>
<div class="container">
<section >
 
<form>
  <div class="form-inline">
    <input type="text" name ="filtru" class="form-control" size="85" placeholder="Cauta">
    <button type="submit" class="btn btn-default">Go</button>
  </div>
  </form>
<table>
<tr>
<td>
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Numar Camere
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
 
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , c) > -1) echo parseC($link)."c1"; else echo $link."c1"; ?>">garsoniera</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , c) > -1) echo parseC($link)."c2"; else echo $link."c2"; ?>">2 camere</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , c) > -1) echo parseC($link)."c3"; else echo $link."c3"; ?>">3 camere</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , c) > -1) echo parseC($link)."c4"; else echo $link."c4"; ?>">4 camere</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , c) > -1) echo parseC($link)."c5"; else echo $link."c5"; ?>">5 camere</a></li>
  </ul>
</div>
</td>
<td>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Pret Vanzare
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
 
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p1"; else echo $link."p1"; ?>">max 20000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p2"; else echo $link."p2"; ?>">20000-40000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p3"; else echo $link."p3"; ?>">40000-60000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p4"; else echo $link."p4"; ?>">60000-80000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p5"; else echo $link."p5"; ?>">80000-100000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p6"; else echo $link."p6"; ?>">100000-150000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p7"; else echo $link."p7"; ?>">150000-300000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p8"; else echo $link."p8"; ?>">300000-600000</a></li>
  </ul>
</div>
</td>
</tr>
</table>
</section>

<section class ="content-section">
    <table><tr>

    <?php
        if (isset ($users) == TRUE){
            $i = 0;
            foreach ($users as $user){
                if($i>2)
                    break;
                $i++;
                ?>
                <td>
                    <table class="primul">
                        <tr>
                            <?php echo" <td>$user->titlu</td>"; ?>

                        </tr>

                        <tr>
                            <td><img src="https://img3.imonet.ro/X8SP/8SP00H2IF84/apartament-de-vanzare-2-camere-bucuresti-aparatorii-patriei-74465148_277x208.jpg"
                            alt="Apartament" style="width:154px;height:128px;"><br></td>
                        </tr>
                 <?php
                    echo "<tr>";
                    echo "<td>numar camere:  ", $user->nr_camere , "<td>";
                    echo "</tr>";
                    echo "<td>suprafata utila:  ", $user->suprafata_utila ,"mp", "</td>";
                    echo "<tr>";
                  ?>
    </table></td>
        <?php
         }
        }
    ?>
        </tr></table>
<table class="second">

    <?php
        if (isset ($users) == TRUE){
             $j = 1;
            $nr_tel =array();
        foreach ($users as $user){
          $nr_tel[$j] = $user->telefon;
          $j++; ?>
        <tr>
            <td ><div class="col-md-3">
                <img src="https://img3.imonet.ro/X8SP/8SP00H2IF84/apartament-de-vanzare-2-camere-bucuresti-aparatorii-patriei-74465148_277x208.jpg"
                     alt="Apartament" style="width:304px;height:228px;"><br>
            </div>
            </td>

            <td>
                 <td width="600"><div class="col-md-11">
                <?php
                echo "<h3>", $user->titlu,"<br>","<small>"," " ,$user->oras," " ,$user->zona,"</small>","</h3>", "<br>";?>
                <div class="btn-group" >
                    <?php
                    echo "<button type='button' class='btn btn-primary btn-sm'>$user->nr_camere camere</button>";
                    echo "<button type='button' class='btn btn-primary btn-sm'>$user->suprafata_utila  MP</button>";
                    echo "<button type='button' class='btn btn-primary btn-sm'>Etaje $user->etaje/$user->regim_inaltime  </button>";
                    echo "<button type='button' class='btn btn-primary btn-sm'>Bloc $user->tip_bloc </button>";

                    ?>
                </div><br><br>

                 <div class ="div1 col-md-6">
                <?php
                         echo "<h2>", $user->pret ,"<small>"," EUR","</small>","<h2>";
                ?>
                </div>
              
                 <div class="div2 col-md-">
                 <br>
                <?php

                $link_apartament = "http://127.0.0.1:8000/anunt/".$user->titlu;
                echo '<a href="' . $link_apartament . '"class="btn btn-success">Detalii</a>';
                $nr_tel_id ='test'.$user->id;

                echo "<button id=$nr_tel_id type='button' class='btn btn-info telefon'>Numar telefon</button>";
                ?>
                        
                       </div>
                 </div>
            </td>
        </tr>
        <tr></tr>

    <?php
            }
        }
        ?>
</table>
    <script>
        $(document).ready(function(){
        $(".telefon").click(function(){
        var arrayFromPHP = <?php echo json_encode($nr_tel); ?>;
        var nr_telefon;                    
        var id_telefon =(event.target.id);
        id_telefon = "#".concat(id_telefon);
        index = id_telefon.replace(/\D/g,'');                 
        $(id_telefon).replaceWith(arrayFromPHP[index]);
        });
        });
  </script>
</section>
</div>
</body>

</html>