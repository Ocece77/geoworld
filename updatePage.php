<?php
require_once 'header.php'; 
require_once 'inc/manager-db.php';
require_once 'javascripts.php';
?>




<div id="frame" class="container  d-flex flex-column  align-items-center mt-5  " style="width : 100%; height : 100% ">
    <div class="row">
        <div class="col">
            <h1 style="font-size : 5em" id="title">Update Info </h1>
        </div>
    </div>
       
    <div class="row">
        <div class="col">
        <table id ="table" class="table">

         <tr>
           <td>Region</td>
           <th>Surface Area</th>
           <th>Life Expectancy</th>
           <th>Head of State</th>
    
         </tr>
       <?php
       $n = "";
       if (isset($_GET["update"])){
        $n = $_GET["update"];
       } else {
        $n ="france";
       }
         $country = getCountryInfo($n);
         
          foreach ($country as $info){?>
         
          <tr>

            <td> <?php echo $info->Region ?></td>
            <td> <?php echo $info->SurfaceArea ?></td>
            <td> <?php echo $info->LifeExpectancy ?></td>
            <td> <?php echo $info->HeadOfState ?></td>
          </tr>
          <?php }  ?>

          <tr>

                <td> <input type="text" name="region" id="region"></td>
                <td> <input type="text" name="surfacearea" id="surfacearea"></td>
                <td> <input type="text" name="lifeexpectancy" id="lifeexpectancy"></td>
                <td><input type="text" name="headofstate" id="headofstate"></td>
            </tr>
     </table>

        </div>
    </div>

</div>

<script src="index.js"></script>