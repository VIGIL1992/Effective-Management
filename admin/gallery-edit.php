<?php

include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
include_once('functions/function.php')

?>

<?php
    $image_id = isset($_GET['id']) ? $_GET['id'] : 0; // Get the image ID from the URL parameter

    $image_query = "SELECT * FROM gallery WHERE id = '$image_id'";
    $image_result = mysqli_query($connection, $image_query);

    if (mysqli_num_rows($image_result) > 0) {
        $data = mysqli_fetch_array($image_result);
        ?>
        <form method="POST" action="code.php" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="image_id" value="<?php echo $data['id'] ?>">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title">Edit Gallery</h4>
                    </div>
                    <div class="card-content">


                        <div class="row">
                            <label class="col-sm-2 ">Slider Image</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?php echo $data['image'] ?>' alt="...">
                                        <input type="hidden" name="old_image" value="<?php echo $data['image'] ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_image">
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
                                    <input type="text" class="form-control" placeholder="Image Name" name="image_name"value="<?php echo $data['image_name'] ?>">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Image Name Arabic</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Image Name Arabic" name="image_name_arb"value="<?php echo $data['image_name_arb'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 ">Image Category</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Image Category" name="image_category"value="<?php echo $data['image_category'] ?>">
                                </div>
                            </div>
                        </div>



                         <div class="row">
                            <label class="col-sm-2 ">Image Category Arabic</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Image Category Arabic" name="image_category_arb"value="<?php echo $data['image_category_arb'] ?>">
                                </div>
                            </div>
                        </div> 




                        <div class="col-md-12" style="display: flex; justify-content: center;">
                            <button type="submit" name="image_update_btn" class="btn btn-fill btn-rose">Update</button>
                        </div>


                    </div>

                </div>
            </div>
        </form>
        <?php
    } else {
        echo "Something Wrong";
    }


?>



<?php


include('includes/footer.php');
include('includes/scripts.php');
?>