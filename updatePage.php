<?php
require_once 'header.php'; 
require_once 'inc/manager-db.php';
require_once 'javascripts.php';
?>




<div id="frame" class="container  d-flex flex-column  align-items-center mt-5  " style="width : 100%; height : 100% ">
    <div class="row">
        <div class="col">
            <h1 style="font-size : 5em" class="mb-5" id="title">Update Info </h1>
        </div>
    </div>
       
    <div class="row">
        <div class="col">
        <table id ="table" class="table">

         <tr>
           <td>Population</td>
           <th>Head of State</th>
    
         </tr>

       <?php

       global $n;

       if (isset($_GET["update"])){
        $n = $_GET["update"];
       } 
         $country = getCountryInfo($n);
         
          foreach ($country as $info){?>
         
          <tr>
            <td> <?php echo $info->Population ?></td>
            <td> <?php echo $info->HeadOfState ?></td>
          </tr>
          <?php } ?>

          <tr>
                <form action="" method="get">
                <td><input type="text" name="Population" id="Population" ></td>
                <td><input type="text" name="HeadOfState" id="headofstate" ></td>
                </form>
               
          
            </tr>

      
     </table>

     <div class="row  ">
          <div class="col  d-flex flex-column  align-items-center mt-5  text-light">
            <button id="btn" type="button" class="invisible text-light btn btn-default btn-lg btn-info">Update</button> </div>
          </div>

        </div>
    </div>


    <?php
  
    $prop = ["Population" , "HeadOfState"];
   if (isset($_GET["btn"])){
    foreach ($prop as $i){
      if (!empty($i)){
        update($i, $_GET[$i] ,$n);
      } 
    }
   }

    ?>

</div>

<script src="index.js"></script>