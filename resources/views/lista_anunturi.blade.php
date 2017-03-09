<!DOCTYPE html>
@extends("crudbooster::admin_template")
<html>

<body>
@section("content")
<form>
    filtru:<br>
    <input type="text" name="filtru"><br>
    valoare:<br>
    <input type="text" name="valoare"><br>
    <br><br>
    <input type="submit" value="Submit">
</form>
<h1>
    <?php
        if (isset ($users) == TRUE)
        foreach ($users as $user){
         echo $user->titlu;
         echo "<br>";
         }

    ?>
</h1>
@endsection
</body>

</html>