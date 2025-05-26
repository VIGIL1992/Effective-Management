<?php

include(__DIR__ . '/functions/function.php');
include(__DIR__ . '/config/dbcon.php');

include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');




//create connection




?>



<div class="col-md-12">
    <div class="card">
        <form action="code.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Add Logo</h4>
            </div>
            <div class="card-content">




                <div class="row">
                    <label class="col-sm-2 ">Slider Image</label>

                    <div class="col-sm-10">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="assets/img/image_placeholder.jpg" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-rose btn-round btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="logo_image">
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                </div>


                

                <button type="submit" name="logo_add_btn" class="btn btn-fill btn-rose">Submit</button>


            </div>
        </form>
    </div>
</div>



<?php


include('includes/footer.php');
include('includes/scripts.php');
?>