@extends('layouts.default')
@section('title', 'Registrarse')
@section('style')
<link rel="stylesheet" href="{{ URL::asset('css/registroStyle.css') }}">
@endsection
@section('content')
<div class="banner">
      <br>

      <div class="area">

        <form role="form" action="registro.php" method="post" enctype="multipart/form-data">
<!--
          <?php// if (Validador::huboErrores($errores)) : ?>
            <div id="errores" class="alert alert-danger">
              <ul>
                <?php// foreach($errores as $bolsaDeErrores) : ?>
                  <?php// foreach($bolsaDeErrores as $error) : ?>
                    <li><?='' //$error ?></li>
                  <?php// endforeach; ?>
                <?php// endforeach; ?>
              </ul>
            </div>
          <?php// endif; ?>
          -->
          <div>
            <label for="nombre">Nombre</label>
            <br/>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= isset($_POST['nombre']) ? $_POST['nombre'] : ""; ?>" placeholder="Ingrese Nombre">
            <br/>
          </div>

          <div>
            <label for="apellido">Apellido</label>
            <br/>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?= isset($_POST['apellido']) ? $_POST['apellido'] : ""; ?>" placeholder="Ingrese Apellido">
            <br/>
          </div>

          <div>
            <label for="username">Nombre de Usuario</label>
            <br/>
            <input type="text" class="form-control" id="username" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : ""; ?>" placeholder="Ingrese Nombre de Usuario">
            <br/>
          </div>

          <div>
            <label for="email">Email</label>
            <br/>
            <input type="text" class="form-control" id="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ""; ?>" placeholder="Ingrese Email">
            <br/>
          </div>

          <div>
            <label for="email-confirm">Confirmar Email</label>
            <br/>
            <input type="text" class="form-control" id="email-confirm" name="email_confirm" value="" placeholder="Ingrese Confirmación Email">
            <br/>
          </div>

          <div>
            <label for="password">Contraseña</label>
            <br/>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese Contraseña">
            <br/>
          </div>

          <div>
            <label for="password-confirm">Confirmar Contraseña</label>
            <br/>
            <input type="password" class="form-control" id="password-confirm" name="password_confirm" placeholder="Ingrese Confirmación Contraseña">
            <br/>
          </div>

          <div class="form">
            <label>Avatar</label>
            <br/>
            <input type="file" name="avatar"/>
            <br/>
          </div>

          <div class="form">
            <label> Fecha de Nacimiento</label>
            <br/>
            <input type="date" name="fechaNacimiento">
            <br/>
          </div>

          <input class="boton pull-right" type="submit" name="botonSubmit" value="Registrarme"/>
        </form>
      </div>


    </div>
@endsection