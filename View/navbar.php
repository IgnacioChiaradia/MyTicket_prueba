<!--en el style del fondo se coloca el 0.5 al final para indicar la opacidad del fondo,
 si se usa la caracteristica "opacity" convierte a todos los elementos en opacos-->
<div class="barrasuperior" style="background-color:rgb(0,0,0,0.5);">
<nav class="navbar navbar-expand-sm">
        <a href="#" class="navbar-brand " ><img src="<?php echo URL ?>/img/PT-logofinal.png" style="height: 80px"></a>
        <!--el navbar-dark permite cambiar el color del boton colapsable para que destaque en el fondo oscuro/ solo hay dark y light-->
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#uno"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse ml-auto" id="uno">
            <ul class="navbar-nav ml-auto font-weight-bold" style="font-size: 1.5em;margin-right:5px;"  >
                <li class="nav-item"><a href="#" class="nav-link text-light">Cartelera</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light">Horarios</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light">Precios</a></li>
                <li class="nav-item"><a href="<?php echo URL ?>/view/movie/" class="nav-link text-light">Movies</a></li>
                <form action="search.php" method="post" class="form-inline">
                    <input type="text" placeholder="Buscar" class="form-control mr-sm-2">
                    <button type="submit" class="btn btn-success">Buscar</button>
                </form>
            </ul>
        </div>
    </nav>
</div>
