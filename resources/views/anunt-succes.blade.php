<!DOCTYPE html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://use.fontawesome.com/b791d93d6c.js"></script>


    <style>
      .container {
  padding-right: 150px;
  padding-left: 200px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}

table {
  border:1px solid #d3d3d3
}
td,th {
  border:none
}
.text {
  font-size: 200%
}

.hr-sect {
  display: flex;
  flex-basis: 100%;
  align-items: center;
  color: #ccc;
  margin: 8px 0px;
}
.hr-sect::before,
.hr-sect::after {
  content: "";
  flex-grow: 1;
  background: #ccc;
  height: 2px;
  font-size: 2px;
  line-height: 0px;
  margin: 8px 8px 8px 8px;
}
    </style>
</head>
<body>
@include('header')


<div class="container"  align="center" font-size="120px;">
  <div class ="alert alert-success"> 
  <h2 class="text">&#9745; Anunţul tău a fost adaugat cu succes</h2>
  </div>
  <div>
  <h2 class="text"><a href="{{URL::to('/')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i>Intoarce-te la pagina principală </a></h2>
  <div class="hr-sect">SAU</div>
  <h2 class="text"><a href="{{URL::to('/')}}/edit/{{$id}}">Adaugă mai multe opţiuni </a></h2>


  </div>


</div>

</body>