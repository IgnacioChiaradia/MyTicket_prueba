<?php
namespace View;
?>

<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Cervezas</h2>
               <table class="table bg-light-alpha"  border = 1>
                    <thead>
                         <th>Popularity</th>
                         <th>Vote_count</th>
                         <th>Video</th>
                         <th>Poster_path</th>
                         <th> </th>

                    </thead>
                    <tbody>
                         <?php
                              if(isset($arrayMovies)){
                                   foreach($arrayMovies as $movie){

                                        ?>
                                             <tr>
                                                  <td><?php echo $movie->get(); ?></td>
                                                  <td><?php echo $movie->get(); ?></td>
                                                  <td><?php echo $movie->get(); ?></td>
                                                  <td><?php echo $movie->get(); ?></td>
                                                  <td></td>
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
