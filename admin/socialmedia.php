<?php

include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
include_once('functions/function.php')

?>


<?php
$social_media = getByID("social_media", 1);

if (mysqli_num_rows($social_media) > 0) {
    $data = mysqli_fetch_array($social_media);
?>
    <form method="POST" action="code.php" class="form-horizontal">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-text" data-background-color="rose">
                    <h4 class="card-title">Social Media Links</h4>
                </div>
                <div class="card-content">
                    <div class="row">
                        <label class="col-sm-2 ">Instagram</label>

                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" placeholder="" name="instagram" value="<?= $data['instagram']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 ">Facebook</label>

                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" placeholder="" name="facebook" value="<?= $data['facebook']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 ">Twitter</label>

                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>

                                <input type="text" class="form-control" placeholder="" name="twitter" value="<?= $data['twitter']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 ">Linkidin</label>

                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" placeholder="" name="linkedIn" value="<?= $data['linkedIn']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 ">Youtube</label>

                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input type="text" class="form-control" placeholder="" name="youtube" value="<?= $data['youtube']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" style="display: flex; justify-content: center;">
                        <button type="submit" name="social_media" class="btn btn-fill btn-rose">Add</button>
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