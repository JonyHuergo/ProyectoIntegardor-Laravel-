@extends('layouts.default')
@php
/*

    session_start();
    if(isset($_SESSION["registrado"])){
    header("Location: paginaPrincipal.php");
    }
    require_once "clases/FormularioIngresar.php";
    require_once "clases/JsonDb.php";
    require_once "clases/SQLdb.php";
    require_once "clases/Db.php";

    $dns ='mysql:host=127.0.0.1;dbname=ecommerce;port=3306';
    $db_user = 'root';
    $db_pass = 'root';

    //Booleano para definir si se utiliza SQL o JSON para guardar los datos
    $SQL = true;

    $errores = [];

    if ($_POST) {

    $errores = FormularioIngresar::validar($_POST,$SQL,$dns, $db_user, $db_pass);

    if(isset($_POST["recordarme"])){
        setcookie("usuario", $_POST["usuario"], time()+3600*24*7);
        setcookie("password", $_POST["contraseña"], time()+3600*24*7);
      } else if (!isset($_POST["recordarme"])) {
            if($_COOKIE){
                setcookie("usuario", $_POST["usuario"], time()-3600*24*7);
                setcookie("password", $_POST["contraseña"], time()-3600*24*7);
            }
      }
    }*/
@endphp
@section('title', 'Ingresar')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/ingresarStyle.css') }}">
@endsection
@section('content')
<section>
                    <div class="text-center">
                        <h1>Ingresa</h1>
                        <form class="row" action="#" method="post">
                            <input type='hidden' name='submitted' id='submitted' value='1' />
                            <span>
                            <label class="col-xl-6">Nombre de Usuario</label>
                            <input class="col-xl-6 form-control" type="text" name="usuario" id='username' value="<?php if(isset($_COOKIE["usuario"])){ echo $_COOKIE["usuario"];} else if($_POST){ if(!$errores["usuario"]){ echo $_POST["usuario"];}}?>"
                             placeholder = "<?php  if($_POST){if(isset($errores)){if($errores["usuario"]){ echo($errores["usuario"]); } else {echo ""; }}} ?>">
                             <span style="color: red"  class='error'>
                                          <?php
                                              if (isset($errores['username'])) {
                                                  echo "El username ingresado no es valido";
                                              }
                                          ?>
                             </span>
                            </span>
                            <span>
                            <label for="password" class="col-xl-6">Contraseña</label>
                            <input class="col-xl-6 form-control" type="password" name="contraseña" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"];}?>"
                            id='password' maxlength="50"
                            placeholder = "<?php if($_POST){if(isset($errores)){if($errores["password"]) { echo($errores["password"]); } else {echo ""; }}}?>">
                            </span>
                            <section class="col-xl-6">
                                <label for="recordarme">Recordarme</label>
                                <input class="recordarme" type="checkbox" name="recordarme" value="1">
                            </section>
                            <input class="boton" type="submit" value="Ingresar">
                          </form>
                          <a href="#">Olvidé mi contraseña</a>
                    </div>
                </section>
@stop
