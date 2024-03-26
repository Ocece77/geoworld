<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once '/home/ocece77/public_html/geoworld/header.php'; 
require_once 'inc/manager-db.php';

?>



<?php 

/*Liste des villes */


if (isset($_GET["continent"])){
  $continent = $_GET["continent"];
} else{
  $continent ="asia";
}

$desPays = getCountriesByContinent($continent);
global $desPays;
global $continent;
?>

<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1 id="title" style="font-size:5em" class="text-center mb-5 text-info text-capitalize">Les pays en <?php echo $continent;?></h1>
    <div>
     <table id ="table" class="table table-hover">
     <thead class="thead-dark ">
         <tr>
           <th>flags</th>
           <th>Nom</th>
           <th>Population</th>
           <th>Capital</th>
           <th>Update information</th>
    
         </tr>
</thead>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
    
          foreach ($desPays as $pays){?>
         
          <tr>
            <td style="width : 7em;" > <img class="img-fluid w-100" src="https://countryflagsapi.netlify.app/flag/<?php  echo $pays-> Code2?>.svg"> </td>
            <td > <?php echo $pays->Name ?></td>
            <td> <?php echo $pays->Population ?></td>
            <td> <?php echo getCapital($pays -> Capital)  ?></td> 
            <td>
            <a class="text-decoration-none link-info link-opacity-75-hover"  href="updatePage.php?n=<?php echo $pays-> Name;?>" >
              <button  type="button" class="btn btn-outline-info">Update</button>
            </a>
              </td>
          </tr>
          <?php }  ?>

     </table>
    </div>

  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
<script src="index2.js"></script>