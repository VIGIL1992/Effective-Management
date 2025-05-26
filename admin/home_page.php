<?php

include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
include_once('functions/function.php')
?>





<?php 
    $home_page = getByID("home_page", 1);
            
    if (mysqli_num_rows($home_page) > 0) {
        $data = mysqli_fetch_array($home_page);
        ?>

        <form method="POST" action="code.php" class="form-horizontal" enctype="multipart/form-data">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title">Home Page About Section</h4>
                    </div>
                    <div class="card-content">


                        

                        <div class="row">
                            <label class="col-sm-2 ">Section Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section Title" name="section1_header"value="<?= $data['section1_header'];?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">About Description</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>

                                    <textarea style="width: 100%; height:20%" name="section1_content" id="" value="<?= $data['section1_content'];?>"><?= $data['section1_content'];?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Card 1 Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Card 1 Title" name="card1_header" value="<?= $data['card1_header'];?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Card 1 Description</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <textarea style="width: 100%; height:20%" name="card1_content" value="<?= $data['card1_content'];?>"><?= $data['card1_content'];?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Card 2 Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section Title" name="card2_header"value="<?= $data['card2_header'];?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Card 2 Description</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <textarea style="width: 100%; height:20%" name="card2_content" id=""value="<?= $data['card2_content'];?>"><?= $data['card2_content'];?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Button Name</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Button1 Name" name="section1_button_name"value="<?= $data['section1_button_name'];?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <label class="col-sm-2 ">Button Link</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Button1 Link" name="section1_button_link"value="<?= $data['section1_button_link'];?>">
                                </div>
                            </div>
                        </div>
                       
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <div class="card">

                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title">Home Page Video Section</h4>
                    </div>
                    <div class="card-content">
                        
                        <div class="row">
                            <label class="col-sm-2 ">Video Background Image</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['video_bg_image'];?>' alt="...">
                                        <input type="hidden" name="old_video_bg_image" value="<?= $data['video_bg_image'];?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_video_bg_image">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2">Video</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new" id="old-video-container">
                                        <video id="old-video" height="400" controls>
                                        <source src="../<?= $data['video_url']; ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <input type="hidden" name="old_video_url" value="<?= $data['video_url']; ?>">
                                    </div>
                                    <!-- Our independent video preview -->
                                    <div class="mt-3">
                                        <video id="video-preview" height="400" controls style="display: none; border: 2px solid #ccc; border-radius: 4px;"></video>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists">
                                        <!-- default plugin file name preview (will show only name, not preview) -->
                                    </div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select video</span>
                                        <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_video_url" accept="video/*" id="new-video-file">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                                            <i class="fa fa-times"></i> Remove
                                        </a>
                                    </div>
                                </div>

                                
                            </div>
                        </div>

                        <script>
                            document.getElementById("new-video-file").addEventListener("change", function(event) {
                                var file = event.target.files[0];
                                var videoPreview = document.getElementById("video-preview");

                                if (file && file.type.startsWith("video/")) {
                                    var videoURL = URL.createObjectURL(file);

                                    // Show our independent video preview
                                    videoPreview.src = videoURL;
                                    videoPreview.style.display = "block";

                                    // Optional: Hide the old video
                                    document.getElementById("old-video").style.display = "none";
                                } else {
                                    videoPreview.style.display = "none";
                                }
                            });
                        </script>






                       
                    </div>

                </div>
            </div>



            <div class="col-md-12">
                <div class="card">

                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title">Why Choose Us Section</h4>
                    </div>
                    <div class="card-content">


                        <div class="row">
                            <label class="col-sm-2 ">Section 2 Sub Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section 2 Title" name="section2_subtittle"value="<?= $data['section2_subtittle'];?>">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Section 2 Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section 2 Title" name="section2_tittle"value="<?= $data['section2_tittle'];?>">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 1 -->
                        <div class="row">
                            <label class="col-sm-2 ">Section_2 Card_1 Image</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['section2_card1_img'];?>' alt="...">
                                        <input type="hidden" name="old_section2_card1_img" value="<?= $data['section2_card1_img'];?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_section2_card1_img">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 ">Section 2 Card1 Name</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section 2 Card1 Name" name="section2_card1_name"value="<?= $data['section2_card1_name'];?>">
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="row">
                            <label class="col-sm-2 ">Section_2 Card_2 Image</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['section2_card2_img'];?>' alt="...">
                                        <input type="hidden" name="old_section2_card2_img" value="<?= $data['section2_card2_img'];?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_section2_card2_img">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 ">Section_2 Card_2 Name</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section 2 Card 2 Name" name="section2_card2_name"value="<?= $data['section2_card2_name'];?>">
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="row">
                            <label class="col-sm-2 ">Section_2 Card_1 Image</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['section2_card3_img'];?>' alt="...">
                                        <input type="hidden" name="old_section2_card3_img" value="<?= $data['section2_card3_img'];?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_section2_card3_img">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 ">Section_2 Card_3 Name</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section 2 Card 3 Name" name="section2_card3_name"value="<?= $data['section2_card3_name'];?>">
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="row">
                            <label class="col-sm-2 ">Section_2 Card_4 Image</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['section2_card4_img'];?>' alt="...">
                                        <input type="hidden" name="old_section2_card4_img" value="<?= $data['section2_card4_img'];?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_section2_card4_img">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 ">Section 2 Card4 Name</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section 2 Card 4 Name" name="section2_card4_name"value="<?= $data['section2_card4_name'];?>">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>





            <div class="col-md-12">
                <div class="card">

                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title">Service Section</h4>
                    </div>
                    <div class="card-content">

                        <div class="row">
                            <label class="col-sm-2 ">Service Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section Title" name="section3_tittle"value="<?= $data['section3_tittle'];?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Service Sub Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder=" Sub Title" name="section3_subtittle"value="<?= $data['section3_subtittle'];?>">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>



            <div class="col-md-12">
                <div class="card">

                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title">CTA Section</h4>
                    </div>
                    <div class="card-content">

                        <div class="row">
                            <label class="col-sm-2 ">Background Image</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['home_cta_image'];?>' alt="...">
                                        <input type="hidden" name="old_home_cta_image" value="<?= $data['home_cta_image'];?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_home_cta_image">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">CTA Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section Title" name="home_cta_tittle"value="<?= $data['home_cta_tittle'];?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">CTA Description</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="placeholder" name="home_cta_content" value="<?= $data['home_cta_content'];?>">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">CTA Button Name</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="placeholder" name="home_cta_button_name" value="<?= $data['home_cta_button_name'];?>">                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <label class="col-sm-2 ">CTA Button Link</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="placeholder" name="home_cta_button_link" value="<?= $data['home_cta_button_link'];?>">
                                </div>
                            </div>
                        </div>


                       



                    </div>

                </div>
            </div>



            <div class="col-md-12" style="display: flex; justify-content: center;">
                <button type="submit" name="home_btn" class="btn btn-fill btn-rose">Update</button>
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