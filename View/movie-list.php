  <?php  include(VISTA . 'navbar.php') ?>

<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 style="color:white" class="mb-4">Listado de Movies</h2>
               <table class="table bg-light-alpha"  border = 1>
                    <thead>
                         <th style="color:white">Title</th>
                         <th style="color:white">Popularity</th>
                         <th style="color:white">Vote_count</th>
                         <th style="color:white">id</th>
                    </thead>
                    <tbody>
                         <?php
                              if(isset($arrayMovies)){
                                   foreach($arrayMovies as $movie){

                                        ?>
                                             <tr>
                                                  <td style="color:white"><?php echo $movie->getTitle(); ?></td>
                                                  <td style="color:white"><?php echo $movie->getVote_count(); ?></td>
                                                  <td style="color:white"><?php echo $movie->getVote_count(); ?></td>
                                                  <td style="color:white"><?php echo $movie->getId(); ?></td>
                                                  <!--<td>
                                                       <button type="submit" name="btnRemove" class="btn btn-danger" value="<?php echo $movie->get(); ?>"> Eliminar </button>
                                                  </td>-->
                                             </tr>
                                        <?php
                                   }
                              }
                         ?>
                         </form>
                    </tbody>
               </table>
          </div>
     </section>
</main>
