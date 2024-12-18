<?php include "includes/header.php"?>



    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">My Calculator</div>
                        <div class="card-body">
                            <form action="web.php" Method="POST">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="first_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="second_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Third Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="third_number">
                                    </div>
                                </div>
                               

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Large Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo isset($_GET['result']) ? $_GET['result'] : '';?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="calculator_btn" value="Make Result"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
















<?php include "includes/footer.php"?>