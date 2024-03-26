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
<?php  require_once 'header.php'; 
require_once 'inc/manager-db.php';

global $n;
?>


<div class="container h-100 d-flex align-items-center justify-content-center ">

<div class="d-none container">
  <div class="row">
    <div class="col text-center">
       <h1>Quiz</h1>
      <p class="text-info">Tester vos connaissance en géographie</p>
      <button id="btn-start"class="btn btn-default btn-info text-light">Commencez !</button>
    </div>
  </div>
</div>



<?php 
  $lespays = getAllCountries();
  $randomNumbers = rand(1, count($lespays)-1);
  $countryCode = getCountryCode($randomNumbers);

?>

<div class="container">

  <div class="row d-flex justify-content-center">
    <div class="col-md-6 col-sm-12 ">

    <div class="card text-center">
    <h5 class="card-header mb-5">Question <span id="question-number">x</span></h5>
      <div class="card-body">
<!--Création d'une boucle pour obtenir le code du drapeau du pays et son nom-->
     <?php foreach ($countryCode as $info){?>
          <img id="question-flag" class="card-img-top w-50 shadow-lg rounded mb-5 " src="https://countryflagsapi.netlify.app/flag/<?php  echo $info -> Code2 ?>.svg" alt="<?php  echo $countryName?>">
          <?php
        $countryName = $info -> Name;
        } ?>

           <p class="card-text fw-bold fs-5">Which Flags is this ?</p>

            <div class="fs-bold d-flex my-5 justify-content-around">
              <input type="button"  class="order-<?php echo rand(1,3); ?> btn-quiz btn  btn-info btn-lg text-light" value="<?php  echo $countryName?>" name="btn-quiz">
              <input type="button"  class="order-<?php echo rand(1,3);?> btn-quiz btn  btn-info btn-lg text-light" value="<?php  echo $lespays[rand(1, count($lespays)-1)] -> Name ?>" name="btn-quiz">
              <input type="button"  class="order-<?php echo rand(1,3);?> btn-quiz btn  btn-info btn-lg text-light" value="<?php  echo $lespays[rand(1, count($lespays)-1)] -> Name ?>" name="btn-quiz">
            
            </div>
            
            <p id="quiz-resp" class="text-success fw-bold">Correct !</p>
      </div>

      <div class="card-footer">
        <p class="text-muted mt-2"><span id="pts">X</span> / 5 points</p>
      </div>
    </div>
  </div>
</div>

</div>

</div>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
<script src="quiz.js"></script>