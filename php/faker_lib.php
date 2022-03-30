<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
require_once '../../php/vendor/autoload.php';
$names = $_POST['names'];
$phones = $_POST['phones'];
$emails = $_POST['emails'];
// use the factory to create a Faker\Generator instance\

$faker = Faker\Factory::create();
// generate data by accessing properties  
?>
 <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-4">
              <?php
              if($names != '' && $names != 0)
              { ?>
                     <div class="card">
                    <div class="card-header bg-success text-light">
                        <h2>NAMES..</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        for ($i = 0; $i < $names; $i++) {
                            echo $faker->name, "<br>";
                        }
                        ?>
                    </div>
                </div>                
             <?php }
              ?>
               
            </div>
            <div class="col-4">
            <?php
              if($phones != '' && $phones != 0)
              { ?>
                <div class="card">
                    <div class="card-header bg-success text-light">
                        <h2>Phone numbers..</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        for ($j = 0; $j < $phones; $j++){
                            echo $faker->e164PhoneNumber,"<br>";   
                        }                        
                        ?>
                    </div>
                </div>
                <?php }
              ?>
            </div>
            <div class="col-4">
            <?php
              if($emails != '' && $emails != 0)
              { ?>
                <div class="card">
                    <div class="card-header bg-success text-light">
                        <h2>Email address..</h2>
                    </div>
                    <div class="card-body">
                        <?php
                            for($k=0; $k < $emails; $k++)
                            {
                                echo $faker->email,"<br>";
                            }                                
                        ?>
                    </div>
                </div>
                <?php }
                ?>
            </div>
        </div>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
