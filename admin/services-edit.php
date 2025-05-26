<?php

include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
include_once('functions/function.php')

?>








<?php
$service_id = isset($_GET['id']) ? $_GET['id'] : 0; // Get the service ID from the URL parameter

$service_query = "SELECT * FROM services WHERE id = '$service_id'";
$service_result = mysqli_query($connection, $service_query);

if (mysqli_num_rows($service_result) > 0) {
    $data = mysqli_fetch_array($service_result);
    ?>

    <form method="POST" action="code.php" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="service_id" value="<?php echo $data['id']; ?>">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-text" data-background-color="rose">
                    <h4 class="card-title">Edit Service</h4>
                </div>
                <div class="card-content">

                    <!-- Service Image Upload -->
                    <div class="row">
                        <label class="col-sm-2 ">SERVICE Image</label>
                        <div class="col-sm-10">
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="<?php echo '../' . $data['service_image']; ?>" alt="...">
                                    <input type="hidden" name="old_service_image" value="<?= $data['service_image']; ?>">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="new_service_image">
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Icon Image Upload -->
                    <!-- <div class="row">
                        <label class="col-sm-2 ">Icon Image</label>
                        <div class="col-sm-10">
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="<?php echo '../' . $data['service_icon']; ?>" alt="...">
                                    <input type="hidden" name="old_service_icon" value="<?= $data['service_icon']; ?>">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="new_service_icon">
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Service Name -->
                    <div class="row">
                        <label class="col-sm-2 ">Service Title</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <input type="text" class="form-control" placeholder="Service Title" name="service_name" value="<?php echo $data['service_name']; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Service Name Arabic -->
                    <div class="row">
                        <label class="col-sm-2 ">Service Title Arabic</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <input type="text" class="form-control" placeholder="Service Title Arabic" name="service_name_arb" value="<?php echo $data['service_name_arb']; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Service Sub Heading -->
                    <div class="row">
                        <label class="col-sm-2 ">Service Sub Title</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <input type="text" class="form-control" placeholder="Service Sub Title" name="service_sub_heading" value="<?php echo $data['service_sub_heading']; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Service Sub Heading Arabic -->
                    <div class="row">
                        <label class="col-sm-2 ">Service Sub Title Arabic</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <input type="text" class="form-control" placeholder="Service Sub Title Arabic" name="service_sub_heading_arb" value="<?php echo $data['service_sub_heading_arb']; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Service Content -->
                    <div class="row">
                        <label class="col-sm-2 ">Service Description</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <textarea style="width: 100%; height:20%" name="service_content"><?php echo $data['service_content']; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Service Content Arabic -->
                    <div class="row">
                        <label class="col-sm-2 ">Service Description Arabic</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <textarea style="width: 100%; height:20%" name="service_content_arb"><?php echo $data['service_content_arb']; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Service Feature Checkbox -->
                    <div class="row">
                        <label class="col-sm-2">Feature</label>
                        <div class="col-sm-10">
                            <div class="checkbox checkbox-inline">
                                <label>
                                    <input type="checkbox" name="service_feature" <?php echo ($data['feature'] == 1) ? 'checked' : ''; ?>> Feature Service
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Update Button -->
                    <div class="col-md-12" style="display: flex; justify-content: center;">
                        <button type="submit" name="service_update_btn" class="btn btn-fill btn-rose">Update</button>
                    </div>

                </div>
            </div>
        </div>
    </form>

    <?php
} else {
    echo "Service not found.";
}
?>


<?php


include('includes/footer.php');
include('includes/scripts.php');
?>