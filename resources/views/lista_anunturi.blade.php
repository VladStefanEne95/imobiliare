<!DOCTYPE html>
<head>

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

    <?php
        $filter_counter = 0;

    function parseC($link){
        $aux_first = strpos($link,'c');
        $aux_second = strrpos($link,'c');
        $i = 0;
        if ($aux_first > -1){
            for ( $i = $aux_second + 1;$i < strlen($link); $i++)
                if (!is_numeric($link[$i])){
                    break;
                }
            $aux2 = substr($link, $aux_first, $i-$aux_first );
            $ret =  str_replace($aux2, "", $link);
            return $ret;
        }
        else
            return $link;
    }


    function parseP($link){
        $aux_first = strpos($link,'p');
        $aux_second = strrpos($link,'p');
        $i = 0;
        if ($aux_first > -1){
            for ( $i = $aux_second + 1;$i < strlen($link); $i++)
                if (!is_numeric($link[$i])){
                    break;
                }
            $aux2 = substr($link, $aux_first, $i-$aux_first );
            $ret =  str_replace($aux2, "", $link);
            return $ret;
        }
        else
            return $link;
    }



    function return_camera($filtru){

    $aux_first = strpos($filtru,'c');
    $aux_second = strrpos($filtru,'c');
    $i = 0;
    if ($aux_first > -1){

        for ( $i = $aux_second + 1;i < strlen($filtru); $i++)
            if (!is_numeric($filtru[$i])){
                $i++;
                break;
            }

        $aux2 = substr($filtru, $aux_first, $i-$aux_first - 1 );
        $room1 = substr ($aux2, 1, $aux_second - $aux_first - 1);
        $room2 = substr ($aux2 ,$aux_second - $aux_first + 1 );

        if($room1 == $room2 && $room1 =="1")
            return "garsoniera";
        else if ($room1 == $room2)
            return ($room1."-"."camere");

        return ($room1."-".$room2."camere");

        }
    }
    function return_pret($filtru){

        $aux_first = strpos($filtru,'p');
        $aux_second = strrpos($filtru,'p');
        $i = 0;
        if ($aux_first > -1){

            for ( $i = $aux_second + 1;i < strlen($filtru); $i++)
                if (!is_numeric($filtru[$i])){
                    $i++;
                    break;
                }

            $aux2 = substr($filtru, $aux_first, $i-$aux_first - 1 );
            $room1 = substr ($aux2, 1, $aux_second - $aux_first - 1);
            $room2 = substr ($aux2 ,$aux_second - $aux_first + 1 );

            return ($room1."-".$room2."euro");

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

@include('header')

<div class="container">
    <section >
        <form>
            <div class="form-inline">
                <input type="text" name ="filtru" class="form-control" size="85" placeholder="Cauta">
                <button type="submit" class="btn btn-default">Go</button>
            </div>
        </form>
        <br>
        <table >
            <tr>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php if (strpos($link,'c') > -1) echo return_camera($link); else echo "Numar camere";
                            ?>
                            <?php if (strpos($link,'c') === false)
                                echo  "<span class='caret'></span></button>";
                             else 
                                echo "<span class='close close1' aria-hidden='true'>&nbsp&times;</span>";
                            
                            if (strpos($link,'c') > -1)
                                echo "<button type='button' class='close' aria-label='Close'></button>";
                            ?>
                    
<script>
$('.close1').click(function () {
    window.location.replace("{{\Request::url()}}?filtru=<?php echo parseC($link)?>");
    return false;
});

</script>
                        <ul class="dropdown-menu">

                            <li><a href="{{\Request::url()}}?filtru=<?php echo parseC($link)."c1"."c1";  ?>">garsoniera</a></li>
                            <li><a href="{{\Request::url()}}?filtru=<?php echo parseC($link)."c2"."c2";  ?>">2 camere</a></li>
                            <li><a href="{{\Request::url()}}?filtru=<?php echo parseC($link)."c3"."c3";  ?>">3 camere</a></li>
                            <li><a href="{{\Request::url()}}?filtru=<?php echo parseC($link)."c4"."c4";  ?>">4 camere</a></li>
                            <li><a href="{{\Request::url()}}?filtru=<?php echo parseC($link)."c5."."c5"; ?>">5 camere</a></li>
                            <form>
                            <input class="form-control" style="width:30%; float:left; margin-left:15px;" type="text"  name="lowerRooms"  id="txt_input1" size="1" placeholder ="De la">
                            <input class="form-control" style="width:30%; float:left; margin-left:5px;" type="text" name="higherRooms" id="txt_input2" size="1" placeholder ="la">
                            <button class="form-control" style="width:20%; float:left; margin-left:5px;" id="btn_send" type="button" class="btn btn-default btn-sm submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </form>
                        </ul>
                        </button>
                    </div>
                </td>
                <td>

                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php if (strpos($link,'p') > -1) echo return_pret($link); else echo "Pret vanzare"; ?>
                            <?php if (strpos($link,'p') === false)
                                echo  "<span class='caret'></span></button>";
                             else 
                                echo "<span class='close close2' aria-hidden='true'>&times;</span>";
                            
                            if (strpos($link,'p') > -1)
                                echo "<button type='button' class='close' aria-label='Close'></button>";
                            ?>
        <script>
        $('.close2').click(function () {
    window.location.replace("{{\Request::url()}}?filtru=<?php echo parseP($link)?>");
    return false;
});
        </script>
                        <ul class="dropdown-menu">

                            <li><a href="{{\Request::url()}}?filtru=<?php echo parseP($link)."p0"."p20000";  ?>">max 20000</a></li>
                            <li><a href="{{\Request::url()}}?filtru=<?php  echo parseP($link)."p20000"."p40000";  ?>">20000-40000</a></li>
                            <li><a href="{{\Request::url()}}?filtru=<?php  echo parseP($link)."p40000"."p60000";  ?>">40000-60000</a></li>
                            <li><a href="{{\Request::url()}}?filtru=<?php  echo parseP($link)."p60000"."p80000";  ?>">60000-80000</a></li>
                            <li><a href="{{\Request::url()}}?filtru=<?php  echo parseP($link)."p80000"."p100000";  ?>">80000-100000</a></li>
                            <li><a href="{{\Request::url()}}?filtru=<?php  echo parseP($link)."p100000"."p150000";  ?>">100000-150000</a></li>
                            <li><a href="{{\Request::url()}}?filtru=<?php  echo parseP($link)."p150000"."p300000";  ?>">150000-300000</a></li>
                            <li><a href="{{\Request::url()}}?filtru=<?php  echo parseP($link)."p300000"."p600000";  ?>">300000-600000</a></li>
                            <form>
                                <input class="form-control" style="width:30%; float:left; margin-left:15px;"   type="text"  name="lowerPrice"  id="txt_input3" size="1" placeholder ="De la">
                                <input class="form-control" style="width:30%; float:left;margin-left:5px;" type="text" name="higherPrice" id="txt_input4" size="1" placeholder ="la">
                                <button class="form-control" style="width:20%; float:left;margin-left:5px;" id="btn_send2" type="button" class="btn btn-default btn-sm submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </form>
                        </ul>
                    </div>
                </td>

                <td>

                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Etaj
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">

                            <li><a href="{{\Request::url()}}?filtru=">Parter</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">Etaj 1</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">Etaj 3</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">Etaj 3</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">Etaj 4</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">Demisol</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">Mansarda</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">Ultimele 2 etaje</a></li>
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

                            <li><a href="{{\Request::url()}}?filtru=">max 30 mp</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">30 - 60 mp</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">60 - 90 mp</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">90 - 140 mp</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">140 - 200 mp</a></li>
                            <li><a href="{{\Request::url()}}?filtru=">200 500 mp</a></li>
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
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Mai multe
                                <span class="caret"></span></button>
                            <ul  class="dropdown-menu">

                                <li >
                                    <a class="test" tabindex="-1" href="#">Compartimentare <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                                        <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                                    </ul>
                                    <br>
                                </li>
                                <li>
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
                                </li>
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
                if($user->status == 0)
                    continue;
                else
                    $i++;
                ?>
                <td>
                    <table class="primul">
                        <tr>
                        
                            <?php  $first = current(explode("|", $user->imagini));
                             $link = URL::to('/');
                            echo" <td>$user->titlu</td>
                           
                        </tr>

                        <tr>
                            <td><img src='$link$first'
                                     alt='Apartament' style='width:154px;height:128px;'><br></td>
                        </tr>"
                        ?>
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
                if($user->status == 0)
                    continue;
                $nr_tel[$user->id] = $user->telefon;
                $j++; ?>
            <tr>
                <td ><div class="col-md-3">
                <?php  $first = current(explode("|", $user->imagini)); 
                       echo  "<img src='$link$first'
                             alt='Apartament' style='width:304px;height:228px;'><br>"?>
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
                            if(isset($user->regim_inaltime))
                                echo "<button type='button' class='btn btn-primary btn-sm'>Etaje $user->etaje/$user->regim_inaltime  </button>";
                            else
                                echo "<button type='button' class='btn btn-primary btn-sm'>Etaje $user->etaje </button>";
                            if(isset($user->tip_bloc))
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
                            $link_apartament = URL::to('/')."/anunt/".$user->id;
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
            $(document).ready(function () {
                $("#btn_send").click(function () {
                    window.location.replace("{{\Request::url()}}?filtru=<?php echo parseC($link)."c"  ?>"+$("#txt_input1").val()+"c"+$("#txt_input2").val());
                });
            });
            </script>
        <script>
            $(document).ready(function () {
                $("#btn_send2").click(function () {
                    window.location.replace("{{\Request::url()}}?filtru=<?php echo parseP($link)."p"  ?>"+$("#txt_input3").val()+"p"+$("#txt_input4").val());
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                $(".telefon").click(function(){
                    var arrayFromPHP = <?php echo json_encode($nr_tel); ?>;
                    var nr_telefon;
                    var id_telefon = (event.target.id);
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