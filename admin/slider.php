<?php
include(__DIR__ . '/functions/function.php');
include(__DIR__ . '/config/dbcon.php');

include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');

?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <h5>Slider Table</h5>
        </div>

        <div class="card-content">
            <!-- Button Row -->
            <div class="d-flex justify-content-end mb-3">
                <a href="slider-add.php" type="button" class="btn btn-info btn-round addbtn">
                    Add New Slider <i class="material-icons">keyboard_arrow_right</i>
                </a>
            </div>

            <div class="table-responsive">
                <?php
                include(__DIR__ . '/config/dbcon.php');
                $sql = "SELECT * FROM slider";
                $result = mysqli_query($connection, $sql);
                ?>
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Image</th>
                            <th class="th-description">Title</th>
                            <th class="th-description">Sub Title</th>
                            <th class="text-right">Button Name</th>
                            <th class="text-right">Button1 Link</th>
                            <th class="text-right">Last Updated</th>
                
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count=0;
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                $count++;
                           
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><img src='../<?php echo $row['slider_image']; ?>' style='max-width: 200px; max-height: 200px;'></td>
                            <td><?php echo $row['slider_title']; ?></td>
                            <td><?php echo $row['slider_subtitle']; ?></td>
                            <td><?php echo $row['slider_btn_name']; ?></td>
                            <td><?php echo $row['slider_btn_link']; ?></td>
                            <td><?php echo $row['updated_at']; ?></td>
                            <td>
                                <a href="slider-edit.php?id=<?php echo $row['id']; ?>" type="button" rel="tooltip" class="btn btn-success">
                                    <i class="material-icons">edit</i>
                                </a>
                            
                           
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button class="btn btn-danger" type="submit" name="slider_delete_btn">
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
</div>




<?php


include('includes/footer.php');
include('includes/scripts.php');
?>