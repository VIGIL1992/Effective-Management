<?php

include(__DIR__ . '/functions/function.php');
include(__DIR__ . '/config/dbcon.php');

include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');





?>



<div class="col-md-12">
    <div class="card">


        <?php
        // Check if an ID is set in the URL
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Fetch the slider data based on the ID
            $query = "SELECT * FROM slider WHERE id = $id";
            $result = mysqli_query($connection, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                // Fetch the data as an associative array
                $slider_data = mysqli_fetch_assoc($result);
            } else {
                echo "No record found for ID: $id";
            }
        } else {
            echo "ID not provided in the URL.";
        }
        ?>
        <form action="code.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="slider_id" value="<?php echo $slider_data['id']; ?>">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Edit Slider</h4>
            </div>
            <div class="card-content">

                <div class="row">
                    <label class="col-sm-2 ">Slider Image</label>

                    <div class="col-sm-10">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src='../<?php echo $slider_data['slider_image'] ?>' alt="...">
                                <input type="hidden" name="old_slider_image" value="<?php echo $slider_data['slider_image'] ?>">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-rose btn-round btn-file">
                                    <span class="fileinput-new">Change image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="new_slider_image">
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <label class="col-sm-2 ">Slider Title</label>

                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input type="text" class="form-control" placeholder="Slider Title" name="slider_title" value="<?php echo $slider_data['slider_title']; ?>">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <label class="col-sm-2 ">Slider Sub Title</label>

                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input type="text" class="form-control" placeholder="Slider Sub Title" name="slider_subtitle" value="<?php echo $slider_data['slider_subtitle']; ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 ">Slider Button Name</label>

                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input type="text" class="form-control" placeholder="Slider Button Name" name="slider_btn_name" value="<?php echo $slider_data['slider_btn_name']; ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 ">Slider Button Link</label>

                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input type="text" class="form-control" placeholder="Slider Service Button Link" name="slider_btn_link" value="<?php echo $slider_data['slider_btn_link']; ?>">
                        </div>
                    </div>
                </div>
              




                <div class="col-md-12" style="display: flex; justify-content: center;">
                    <button type="submit" name="slider_edit_btn" class="btn btn-fill btn-rose">Update</button>
                </div>


            </div>
        </form>



    </div>
</div>




<?php

include('includes/footer.php');
include('includes/scripts.php');
?>