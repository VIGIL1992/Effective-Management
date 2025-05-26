<?php
    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/navbar.php');
    include_once('functions/function.php');
        
?>
 <?php 
    $contact_page = getByID("contact_page", 1);
            
    if (mysqli_num_rows($contact_page) > 0) {
        $data = mysqli_fetch_array($contact_page);
        ?>
        <form action="code.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
        
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title">Header Page</h4>
                    </div>
                    <div class="card-content">

                        <div class="row">
                            <label class="col-sm-2 ">Header Image</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="../<?= $data['header_image']; ?>" alt="...">
                                        <input type="hidden" name="old_header_image" value="<?= $data['header_image']; ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_header_image">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Header Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Slider Title" name="page_header" value="<?= $data['page_header']; ?>">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    
                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title">Contact Us</h4>
                    </div>
                
                    <div class="card-content">

                        <div class="row">
                            <label class="col-sm-2 ">Subtitle</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Subtitle" name="section1_subtitle" value="<?= $data['section1_subtitle']; ?>" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Section1 Title</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section1 Title" name="section1_title" value="<?= $data['section1_title']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Content</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Content" name="section1_content" value="<?= $data['section1_content']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Email</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?= $data['email']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Phone Number</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="<?= $data['phone']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Address</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Address" name="address" value="<?= $data['address']; ?>" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Map Details</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <textarea style="width: 100%; height:20%" name="map_url" id="" ><?= $data['map_url']; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Email for Form</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Email for Form" name="form_email" value="<?= $data['form_email']; ?>">
                                </div>
                            </div>
                        </div>
                    
                        <!-- <button type="submit" name="contact_btn" class="btn btn-fill btn-rose">Update</button> -->
                        
                    </div>
                </div>
            </div>

            <div class="col-md-12" style="display: flex; justify-content: center;">
                <button type="submit" name="contact_btn" class="btn btn-fill btn-rose">Update</button>
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