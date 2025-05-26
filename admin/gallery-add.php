<?php

include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
include_once('functions/function.php')

?>


    <form method="POST" action="code.php" class="form-horizontal" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header card-header-text" data-background-color="rose">
                    <h4 class="card-title">Add Gallery</h4>
                </div>
                <div class="card-content">


                    <div class="row">
                        <label class="col-sm-2 ">Slider Image</label>

                        <div class="col-sm-10">
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src='assets/img/image_placeholder.jpg' alt="...">
                                    
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image">
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="row">
                        <label class="col-sm-2 ">Image Name</label>

                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" placeholder="Image Name" name="image_name">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <label class="col-sm-2 ">Image Name Arabic</label>

                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" placeholder="Image Name Arabic" name="image_name_arb">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 ">Image Category</label>

                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" placeholder="Image Category" name="image_category">
                            </div>
                        </div>
                    </div>



                    <!-- <div class="row">
                        <label class="col-sm-2 ">Image Category Arabic</label>

                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" placeholder="Image Category Arabic" name="image_category_arb"value="<?php echo $data['image_category_arb'] ?>">
                            </div>
                        </div>
                    </div> -->




                    <div class="col-md-12" style="display: flex; justify-content: center;">
                        <button type="submit" name="gallery_add_btn" class="btn btn-fill btn-rose">Update</button>
                    </div>


                </div>

            </div>
        </div>
    </form>



?>



<?php


include('includes/footer.php');
include('includes/scripts.php');
?>