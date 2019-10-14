<?php  include(VISTA . 'navbar.php') ?>


<main class="d-flex align-items-center justify-content-center height-100">
  <div style="background-color:rgb(0,0,0,0.5); margin-top:5%;">
          <div class="content">
               <header class="text-center">
                    <h2 style="color:white">Logueo</h2>
               </header>
               <form action="" method="POST" class="login-form bg-dark-alpha p-5 text-white">
                    <div class="form-group">
                         <label for="">Nombre de usuario</label>
                         <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingresar usuario">
                    </div>
                    <div class="form-group">
                         <label for="">Contraseña</label>
                         <input type="text" name="pass" class="form-control form-control-lg" placeholder="Ingresar constraseña">
                    </div>
                    <button class="btn btn-success btn-block btn-lg" type="submit">Iniciar Sesión</button>
                    <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="true">Logearse con facebook (a futuro)</div>
                    <button type="button" data-toggle="modal" data-target="#mimodal" class="btn btn-success btn-block btn-lg">Registrarse</button>
               </form>
          </div>
    </div>
    <!-- en vez de class="btn btn-success" o class="btn btn-dark btn-block btn-lg" quedo -->

<!--Boton modal-->
<!--    <button type="button" data-toggle="modal" data-target="#mimodal" class="btn btn-success">Consultar-modal</button> -->
    <!--Desarrollo modal-->
    <div class="modal fade" id="mimodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--header-->
                <div class="modal-header">
                    <h4 class="modal-title">Registrate !</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!--body-->
                <div class="modal-body">
                  <form action="" method="POST" class="login-form bg-dark-alpha p-5 text-black">
                       <div class="form-group">
<<<<<<< HEAD
                            <label for="user" >User Name</label>
                            <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingresar usuario">
=======
                            <label for="user" style="font-color:rgb(0,0,0)">Nombre usuario</label>
                            <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingresar nombre de usuario">
>>>>>>> 91a9cc46fe0fe9930619de950b6e142afd17e3d6
                       </div>
                       <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="text" name="pass" class="form-control form-control-lg" placeholder="Ingresar constraseña">
                       </div>
                       <div class="form-group">
                            <label for="">Apellido</label>
                            <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingrese su apellido">
                       </div>
                       <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingrese su nombre">
                       </div>
                       <div class="form-group">
                            <label for="">Dni</label>
                            <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingrese su dni">
                       </div>
                       <button class="btn btn-dark btn-block btn-lg" type="submit">Registrarse</button>
                  </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

<!-- <div style="background-color:rgb(0,0,0,0.5)">
          <div class="content">
               <header class="text-center">
                    <h2 style="color:white">Sign up</h2>
               </header>
               <form action="" method="POST" class="login-form bg-dark-alpha p-5 text-white">
                    <div class="form-group">
                         <label for="">User Name</label>
                         <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingresar usuario">
                    </div>
                    <div class="form-group">
                         <label for="">Password</label>
                         <input type="text" name="pass" class="form-control form-control-lg" placeholder="Ingresar constraseña">
                    </div>
                    <div class="form-group">
                         <label for="">Apellido</label>
                         <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingrese su apellido">
                    </div>
                    <div class="form-group">
                         <label for="">Nombre</label>
                         <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group">
                         <label for="">Dni</label>
                         <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingrese su dni">
                    </div>
                    <button class="btn btn-dark btn-block btn-lg" type="submit">Registrarse</button>
               </form>
          </div>
      </div> -->
     </main>
