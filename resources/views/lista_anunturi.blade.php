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
        else
            return $link;
    }
    function parseP($link){
        $aux = strpos($link,'p');
        if ($aux > -1){
            $aux2 = substr($link, $aux, $aux + 2);
            $ret =  str_replace($aux2, "", $link);
            return $ret;
        }
        else
            return $link;
    }

    function return_camera($link){
        if (strpos($link,'c1') > -1)
            return "garsoniera";
        else if (strpos($link,'c2') > -1)
            return "doua camere";
        else if (strpos($link,'c3') > -1)
            return "trei camere";
         else if (strpos($link,'c4') > -1)
            return "patru camere";
         else if (strpos($link,'c5') > -1)
            return "cinci camere";
    }
    function return_pret($link){
        if (strpos($link,'p1') > -1)
            return "max 20.000";
        else if (strpos($link,'p2') > -1)
            return "20.000 - 40.000";
        else if (strpos($link,'p3') > -1)
            return "40.000 - 60.000";
         else if (strpos($link,'p4') > -1)
            return "60.000-80.000";
         else if (strpos($link,'p5') > -1)
            return "80.000-100.000";
        else if (strpos($link,'p6') > -1)
            return "100.000 - 150.000";
         else if (strpos($link,'p7') > -1)
            return "150.000 - 300.000";
         else if (strpos($link,'p8') > -1)
            return "300.000 - 600.000";
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
        div.dropdown{
            padding-right:0.3cm;
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
  <br>
<table>
<tr>
<td>
  <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php if (strpos($link,'c') > -1) echo return_camera($link); else echo "Numar camere"; 
  ?>
  <span class="caret"></span></button>
  <a href="http://127.0.0.1:8000/price/filter?filtru=<?php echo parseC($link)?>">
  <?php 
   if (strpos($link,'c') > -1)
    echo "<button type='button' class='close' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
  ?>
  </a>

  <ul class="dropdown-menu">
 
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php echo parseC($link)."c1";  ?>">garsoniera</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php echo parseC($link)."c2";  ?>">2 camere</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php echo parseC($link)."c3";  ?>">3 camere</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php echo parseC($link)."c4";  ?>">4 camere</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php echo parseC($link)."c5"; ?>">5 camere</a></li>
     <input type="text" name="firstname" size="1" placeholder ="De la">
      <input type="text" name="firstname" size="1" placeholder ="la">
      <button type="button" class="btn btn-default btn-sm submit">
          <span class="glyphicon glyphicon-search"></span>
        </button>
  </ul>
</div>
</td>
<td>

<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php if (strpos($link,'p') > -1) echo return_pret($link); else echo "Pret vanzare"; ?>
  <span class="caret"></span></button>
  <a href="http://127.0.0.1:8000/price/filter?filtru=<?php echo parseP($link)?>">
  <?php 
   if (strpos($link,'p') > -1)
    echo "<button type='button' class='close' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
  ?>
  </a>
  <ul class="dropdown-menu">
 
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p1"; else echo $link."p1"; ?>">max 20000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p2"; else echo $link."p2"; ?>">20000-40000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p3"; else echo $link."p3"; ?>">40000-60000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p4"; else echo $link."p4"; ?>">60000-80000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p5"; else echo $link."p5"; ?>">80000-100000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p6"; else echo $link."p6"; ?>">100000-150000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p7"; else echo $link."p7"; ?>">150000-300000</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=<?php if(strpos($link , p) > -1) echo parseP($link)."p8"; else echo $link."p8"; ?>">300000-600000</a></li>
     <li>
      <input type="text" name="firstname" size="1" placeholder ="De la">
      <input type="text" name="firstname" size="1" placeholder ="la">
      <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-search"></span>
        </button>
    </li>
  </ul>
</div>
</td>

<td>

<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Etaj
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
 
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">Parter</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">Etaj 1</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">Etaj 3</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">Etaj 3</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">Etaj 4</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">Demisol</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">Mansarda</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">Ultimele 2 etaje</a></li>
     <li>
      <input type="text" name="firstname" size="1" placeholder ="De la">
      <input type="text" name="firstname" size="1" placeholder ="la">
      <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-search"></span>
        </button>
    </li>
  </ul>
</div>
</td>

<td>

<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Suprafata utila
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
 
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">max 30 mp</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">30 - 60 mp</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">60 - 90 mp</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">90 - 140 mp</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">140 - 200 mp</a></li>
    <li><a href="http://127.0.0.1:8000/price/filter?filtru=">200 500 mp</a></li>
     <li>
      <input type="text" name="firstname" size="1" placeholder ="De la">
      <input type="text" name="firstname" size="1" placeholder ="la">
      <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-search"></span>
        </button>
    </li>
  </ul>
</div>
</td>

<td>
<div class="container">                          
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Mai multe
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li>
        <a class="test" tabindex="-1" href="#">Compartimentare <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
          <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
          <li>
            <a class="test" href="#">Another dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">3rd level dropdown</a></li>
              <li><a href="#">3rd level dropdown</a></li>
            </ul>
          </li>
        </ul>
        <br>
        <a class="test" tabindex="-1" href="#">Vechime anunt <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
          <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
          <li>
            <a class="test" href="#"> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">3rd level dropdown</a></li>
              <li><a href="#">3rd level dropdown</a></li>
            </ul>
          </li>
        </ul>
        <br>
        <a class="test" tabindex="-1" href="#">Niveluri <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
          <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
          <li>
            <a class="test" href="#">Another dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">3rd level dropdown</a></li>
              <li><a href="#">3rd level dropdown</a></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
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

  <script>
$(document).ready(function(){
  $('.dropdown a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
</section>
</div>
</body>

</html>