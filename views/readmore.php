<?php
    include "includes/header.php";
?>
    <section class="py-5 bg-dark-subtle">

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="<?php echo $data['image']?>" alt="image">
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="card card-body">
                       <h1>  <?php echo $data['coursName']?></h1>
                       
                       <p>Instructor:   <?php echo $data['instructor']?></p>
                      
                       <p> Duration: <?php echo $data['duration']?></p>
                        <p> Resdiential :<?php echo $data['resdiential']?></p>
                        <p> Start Date : <?php echo $data['startDate']?></p>
                        <p> End Date : <?php echo $data['endDate']?></p>
                   </div>
                </div>
            </div>
        </div>


    </section>


<?php include "includes/footer.php";?>





