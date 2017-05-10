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



</style>
 <title>Adauga anunt</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  @include('header')

<div class="jumbotron">
<h1 class="titlu_anunt">Editeaza utilizatorii<br></h1>
</div>
<div class ="container" style="margin-top:60px">
<div class="btn-secondary" >
  <label class="btn btn-default">
    <input type="radio" name="options" id="add"  > Adauga utilizatori
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="delete" > Sterge utilizatori
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="modify" > Modifica datele utilizatorilor
  </label>
  <label class="btn btn-default">
    <input type="radio" name="options" id="list" > Listeaza utilizatorii
  </label>
</div>
</div>
<div class="container stealth listUser" style="margin-top:30px;" id="listUser">
<form class="form-inline " action="/listeaza-utilizatorii" method="post">
   <button type="submit" class="btn btn-default">Listeaza</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
  </form>
</div>

<div class="addUser container stealth" id="addUser" style="margin-top:30px;">
<form class="form-inline" action="/utilizator-adaugat" method="post">
  <div class="form-group">
    <label for="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="nume" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email">E-Mail Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <br><br>
   <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" name="password1" class="form-control" id="pwd1">
  </div>
  <div class="form-group">
    <label for="pwd">Confirm password</label>
    <input type="password" name="password2" class="form-control" id="pwd2">
  </div>
  <br><br>
  <button type="submit" class="btn btn-default">Submit</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div>

<div class="delUser container stealth" id="delUser" style="margin-top:30px;">
<form class="form-inline" action="/utilizator-sters" method="post">
<h3>Sterge un utilizator</h3><br><br>
  <div class="form-group">
    <label for="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="nume" class="form-control" id="name">
  </div> 
  <div class="form-group">
    <label for="name">&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="email" class="form-control" id="email">
  </div> 
  <br><br>
  <button type="submit" class="btn btn-default">Submit</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div>
<div class ="container">
<?php   
  if(isset($users))
    foreach ($users as $user) {
      echo $user->email, "  ",$user->name, "<br>";
    }
?>
</div>

<div class="modifyUser container stealth" id="modifyUser" style="margin-top:30px;">
<form class="form-inline" action="/modifica-utilizator" method="post">
  <div class="form-group"><h3>Modifica</h3><br>
    <label for="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="nume" class="form-control" id="name-mod">
  </div>
  <br><br>
  <div class="form-group"><br>
    <label for="name">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="email" class="form-control" id="email-mod">
  </div>
  <br><br>
    <div class="form-group"><br>
    <label for="name">Passord&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="password" class="form-control" id="pass-mod">
  </div>
  <br><br>
  
  <br><br>
  <button type="submit" class="btn btn-default">Submit</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div>

<br><br><br><br><br>


<script>
var tip = 0;
$('#add').click(function() {
   if($('#add').is(':checked')) {
    $(".addUser").removeClass("stealth");
    $(".delUser").addClass("stealth");
    $(".modifyUser").addClass("stealth");
    $(".listUser").addClass("stealth");


  }
});

$('#delete').click(function() {
   if($('#delete').is(':checked')) {
    $(".delUser").removeClass("stealth");
     $(".addUser").addClass("stealth");
    $(".modifyUser").addClass("stealth");
    $(".listUser").addClass("stealth");

  }
});

$('#modify').click(function() {
   if($('#modify').is(':checked')) {
    $(".modifyUser").removeClass("stealth");
     $(".delUser").addClass("stealth");
    $(".addUser").addClass("stealth");
    $(".listUser").addClass("stealth");
  }
});
$('#list').click(function() {
   if($('#list').is(':checked')) {
    $(".listUser").removeClass("stealth");
     $(".delUser").addClass("stealth");
    $(".modifyUser").addClass("stealth");
    $(".addUser").addClass("stealth");

  }
});
 


</script>

</body>
</html>