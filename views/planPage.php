<?php
  include 'header.php';
  include '../functions/token.php';
  require '../../../../db_info/db.php';
  
  var_dump($token, $fall, $winter, $spring, $summer);

  ?>
    
    
    <!-- Four quarters representing Fall, Winter, Spring and Summer -->
    <form action="" method="post">
      
    <!-- Token -->
      <div class="container text-center">
        <h1>Quarterly Plan</h1><hr>
        
        <div class="container text-center">
          <p>Token: </p>
          <div id='token' name="token">
            <!-- This div will display our generated token -->
            <?php echo $GLOBALS["token"]; ?>
          </div>
        </div>
      </div>


      <div class="container text-center">
        <div class="row">
          <div class="card">Fall<hr>
            <div >
              <textarea type="text" name="fall"></textarea>
            </div>
          </div>  
          <div class="card">Winter<hr>
            <div>
              <textarea type="text" name="winter"></textarea>
            </div>
          </div>
          <div class="card">Spring<hr>
            <div class="center">
              <textarea type="text" name="spring"></textarea>
            </div>
          </div>
          <div class="card">Summer<hr>
            <div class="center">
              <textarea type="text" name="summer"></textarea>
            </div>
          </div>
      </div><br>
      <div>
         <input type="submit" value="Submit" name="submit">
      </div>
</div>
    </form><br>
    
    
    
    <?php
      include 'footer.php';
    ?>