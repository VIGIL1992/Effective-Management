<?php

include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
include_once('functions/function.php')
?>

<?php
    $service_page = getByID("service_page", 1);

    if (mysqli_num_rows($service_page) > 0) {
        $data = mysqli_fetch_array($service_page);
        ?>

        <form method="POST" action="code.php" class="form-horizontal" enctype="multipart/form-data">

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
                                        <img src="../<?php echo $data['header_image'] ?>" alt="..." >
                                        <input type="hidden" name="old_header_image" value="<?php echo $data['header_image'] ?>">
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
                                    <input type="text" class="form-control" placeholder="Slider Title" name="page_header" value="<?php echo $data['page_header'] ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 ">Header Title Arabic </label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Slider Title" name="page_header_arb" value="<?php echo $data['page_header_arb'] ?>">
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
                            <label class="col-sm-2 ">Section Title</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section Title" name="section1_header" value="<?php echo $data['section1_header'] ?>">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Section Title Arabic</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" placeholder="Section Title Arabic" name="section1_header_arb" value="<?php echo $data['section1_header_arb'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 ">Services Description1</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>

                                    <textarea style="width: 100%; height:20%" name="section1_content" id="" value=""><?php echo $data['section1_content'] ?></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Services Description1 Arabic</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <textarea style="width: 100%; height:20%" name="section1_content_arb" id="" value=""><?php echo $data['section1_content_arb'] ?></textarea>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>
            </div>




            <div class="col-md-12">
                <div class="card">

                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title">Section2</h4>
                    </div>
                    <div class="card-content">





                        <div class="row">
                            <label class="col-sm-2 ">Services Description2</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>

                                    <textarea style="width: 100%; height:20%" name="section2_content" id="" value=""><?php echo $data['section2_content'] ?></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <label class="col-sm-2 ">Services Description2 Arabic</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <textarea style="width: 100%; height:20%" name="section2_content_arb" id="" value=""><?php echo $data['section2_content_arb'] ?></textarea>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>
            </div>


            <div class="col-md-12" style="display: flex; justify-content: center;">
                <button type="submit" class="btn btn-fill btn-rose" name="services_btn">Update</button>
            </div>

        </form>


        <?php
    } else {
        echo "Something Wrong";
    }


?>








<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <!-- <i class="material-icons">assignment</i> -->
            <h5>Services Table</h5>
        </div>

        <div class="card-content">
            <td colspan="2" class="text-right">
                <a href="services-add.php" type="button" class="btn btn-info btn-round addbtn">Add New Service <i class="material-icons">keyboard_arrow_right</i></a>
            </td>
            <div class="table-responsive">

                <?php
                include(__DIR__ . '/config/dbcon.php');
                $sql = "SELECT * FROM services";
                $result = mysqli_query($connection, $sql);
                ?>
                <table class="table table-shopping">
                    <thead>
                        <tr>
                           
                            <th>Sl No</th>
                            <!-- <th class="text-right"> Icon Image</th> -->
                            <th class="text-right">Services Image</th>
                            <th>Services Title</th>
                            <th>Services Arabic</th>
                            <th class="th-description">Sub Title</th>
                            <th class="th-description">Sub Title Arabic</th>
                            <th class="text-right">Description</th>
                            <th class="text-right">Description Arabic</th>
                            <!-- <th class="text-right">Feature</th> -->
                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><img src='../<?php echo $row['service_image']; ?>' style='max-width: 200px; max-height: 200px;'></td>
                                    <!-- <td><img src='../<?php echo $row['service_icon']; ?>' style='max-width: 200px; max-height: 200px;'></td> -->
                                    <td><?php echo $row['service_name']; ?></td>
                                    <td><?php echo $row['service_name_arb']; ?></td>
                                    <td><?php echo $row['service_sub_heading']; ?></td>
                                    <td><?php echo $row['service_sub_heading_arb']; ?></td>
                                    <td><?php echo $row['service_content']; ?></td>
                                    <td><?php echo $row['service_content_arb']; ?></td>
                                   
                                    
                                    <td>
                                        <a href="services-edit.php?id=<?php echo $row['id']; ?>" type="button" rel="tooltip" class="btn btn-success">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    
                                   
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            <button class="btn btn-danger" type="submit" name="service_delete_btn">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>



                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='18'>No record found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>






    <?php


    include('includes/footer.php');
    include('includes/scripts.php');
    ?>