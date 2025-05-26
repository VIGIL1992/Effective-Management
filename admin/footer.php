<?php

 include('includes/header.php');
 include('includes/sidebar.php');
 include('includes/navbar.php');
 include_once('functions/function.php')
?>



<div class="col-md-12">
    <div class="card">
        <form method="POST" action="code.php" class="form-horizontal">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Footer Section</h4>
            </div>
            <?php 
                $footer = getByID("footer", 1);
                        
                if (mysqli_num_rows($footer) > 0) {
                    $data = mysqli_fetch_array($footer);
                    ?>
                    <div class="card-content">
                    
                        <div class="row">
                            <label class="col-sm-2 ">Section Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Footer Title" name="header_eng" value="<?= $data['header_eng']; ?>">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Footer Title Arabic</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Footer Title Arabic" name="header_arb" value="<?= $data['header_arb']; ?>">
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <label class="col-sm-2 "> Description</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                
                                    <textarea style="width: 100%; height:20%" name="content_eng" id=""><?= $data['content_eng']; ?></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 "> Description Arabic</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <textarea style="width: 100%; height:20%" name="content_arb" id=""><?= $data['content_arb']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        


                        
                    
                    

                        <button type="submit" class="btn btn-fill btn-rose" name="footer_btn">Update</button>

                    </div>
                    <?php 
                } else {
                        echo "Something Wrong";
                }
            ?>
        </form>
    </div>
</div>







<?php


include('includes/footer.php');
include('includes/scripts.php');
?>