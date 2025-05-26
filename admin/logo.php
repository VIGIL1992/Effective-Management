<?php

include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
include_once('functions/function.php')

?>

<?php
    $logo = getByID("logo", 1);

    if (mysqli_num_rows($logo) > 0) {
        $data = mysqli_fetch_array($logo);
        ?>
        <form method="POST" action="code.php" class="form-horizontal" enctype="multipart/form-data">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title">Logo Section</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 ">favicon</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?php echo $data['favicon'] ?>' alt="...">
                                        <input type="hidden" name="old_favicon" value="<?php echo $data['favicon'] ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_favicon">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Logo White</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?php echo $data['logo_white'] ?>' alt="...">
                                        <input type="hidden" name="old_logo_white" value="<?php echo $data['logo_white'] ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_logo_white">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Logo Color</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?php echo $data['logo_color'] ?>' alt="...">
                                        <input type="hidden" name="old_logo_color" value="<?php echo $data['logo_color'] ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_logo_color">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-12" style="display: flex; justify-content: center;">
                            <button type="submit" name="logo_btn" class="btn btn-fill btn-rose">Update</button>
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