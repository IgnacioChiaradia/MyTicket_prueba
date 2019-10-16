  <?php include(VISTA . 'navbar.php') ?>

  <main class="my-5">
       <section class="mb-5">
            <div class="container-fluid">
                 <div class="row-fluid">
                      <h2 class="display-2 text-center text-light ">Peliculas en proyeccion</h2>
                 </div>
            </div>
       </section>
  </main>
  <?php
     if (!empty($arrayMovies)) {
          foreach ($arrayMovies as $movie) {
               ?>

            <div class="container-fluid">
                 <div class="row">
                      <div class="col-4  my-5">
                           <img src="https://image.tmdb.org/t/p/w500/<?php $movie->getPoster_path() ?>" alt=<?php $movie->getTitle() ?> class="img-fluid rounded">
                      </div>
                      <div class="col-8  my-5">
                           <table class="table">
                                <thead class="text-light">
                                     <th>Titulo: <?php echo $movie->getTitle() ?></th>
                                     <th>Idioma: <?php echo $movie->getOriginal_language() ?></th>
                                     <th>Fecha: <?php echo $movie->getRelease_date() ?></th>
                                     <th>Calificacion: <?php echo $movie->getVote_average() ?></th>
                                </thead>

                           </table>
                           <div class="text-light"><?php echo $movie->getOverview() ?></div>
                      </div>
                 </div>
            </div>

  <?php
          }
     }
     ?>
