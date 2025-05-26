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
                        <h4 class="card-title">Add New Services</h4>
                    </div>
                    <div class="card-content">

                        <div class="row">
                            <label class="col-sm-2 ">SERVICES Image</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="assets/img/image_placeholder.jpg" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="service_image" >
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row">
                            <label class="col-sm-2 ">Icon Image</label>

                            <div class="col-sm-10">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="assets/img/image_placeholder.jpg" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="icon_image">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                            <label class="col-sm-2 ">Services Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Services Title" name="service_name" >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Services Title Arabic</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Services Title Arabic" name="service_name_arb" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 ">Services Sub Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Services Sub Title" name="service_sub_heading" >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Services Sub Title Arabic</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Services Sub Title Arabic" name="service_sub_heading_arb" >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Services Description</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>

                                    <textarea style="width: 100%; height:20%" name="service_content" id="" value=""></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Services Description Arabic</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <textarea style="width: 100%; height:20%" name="service_content_arb" id="" value=""></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 label-on-left">Inline checkboxes</label>
                            <div class="col-sm-10">
                                <div class="checkbox checkbox-inline">
                                    <label>
                                        <input type="checkbox" name="service_feature" >
                                    </label>
                                </div>
                                
                            </div>
                        </div>



                        <div class="col-md-12" style="display: flex; justify-content: center;">
                            <button type="submit" name="service_add_btn" class="btn btn-fill btn-rose">Add</button>
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