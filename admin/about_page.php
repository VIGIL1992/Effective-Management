<?php

include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
include_once('functions/function.php')

?>



<?php
    $about = getByID("about_page", 1);

    if (mysqli_num_rows($about) > 0) {
        $data = mysqli_fetch_array($about);
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
                        <h4 class="card-title"> Section1</h4>
                    </div>
                    <div class="card-content">

                        <div class="row">
                            <label class="col-sm-2 ">About Image 1</label>
                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['section1_image1']; ?>' alt="..." >
                                        <input type="hidden" name="old_section1_image1" value="<?= $data['section1_image1']; ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_section1_image1">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">About Image 2</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['section1_image2']; ?>' alt="..." >
                                        <input type="hidden" name="old_section1_image2" value="<?= $data['section1_image2']; ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_section1_image2">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">About Image 3</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['section1_image3']; ?>' alt="..." >
                                        <input type="hidden" name="old_section1_image3" value="<?= $data['section1_image3']; ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_section1_image3">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Section Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section Title" name="section1_title" value="<?= $data['section1_title']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">About Sub Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section Sub Title" name="section1_subtitle" value="<?= $data['section1_subtitle']; ?>">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">About Quot</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="About Quot" name="section1_quot" value="<?= $data['section1_quot']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">About Description</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>

                                    <textarea style="width: 100%; height:20%" name="section1_content" id="" ><?= $data['section1_content']; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">About Image 4</label>
                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['section1_counter_image4']; ?>' alt="..." >
                                        <input type="hidden" name="old_section1_counter_image4" value="<?= $data['section1_counter_image4']; ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_section1_counter_image4">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Counter Number</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Counter Number" name="section1_counter_num" value="<?= $data['section1_counter_num']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Counter Tittle</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Counter Tittle" name="section1_counter_title" value="<?= $data['section1_counter_title']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Counter Content</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Counter Content" name="section1_counter_content" value="<?= $data['section1_counter_content']; ?>">
                                </div>
                            </div>
                        </div>

                       

                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <div class="card">

                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title"> Card Section</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <label class="col-sm-2 ">Card 1 Image</label>
                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['section2_card1_image']; ?>' alt="...">
                                        <input type="hidden" name="old_section2_card1_image" value="<?= $data['section2_card1_image']; ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_section2_card1_image">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Card 1 Title</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Card 1 Title" name="section2_card1_title" value="<?= $data['section2_card1_title']; ?>">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Card 1 Content</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <textarea style="width: 100%; height:20%" name="section2_card1_content" id="" ><?= $data['section2_card1_content']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <label class="col-sm-2 ">Card 2 Image</label>
                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['section2_card2_image']; ?>' alt="...">
                                        <input type="hidden" name="old_section2_card2_image" value="<?= $data['section2_card2_image']; ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_section2_card2_image">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Card 2 Title</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Card 2 Title" name="section2_card2_title" value="<?= $data['section2_card2_title']; ?>">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Card 2 Content</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <textarea style="width: 100%; height:20%" name="section2_card2_content" id="" ><?= $data['section2_card2_content']; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Card 3 Image</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src='../<?= $data['section2_card3_image']; ?>' alt="...">
                                        <input type="hidden" name="old_section2_card3_image" value="<?= $data['section2_card3_image']; ?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_section2_card3_image">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Card 3 Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Card 3 Title" name="section2_card3_title" value="<?= $data['section2_card3_title']; ?>">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Card 3 Content</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <textarea style="width: 100%; height:20%" name="section2_card3_content" id="" ><?= $data['section2_card3_content']; ?></textarea>
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
                                        <img src='../<?= $data['cta_image'];?>' alt="...">
                                        <input type="hidden" name="old_cta_image" value="<?= $data['cta_image'];?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="new_cta_image">
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
                                    <input type="text" class="form-control" placeholder="CTA Title" name="cta_title"value="<?= $data['cta_title'];?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">CTA Description</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="CTA Description" name="cta_content" value="<?= $data['cta_content'];?>">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">CTA Button Name</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="CTA Button Name" name="cta_button_name" value="<?= $data['cta_button_name'];?>">                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <label class="col-sm-2 ">CTA Button Link</label>
                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="CTA Button Link" name="cta_button_link" value="<?= $data['cta_button_link'];?>">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <div class="col-md-12" style="display: flex; justify-content: center;">
                <button type="submit" name="about_btn" class="btn btn-fill btn-rose">Update</button>
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