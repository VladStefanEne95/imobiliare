<!DOCTYPE html>
@extends("crudbooster::admin_template")
<>
<head>
    <title>Lista anunturi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

@section("content")
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

        td
        {
            padding:15px 15px 0 15px;
        }

        tr.border {
            border-style: solid;
            border-width: medium;
        }
        img{
            height: 200px;
            width: 500px;
        }
    </style>

<form>
    filtru:<br>
    <input type="text" name="filtru"><br>
    valoare:<br>
    <input type="text" name="valoare"><br>
    <br><br>
    <input type="submit" value="Submit">
</form>


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
                    <table>
                        <tr>
                            <?php echo" <td>$user->titlu</td>"; ?>
                        </tr>

                        <tr>
                            <td><img src="https://img3.imonet.ro/X8SP/8SP00H2IF84/apartament-de-vanzare-2-camere-bucuresti-aparatorii-patriei-74465148_277x208.jpg"
                            alt="Apartament" style="width:304px;height:228px;"><br></td>
                        </tr>
                 <?php
                    echo "<tr>";
                    echo "<td>numar camere:  ", $user->nr_camere , "<br><td>";
                    echo "</tr>";
                    echo "<td>suprafata utila:  ", $user->suprafata_utila ,"mp", "<br></td>";
                    echo "<tr>";
            ?>
    </table></td>
        <?php
         }
        }
    ?>
        </tr></table>
<table>

    <?php
        if (isset ($users) == TRUE){
        foreach ($users as $user){?>
        <tr>
            <td>
                <img src="https://img3.imonet.ro/X8SP/8SP00H2IF84/apartament-de-vanzare-2-camere-bucuresti-aparatorii-patriei-74465148_277x208.jpg"
                     alt="Apartament" style="width:304px;height:228px;"><br>

            </td>

            <td>
                <?php
                echo $user->titlu,"<br>";
                echo "numar camere:  ", $user->nr_camere , "<br>";
                echo "suprafata utila:  ", $user->suprafata_utila ,"mp", "<br>";
                $link_apartament = "http://127.0.0.1:8000/".$user->titlu;
                echo '<a href="' . $link_apartament . '"class="btn btn-success">Detalii</a>';
                ?>
                    <div class = "btn-group">

                        <button type = "button" class = "btn btn-default dropdown-toggle" data-toggle = "dropdown">
                            Numar telefon
                            <span class = "caret"></span>
                        </button>

                        <ul class = "dropdown-menu" role = "menu">
                            <li><a href = "#">073213123</a></li>
                        </ul>
                    </div>
            </td>
        </tr>
        <tr></tr>

    <?php
            }
        }
        ?>
</table>
@endsection
</body>

</html>