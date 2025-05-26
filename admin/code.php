<?php
session_start();


include_once(__DIR__ . '/functions/function.php');


if (!$connection) {
    die("connection Failed: " . mysqli_connect_error());
}

//Logo Start
    // if (isset($_POST['logo_btn'])) {
    //     $new_favicon = $_FILES['new_favicon']['name'];
    //     $new_logo_white = $_FILES['new_logo_white']['name'];
    //     $new_logo_color = $_FILES['new_logo_color']['name'];

    //     $old_favicon = $_POST['old_favicon'];
    //     $old_logo_white = $_POST['old_logo_white'];
    //     $old_logo_color = $_POST['old_logo_color'];

    if (isset($_POST['logo_btn'])) {
        $old_images = [
            'favicon' => $_POST['old_favicon'],
            'logo_white' => $_POST['old_logo_white'],
            'logo_color' => $_POST['old_logo_color'],
            
        ];

        $new_images = [
            'favicon' => $_FILES['new_favicon']['name'],
            'logo_white' => $_FILES['new_logo_white']['name'],
            'logo_color' => $_FILES['new_logo_color']['name'],
            
        ];

        $path = "assets/img/";

        // Construct file paths with extension
        $image_paths = [];
        foreach ($new_images as $key => $new_image) {
            if ($new_image != "") {
                $ext = pathinfo($new_image, PATHINFO_EXTENSION);
                $image_paths[$key] = $path . '/' . $key . '.' . $ext;
            } else {
                $image_paths[$key] = $old_images[$key];
            }
        }

        $update_logo_query = "UPDATE logo SET 
            favicon = '{$image_paths['favicon']}',
            logo_white = '{$image_paths['logo_white']}',
            logo_color = '{$image_paths['logo_color']}'
            WHERE id = '1'";

        $update_logo_query_run = $connection->query($update_logo_query);

        if ($update_logo_query_run) {
            foreach ($new_images as $key => $new_image) {
                if ($new_image != "") {
                    // Check and remove old file if exists
                    if (file_exists("../" . $old_images[$key])) {
                        unlink("../" . $old_images[$key]);
                    }
                    // Move uploaded file to target location
                    if (move_uploaded_file($_FILES['new_' . $key]['tmp_name'], '../' . $image_paths[$key])) {
                        echo "$key moved successfully to " . $image_paths[$key] . "<br>";
                    } else {
                        echo "Failed to move $key. Error: " . $_FILES['new_' . $key]['error'] . "<br>";
                    }
                }
            }
            redirect("logo.php", "Updated Successfully");
        } else {
            redirect( "logo.php", "Update Failed");
        }
    }

//Logo End

//Slider Start

    if (isset($_POST['slider_add'])) {
        
        $slider_title = mysqli_real_escape_string($connection, $_POST['slider_title']);
        $slider_subtitle = mysqli_real_escape_string($connection, $_POST['slider_subtitle']);
        $slider_btn_name = mysqli_real_escape_string($connection, $_POST['slider_btn_name']);
        $slider_btn_link = mysqli_real_escape_string($connection, $_POST['slider_btn_link']);
        
        $slider_image = $_FILES['slider_image']['name'];

        // Images Directory
        $path = "assets/img/hero";
    
        // Handle the image file
        // $image_ext = pathinfo($_FILES['slider_image']['name'], PATHINFO_EXTENSION);
        // $filename = $path . '/' . strtolower(str_replace(' ', '_', $slider_title)) . '.' . $image_ext;
        
        $slider_image_filename = $path.'/'.basename($slider_image);


        // Insert data into the database first
        $add_slider_query =  "INSERT INTO slider (slider_title, slider_subtitle, slider_btn_name, slider_btn_link, slider_image) 
                    VALUES ('$slider_title', '$slider_subtitle', '$slider_btn_name',  '$slider_btn_link', '$slider_image_filename')";

        $add_slider_query_run = mysqli_query($connection, $add_slider_query);



        if ( $add_slider_query_run) {
            // Handle Service Image Upload
            if ($_FILES['slider_image']['name'] != "") {
                move_uploaded_file($_FILES['slider_image']['tmp_name'], '../' . $slider_image_filename);

            }else {
                echo "Failed to move header image. Error: " . $_FILES['slider_image']['error'];
            }

        
            redirect("slider.php", "Slider added successfully.");
        } else {
            redirect( "slider-add.php", "Failed to add slider.");
        }
    }




    //  Update Slider
    // Check if the form to edit the slider is submitted


    if (isset($_POST['slider_edit_btn'])) {
        $slider_id = $_POST['slider_id']; 
         
        $slider_title = mysqli_real_escape_string($connection, $_POST['slider_title']);
        $slider_subtitle = mysqli_real_escape_string($connection, $_POST['slider_subtitle']);
        $slider_btn_name = mysqli_real_escape_string($connection, $_POST['slider_btn_name']);
        $slider_btn_link = mysqli_real_escape_string($connection, $_POST['slider_btn_link']);
        
        $old_slider_image = $_POST['old_slider_image'];
        $new_slider_image = $_FILES['new_slider_image']['name'];

        
        // Images Directory
        $path = "assets/img/hero";

        // $new_slider_image_ext = pathinfo($new_slider_image, PATHINFO_EXTENSION);
        // $new_slider_image_filename = $path.'/'.$slider_title.'.'.$new_slider_image_ext;
        $new_slider_image_filename = $path.'/'.basename($new_slider_image);

        if ($new_slider_image != "") {
            $slider_image_update_image = $new_slider_image_filename;
        }
        else {
            $slider_image_update_image = $old_slider_image;
        }

         
        
        $update_slider_query = "UPDATE slider SET 
            slider_title = '$slider_title',
            slider_subtitle = '$slider_subtitle',
            slider_btn_name = '$slider_btn_name',
            slider_btn_link = '$slider_btn_link',
            slider_image = '$slider_image_update_image'
            WHERE id = '$slider_id'";

        $update_slider_query_run = $connection->query($update_slider_query);

        if ($update_slider_query_run) {
            if($_FILES['new_slider_image']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if(file_exists("../".$old_slider_image)){
                    // echo "Old image exists!";
                    unlink("../".$old_slider_image);
                }

                move_uploaded_file($_FILES['new_slider_image']['tmp_name'], '../'.$new_slider_image_filename);
                
            }
            redirect("slider.php", "Updated Successfully");
        } else {
            redirect("slider.php", "Update Failed");
        }
    }

    //  Update Slider



    // slider delete Start

        if (isset($_POST['slider_delete_btn'])) {
            $id = $_POST['delete_id'];

            // Step 1: Get the image filename before deleting the record
            $get_image_query = "SELECT slider_image FROM slider WHERE id='$id'";
            $get_image_query_run = mysqli_query($connection, $get_image_query);

            if (mysqli_num_rows($get_image_query_run) > 0) {
                $row = mysqli_fetch_assoc($get_image_query_run);
                $image_path = '../' . $row['slider_image']; 

                // Step 2: Delete the image file
                if (file_exists($image_path)) {
                    unlink($image_path);
                }

                // Step 3: Now delete the record from the database
                $slider_delete_query = "DELETE FROM slider WHERE id='$id'";
                $slider_delete_query_run = mysqli_query($connection, $slider_delete_query);

                if ($slider_delete_query_run) {
                    $_SESSION['success'] = "Slider is Deleted";
                } else {
                    $_SESSION['success'] = "Slider Not Deleted";
                }
            } else {
                $_SESSION['success'] = "Slider Not Found";
            }

            header("Location: slider.php");
        }


    // slider delete End

//Slider End

//Home Page Start
    
    if(isset($_POST['home_btn'])){
        

        $section1_header = mysqli_real_escape_string($connection, $_POST['section1_header']);
        $section1_content = mysqli_real_escape_string($connection, $_POST['section1_content']);

        $card1_header = mysqli_real_escape_string($connection, $_POST['card1_header']);
        $card1_content = mysqli_real_escape_string($connection, $_POST['card1_content']);

        $card2_header = mysqli_real_escape_string($connection, $_POST['card2_header']);
        $card2_content = mysqli_real_escape_string($connection, $_POST['card2_content']);

        $section1_button_name = mysqli_real_escape_string($connection, $_POST['section1_button_name']);
        $section1_button_link = mysqli_real_escape_string($connection, $_POST['section1_button_link']);

       

        $section2_tittle = mysqli_real_escape_string($connection, $_POST['section2_tittle']);
        $section2_subtittle = mysqli_real_escape_string($connection, $_POST['section2_subtittle']);

        $section2_card1_name = mysqli_real_escape_string($connection, $_POST['section2_card1_name']);
        $section2_card2_name = mysqli_real_escape_string($connection, $_POST['section2_card2_name']);
        $section2_card3_name = mysqli_real_escape_string($connection, $_POST['section2_card3_name']);
        $section2_card4_name = mysqli_real_escape_string($connection, $_POST['section2_card4_name']);

        $home_cta_tittle = mysqli_real_escape_string($connection, $_POST['home_cta_tittle']);
        $home_cta_content = mysqli_real_escape_string($connection, $_POST['home_cta_content']);
        $home_cta_button_name = mysqli_real_escape_string($connection, $_POST['home_cta_button_name']);
        $home_cta_button_link = mysqli_real_escape_string($connection, $_POST['home_cta_button_link']);

        $section3_tittle = mysqli_real_escape_string($connection, $_POST['section3_tittle']);
        $section3_subtittle = mysqli_real_escape_string($connection, $_POST['section3_subtittle']);
       
        
        // video_bg_image
        $old_video_bg_image = $_POST['old_video_bg_image'];
        $new_video_bg_image = $_FILES['new_video_bg_image']['name'];
        // video_url
        $old_video_url = $_POST['old_video_url'];
        $new_video_url = $_FILES['new_video_url']['name'];
        //section2_card1_img
        $old_section2_card1_img = $_POST['old_section2_card1_img'];
        $new_section2_card1_img = $_FILES['new_section2_card1_img']['name'];
        //section2_card2_img
        $old_section2_card2_img = $_POST['old_section2_card2_img'];
        $new_section2_card2_img = $_FILES['new_section2_card2_img']['name'];
        //section2_card3_img
        $old_section2_card3_img = $_POST['old_section2_card3_img'];
        $new_section2_card3_img = $_FILES['new_section2_card3_img']['name'];
        //section2_card4_img
        $old_section2_card4_img = $_POST['old_section2_card4_img'];
        $new_section2_card4_img = $_FILES['new_section2_card4_img']['name'];
        //home_cta_image
        $old_home_cta_image = $_POST['old_home_cta_image'];
        $new_home_cta_image = $_FILES['new_home_cta_image']['name'];

        $path = "assets/images/home";
        $video_path = "assets/videos/";
        // -----------------------------

        
        // --------------------------------
        // video_bg_image
        if ($new_video_bg_image != "") {
            $new_video_bg_image_ext = pathinfo($new_video_bg_image, PATHINFO_EXTENSION);
            $video_bg_image = $path.'/video_bg_image'.'.'.$new_video_bg_image_ext;
        }
        else {
            $video_bg_image = $old_video_bg_image;
        }
        // video_url
        if ($new_video_url != "") {
            $new_video_url_ext = pathinfo($new_video_url, PATHINFO_EXTENSION);
            $video_url = $path.'/homePage_video'.'.'.$new_video_url_ext;
        }
        else {
            $video_url = $old_video_url;
        }

        // section2_card1_img
        if ($new_section2_card1_img != "") {
            $new_section2_card1_img_ext = pathinfo($new_section2_card1_img, PATHINFO_EXTENSION);
            $section2_card1_img = $path.'/section2_card1_img'.'.'.$new_section2_card1_img_ext;
        }
        else {
            $section2_card1_img = $old_section2_card1_img;
        }

        
        // section2_card2_img
        if ($new_section2_card2_img != "") {
            $new_section2_card2_img_ext = pathinfo($new_section2_card2_img, PATHINFO_EXTENSION);
            $section2_card2_img = $path.'/section2_card2_img'.'.'.$new_section2_card2_img_ext;
        }
        else {
            $section2_card2_img = $old_section2_card2_img;
        }

         // section2_card3_img
        if ($new_section2_card3_img != "") {
            $new_section2_card3_img_ext = pathinfo($new_section2_card3_img, PATHINFO_EXTENSION);
            $section2_card3_img = $path.'/section2_card3_img'.'.'.$new_section2_card3_img_ext;
        }
        else {
            $section2_card3_img = $old_section2_card3_img;
        }

         // section2_card4_img
        if ($new_section2_card4_img != "") {
            $new_section2_card4_img_ext = pathinfo($new_section2_card4_img, PATHINFO_EXTENSION);
            $section2_card4_img = $path.'/section2_card4_img'.'.'.$new_section2_card4_img_ext;
        }
        else {
            $section2_card4_img = $old_section2_card4_img;
        }

        // home_cta_image
        if ($new_home_cta_image != "") {
            $new_home_cta_image_ext = pathinfo($new_home_cta_image, PATHINFO_EXTENSION);
            $home_cta_image = $path.'/section2_card1_img'.'.'.$new_home_cta_image_ext;
        }
        else {
            $home_cta_image = $old_home_cta_image;
        }

        $update_home_page_query = "UPDATE home_page SET 
            section1_header = '$section1_header',
            section1_content = '$section1_content',
            card1_header = '$card1_header',
            card1_content = '$card1_content',
            card2_header = '$card2_header',
            card2_content = '$card2_content',
            section1_button_name = '$section1_button_name',
            section1_button_link = '$section1_button_link',

            video_bg_image = '$video_bg_image',
            video_url = '$video_url',

            section2_tittle = '$section2_tittle',
            section2_subtittle = '$section2_subtittle',
            section2_card1_img = '$section2_card1_img',
            section2_card1_name = '$section2_card1_name',
            section2_card2_img = '$section2_card2_img',
            section2_card2_name = '$section2_card2_name',

            section2_card3_img = '$section2_card3_img',
            section2_card3_name = '$section2_card3_name',
            section2_card4_img = '$section2_card4_img',
            section2_card4_name = '$section2_card4_name',

            home_cta_image = '$home_cta_image',
            home_cta_tittle = '$home_cta_tittle',
            home_cta_content = '$home_cta_content',
            home_cta_button_name = '$home_cta_button_name',
            home_cta_button_link = '$home_cta_button_link',

            section3_tittle = '$section3_tittle',
            section3_subtittle = '$section3_subtittle'

            WHERE id = '1' ";

        $update_home_page_query_run = $connection->query($update_home_page_query);
        
      
        if ($update_home_page_query_run) {
            // video_bg_image
            if($_FILES['new_video_bg_image']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if (file_exists("../" . $old_video_bg_image)) {
                    unlink("../" . $old_video_bg_image);
                }
                if (move_uploaded_file($_FILES['new_video_bg_image']['tmp_name'], '../' . $video_bg_image)) {
                    echo " image moved successfully to " . $video_bg_image;
                } else {
                    echo "Failed to move image. Error: " . $_FILES['new_video_bg_image']['error'];
                }
                
            }
            // video_url
            if($_FILES['new_video_url']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if (file_exists("../" . $old_video_url)) {
                    unlink("../" . $old_video_url);
                }
                if (move_uploaded_file($_FILES['new_video_url']['tmp_name'], '../' . $video_url)) {
                    echo " image moved successfully to " . $section1_bg_image_update_image;
                } else {
                    echo "Failed to move image. Error: " . $_FILES['new_video_url']['error'];
                }
                
            }
            // section2_card1_img
            if($_FILES['new_section2_card1_img']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if (file_exists("../" . $old_section2_card1_img)) {
                    unlink("../" . $old_section2_card1_img);
                }
                if (move_uploaded_file($_FILES['new_section2_card1_img']['tmp_name'], '../' . $section2_card1_img)) {
                    echo " image moved successfully to " . $section2_card1_img;
                } else {
                    echo "Failed to move image. Error: " . $_FILES['new_section2_card1_img']['error'];
                }
                
            }
            // section2_card2_img
            if($_FILES['new_section2_card2_img']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if (file_exists("../" . $old_section2_card2_img)) {
                    unlink("../" . $old_section2_card2_img);
                }
                if (move_uploaded_file($_FILES['new_section2_card2_img']['tmp_name'], '../' . $section2_card2_img)) {
                    echo " image moved successfully to " . $section2_card2_img;
                } else {
                    echo "Failed to move image. Error: " . $_FILES['new_section2_card2_img']['error'];
                }
                
            }
            // section2_card3_img
            if($_FILES['new_section2_card3_img']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if (file_exists("../" . $old_section2_card3_img)) {
                    unlink("../" . $old_section2_card3_img);
                }
                if (move_uploaded_file($_FILES['new_section2_card3_img']['tmp_name'], '../' . $section2_card3_img)) {
                    echo " image moved successfully to " . $section2_card3_img;
                } else {
                    echo "Failed to move image. Error: " . $_FILES['new_section2_card3_img']['error'];
                }
                
            }
            // section2_card4_img
            if($_FILES['new_section2_card4_img']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if (file_exists("../" . $old_section2_card4_img)) {
                    unlink("../" . $old_section2_card4_img);
                }
                if (move_uploaded_file($_FILES['new_section2_card4_img']['tmp_name'], '../' . $section2_card4_img)) {
                    echo " image moved successfully to " . $section2_card4_img;
                } else {
                    echo "Failed to move image. Error: " . $_FILES['new_section2_card4_img']['error'];
                }
                
            }
            // home_cta_image
            if($_FILES['new_home_cta_image']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if (file_exists("../" . $old_home_cta_image)) {
                    unlink("../" . $old_home_cta_image);
                }
                if (move_uploaded_file($_FILES['new_home_cta_image']['tmp_name'], '../' . $home_cta_image)) {
                    echo " image moved successfully to " . $home_cta_image;
                } else {
                    echo "Failed to move image. Error: " . $_FILES['new_home_cta_image']['error'];
                }
                
            }
            


            redirect("home_page.php", "Updated Successfully");
        } else {
            redirect("home_page.php", "Update Failed");
        }

    }
//Home Page End

//About Page Start

    if(isset($_POST['about_btn'])){
        // echo "hi";exit;
        $page_header = mysqli_real_escape_string($connection, $_POST['page_header']);
        
        $section1_title = mysqli_real_escape_string($connection, $_POST['section1_title']);
        $section1_subtitle = mysqli_real_escape_string($connection, $_POST['section1_subtitle']);
        $section1_quot = mysqli_real_escape_string($connection, $_POST['section1_quot']);
        $section1_content = mysqli_real_escape_string($connection, $_POST['section1_content']);

        $section1_counter_num = mysqli_real_escape_string($connection, $_POST['section1_counter_num']);
        $section1_counter_title = mysqli_real_escape_string($connection, $_POST['section1_counter_title']);
        $section1_counter_content = mysqli_real_escape_string($connection, $_POST['section1_counter_content']);

        $section2_card1_title = mysqli_real_escape_string($connection, $_POST['section2_card1_title']);
        $section2_card1_content = mysqli_real_escape_string($connection, $_POST['section2_card1_content']);

        $section2_card2_title = mysqli_real_escape_string($connection, $_POST['section2_card2_title']);
        $section2_card2_content = mysqli_real_escape_string($connection, $_POST['section2_card2_content']);

        $section2_card3_title = mysqli_real_escape_string($connection, $_POST['section2_card3_title']);
        $section2_card3_content = mysqli_real_escape_string($connection, $_POST['section2_card3_content']);

        $cta_title = mysqli_real_escape_string($connection, $_POST['cta_title']);
        $cta_content = mysqli_real_escape_string($connection, $_POST['cta_content']);

        $cta_button_name = mysqli_real_escape_string($connection, $_POST['cta_button_name']);
        $cta_button_link = mysqli_real_escape_string($connection, $_POST['cta_button_link']);
    
       
        // -------------------
        $path = "assets/images/about";
        // Define and set old and new images
        $old_images = [
            'header_image' => $_POST['old_header_image'],
            'section1_image1' => $_POST['old_section1_image1'],
            'section1_image2' => $_POST['old_section1_image2'],
            'section1_image3' => $_POST['old_section1_image3'],
            'section1_counter_image4' => $_POST['old_section1_counter_image4'],

            'section2_card1_image' => $_POST['old_section2_card1_image'],
            'section2_card2_image' => $_POST['old_section2_card2_image'],
            'section2_card3_image' => $_POST['old_section2_card3_image'],

            'cta_image' => $_POST['old_cta_image']

        ];

        $new_images = [
            'header_image' => $_FILES['new_header_image']['name'],
            'section1_image1' => $_FILES['new_section1_image1']['name'],
            'section1_image2' => $_FILES['new_section1_image2']['name'],
            'section1_image3' => $_FILES['new_section1_image3']['name'],
            'section1_counter_image4' => $_FILES['new_section1_counter_image4']['name'],

            'section2_card1_image' => $_FILES['new_section2_card1_image']['name'],
            'section2_card2_image' => $_FILES['new_section2_card2_image']['name'],
            'section2_card3_image' => $_FILES['new_section2_card3_image']['name'],

            'cta_image' => $_FILES['new_cta_image']['name']
        ];
        
        // Construct file paths with extension
        $image_paths = [];
        foreach ($new_images as $key => $new_image) {
            if ($new_image != "") {
                $ext = pathinfo($new_image, PATHINFO_EXTENSION);
                $image_paths[$key] = $path . '/' . $key . '.' . $ext;
            } else {
                $image_paths[$key] = $old_images[$key];
            }
        }

        $update_about_page_query = "UPDATE about_page SET 
            page_header = '$page_header',
            header_image = '{$image_paths['header_image']}',

            section1_image1 = '{$image_paths['section1_image1']}',
            section1_image2 = '{$image_paths['section1_image2']}',
            section1_image3 = '{$image_paths['section1_image3']}',

            section1_title = '$section1_title',
            section1_subtitle = '$section1_subtitle',
            section1_quot = '$section1_quot',
            section1_content = '$section1_content',
            section1_counter_image4 = '{$image_paths['section1_counter_image4']}',

            section1_counter_num = '$section1_counter_num',
            section1_counter_title = '$section1_counter_title',
            section1_counter_content = '$section1_counter_content',

            section2_card1_image = '{$image_paths['section2_card1_image']}',
            section2_card1_title = '$section2_card1_title',
            section2_card1_content = '$section2_card1_content',

            section2_card2_image = '{$image_paths['section2_card2_image']}',
            section2_card2_title = '$section2_card2_title',
            section2_card2_content = '$section2_card2_content',

            section2_card3_image = '{$image_paths['section2_card3_image']}',
            section2_card3_title = '$section2_card3_title',
            section2_card3_content = '$section2_card3_content',

            cta_title = '$cta_title',
            cta_content = '$cta_content',
            cta_button_name = '$cta_button_name',
            cta_button_link = '$cta_button_link',
            cta_image = '{$image_paths['cta_image']}'

            WHERE id = '1'";

        $update_about_page_query_run = $connection->query($update_about_page_query);

        if ($update_about_page_query_run) {
            foreach ($new_images as $key => $new_image) {
                if ($new_image != "") {
                    // Check and remove old file if exists
                    if (file_exists("../" . $old_images[$key])) {
                        unlink("../" . $old_images[$key]);
                    }
                    // Move uploaded file to target location
                    if (move_uploaded_file($_FILES['new_' . $key]['tmp_name'], '../' . $image_paths[$key])) {
                        echo "$key moved successfully to " . $image_paths[$key] . "<br>";
                    } else {
                        echo "Failed to move $key. Error: " . $_FILES['new_' . $key]['error'] . "<br>";
                    }
                }
            }
            redirect("about_page.php", "Updated Successfully");
        } else {
            redirect("about_page.php", "Update Failed");
        }

    }
//About Page End

//Service Section Start
//Service Page Start

    if(isset($_POST['services_btn'])){
        $page_header = mysqli_real_escape_string($connection, $_POST['page_header']);
        $page_header_arb = mysqli_real_escape_string($connection, $_POST['page_header_arb']);
        $section1_header = mysqli_real_escape_string($connection, $_POST['section1_header']);
        $section1_header_arb = mysqli_real_escape_string($connection, $_POST['section1_header_arb']);
        $section1_content = mysqli_real_escape_string($connection, $_POST['section1_content']);
        $section1_content_arb = mysqli_real_escape_string($connection, $_POST['section1_content_arb']);
        $section2_content = mysqli_real_escape_string($connection, $_POST['section2_content']);
        $section2_content_arb = mysqli_real_escape_string($connection, $_POST['section2_content_arb']);

        // header_image
        $old_header_image = $_POST['old_header_image'];
        $new_header_image = $_FILES['new_header_image']['name'];
        
        $path = "assets/img/service_page";
        // -----------------------------
        // header_image
        $header_image_ext = pathinfo($new_header_image, PATHINFO_EXTENSION);
        $header_image_filename = $path.'/header_image'.'.'.$header_image_ext;
        // --------------------------------
        // header_image
        if ($new_header_image != "") {
            $header_image_update_image = $header_image_filename;
        }
        else {
            $header_image_update_image = $old_header_image;
        }

        $update_service_page_query = "UPDATE service_page SET 
            header_image = '$header_image_update_image',
            page_header = '$page_header',
            page_header_arb = '$page_header_arb',
            section1_header = '$section1_header',
            section1_header_arb = '$section1_header_arb',
            section1_content = '$section1_content',
            section1_content_arb = '$section1_content_arb',
            section2_content = '$section2_content',
            section2_content_arb = '$section2_content_arb'
            WHERE id = '1' ";

        $update_service_page_query_run = $connection->query($update_service_page_query);

        if ($update_service_page_query_run) {
            // section1_image
            if($_FILES['new_header_image']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if (file_exists("../" . $old_header_image)) {
                    unlink("../" . $old_header_image);
                }
                if (move_uploaded_file($_FILES['new_header_image']['tmp_name'], '../' . $header_image_update_image)) {
                    echo " image moved successfully to " . $header_image_update_image;
                } else {
                    echo "Failed to move image. Error: " . $_FILES['new_header_image']['error'];
                }
                
            }
            redirect("services.php", "Updated Successfully");
        } else {
            redirect("services.php", "Update Failed");
        }

    }
//Service Page End

    //Add New Service Start

    if (isset($_POST['service_add_btn'])) {
    
        $service_name = mysqli_real_escape_string($connection, $_POST['service_name']);
        $service_name_arb = mysqli_real_escape_string($connection, $_POST['service_name_arb']);
        $service_sub_heading = mysqli_real_escape_string($connection, $_POST['service_sub_heading']);
        $service_sub_heading_arb = mysqli_real_escape_string($connection, $_POST['service_sub_heading_arb']);
        $service_content = mysqli_real_escape_string($connection, $_POST['service_content']);
        $service_content_arb = mysqli_real_escape_string($connection, $_POST['service_content_arb']);
        $feature = isset($_POST['feature']) ? 1 : 0; // Check if the checkbox is checked
    
        // Images Directory
        $path = "assets/img/services";
    
        // Set initial values for image paths
        $service_image_name = null;
        // $icon_image_name = null;
    
        // Insert data into the database first
        $insert_service_query = "INSERT INTO services (service_name, service_name_arb, service_sub_heading, service_sub_heading_arb, service_content, service_content_arb, feature, service_image) 
                                 VALUES ('$service_name', '$service_name_arb', '$service_sub_heading', '$service_sub_heading_arb', '$service_content', '$service_content_arb', '$feature', '$service_image_name')";
    
        $insert_service_query_run = mysqli_query($connection, $insert_service_query);
    
        if ($insert_service_query_run) {
            // Get the inserted service ID
            $service_id = mysqli_insert_id($connection);
    
            // Handle Service Image Upload
            if ($_FILES['service_image']['name'] != "") {
                $service_image_ext = pathinfo($_FILES['service_image']['name'], PATHINFO_EXTENSION);
                $service_image_name = $path . '/' . strtolower(str_replace(' ', '_', $service_name)) . '_service_image-' . time() .'.' . $service_image_ext;
                move_uploaded_file($_FILES['service_image']['tmp_name'], '../' . $service_image_name);
    
                // Update the service image path in the database
                $update_service_image_query = "UPDATE services SET service_image = '$service_image_name' WHERE id = $service_id";
                mysqli_query($connection, $update_service_image_query);
            }
    
           
            echo "Service added successfully.";
            header("Location: services.php"); // Redirect to services page
        } else {
            echo "Failed to add service.";
            header("Location: add_service.php"); // Redirect back to the form
        }
    }
    
    //Add New Service End

    //Update Service Start

    if (isset($_POST['service_update_btn'])) {
        $service_id = mysqli_real_escape_string($connection, $_POST['service_id']);
        $service_name = mysqli_real_escape_string($connection, $_POST['service_name']);
        $service_name_arb = mysqli_real_escape_string($connection, $_POST['service_name_arb']);
        $service_sub_heading = mysqli_real_escape_string($connection, $_POST['service_sub_heading']);
        $service_sub_heading_arb = mysqli_real_escape_string($connection, $_POST['service_sub_heading_arb']);
        $service_content = mysqli_real_escape_string($connection, $_POST['service_content']);
        $service_content_arb = mysqli_real_escape_string($connection, $_POST['service_content_arb']);
        $service_feature = isset($_POST['service_feature']) ? 1 : 0;
        
        //service_image
        $old_service_image = $_POST['old_service_image'];
        $new_service_image = $_FILES['new_service_image']['name'];
        
       
        //------------
        $path = "assets/img/services";
        // service_image
        $service_image_ext = pathinfo($new_service_image, PATHINFO_EXTENSION);
        $service_image_filename = $path.'/'.$service_name.'_service_image'.'-' . time() .'.'.$service_image_ext;

       

        // service_image
        if ($new_service_image != "") {
            $service_image_update_image = $service_image_filename;
        }
        else {
            $service_image_update_image = $old_service_image;
        }

      

        //-----------------

        // Update query
        $update_service_query = "UPDATE services SET 
                service_image = '$service_image_update_image',
                service_name = '$service_name', 
                service_name_arb = '$service_name_arb', 
                service_sub_heading = '$service_sub_heading', 
                service_sub_heading_arb = '$service_sub_heading_arb', 
                service_content = '$service_content', 
                service_content_arb = '$service_content_arb', 
                feature = '$service_feature' 
                WHERE id = '$service_id'";

        $update_service_query_run = $connection->query($update_service_query);
    
        if ($update_service_query_run) {
            // service_image
            if($_FILES['new_service_image']['name'] != ""){
                // Check if the old image exists before attempting to delete
            if (file_exists("../" . $old_service_image)) {
                unlink("../" . $old_service_image);
            }
            if (move_uploaded_file($_FILES['new_service_image']['tmp_name'], '../' . $service_image_update_image)) {
                echo "Header image moved successfully to " . $header_image_update_image;
            } else {
                echo "Failed to move header image. Error: " . $_FILES['new_service_image']['error'];
            }
                
            }
            
            redirect("services.php", "Updated Successfully");
        } else {
            redirect("services.php", "Update Failed");
        }
    }
    
    //Update Service End

    //Delete Service Start

    if (isset($_POST['service_delete_btn'])) {
        // Get the ID of the service to be deleted
        $delete_id = mysqli_real_escape_string($connection, $_POST['delete_id']);
        
        // Get the service details, including image paths
        $service_query = "SELECT service_image, service_icon FROM services WHERE id = '$delete_id'";
        $service_result = mysqli_query($connection, $service_query);
        
        if (mysqli_num_rows($service_result) > 0) {
            $service = mysqli_fetch_assoc($service_result);
            $service_image = $service['service_image'];
           
    
            // Delete the service from the database
            $delete_query = "DELETE FROM services WHERE id = '$delete_id'";
            $delete_result = mysqli_query($connection, $delete_query);
            
            if ($delete_result) {
                // Delete the associated image files from the server if they exist
                if ($service_image && file_exists('../' . $service_image)) {
                    unlink('../' . $service_image);
                }
               
    
                echo "Service deleted successfully.";
                header("Location: services.php"); // Redirect to services page
            } else {
                echo "Failed to delete service.";
                header("Location: services.php"); // Redirect back to the services page
            }
        } else {
            echo "Service not found.";
            header("Location: services.php"); // Redirect back to the services page
        }
    }
    
    //Delete Service End


//Service Section End

// Gallery Start
    // portfolio Page Start

    if(isset($_POST['portfolio_btn'])){
        $page_header = $_POST['page_header'];
        $page_header_arb = $_POST['page_header_arb'];

        $old_header_image = $_POST['old_header_image'];
        $new_header_image = $_FILES['new_header_image']['name'];

        $path = "assets/img/Portfolio";
        // header_image
        $header_image_ext = pathinfo($new_header_image, PATHINFO_EXTENSION);
        $header_image_filename = $path.'/header_image'.'-' . time() .'.'.$header_image_ext;
       
        // header_image
        if ($new_header_image != "") {
            $header_image_update_image = $header_image_filename;
        }
        else {
            $header_image_update_image = $old_header_image;
        }

        $update_portfolio_query = "UPDATE portfolio_page SET 
            page_header = '$page_header',
            page_header_arb = '$page_header_arb',
            header_image = '$header_image_update_image'
            WHERE id = '1' ";

        $update_portfolio_query_run = $connection->query($update_portfolio_query);

        if ($update_portfolio_query_run) {
            // header_image
            if($_FILES['new_header_image']['name'] != ""){
                // Check if the old image exists before attempting to delete
            if (file_exists("../" . $old_header_image)) {
                unlink("../" . $old_header_image);
            }
            if (move_uploaded_file($_FILES['new_header_image']['tmp_name'], '../' . $header_image_update_image)) {
                echo "Header image moved successfully to " . $header_image_update_image;
            } else {
                echo "Failed to move header image. Error: " . $_FILES['new_header_image']['error'];
            }
                
            }
            redirect("gallery.php", "Updated Successfully");
        } else {
            redirect("gallery.php", "Update Failed");
        }

    }
    // portfolio Page End

    // Add Images Start

    if(isset($_POST['gallery_add_btn'])){
        $image_name = $_POST['image_name'];
        $image_name_arb = $_POST['image_name_arb'];
        $image_category = $_POST['image_category'];
        $image_category_arb = $_POST['image_category_arb'];

        $image = $_FILES['image']['name'];

       

        // Handle the image file
        $path = "assets/img/gallery";
        $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $filename = $path . '/' . strtolower(str_replace(' ', '_', $image_name)) .'-' . time() . '.' . $image_ext;


        $add_gallery_query = "INSERT INTO gallery (image, image_name, image_name_arb, image_category, image_category_arb) 
                                 VALUES ('$filename', '$image_name', '$image_name_arb', '$image_category', '$image_category_arb')";

        $add_gallery_query_run = $connection->query($add_gallery_query);

        if ($add_gallery_query_run) {
            // image
            if($_FILES['image']['name'] != ""){
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], '../' . $filename)) {
                echo "Header image moved successfully to " . $filename;
            } else {
                echo "Failed to move header image. Error: " . $_FILES['image']['error'];
            }
                
            }
            
            redirect("gallery.php", "Updated Successfully");
        } else {
            redirect( "gallery.php", "Update Failed");
        }


    }
    // Add Images End

    // Update Image Start

    if (isset($_POST['image_update_btn'])) {
        // Database connection and form input retrieval
        $image_id = $_POST['image_id'];
        $image_name = $_POST['image_name'];
        $image_name_arb = mysqli_real_escape_string($connection, $_POST['image_name_arb']);
        $image_category = mysqli_real_escape_string($connection, $_POST['image_category']);
        $image_category_arb = mysqli_real_escape_string($connection, $_POST['image_category_arb']);

        $old_image = $_POST['old_image'];
        $new_image = $_FILES['new_image']['name'];
    
        // Set directory path for image uploads
        $path = "assets/img/gallery";

        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $image_filename = $path.'/'.$image_name. '-' . time() . '.'.$image_ext;
        
    
        // header_image
        if ($new_image != "") {
            $image_update_image = $image_filename;
        }
        else {
            $image_update_image = $old_image;
        }


        // Update query to modify the gallery record
        $update_image_query = "UPDATE gallery SET 
                                image = '$image_update_image', 
                                image_name = '$image_name', 
                                image_name_arb = '$image_name_arb', 
                                image_category = '$image_category' ,
                                image_category_arb = '$image_category_arb' 
                              WHERE id = '$image_id'";
    
        $update_image_query_run = mysqli_query($connection, $update_image_query);
    
        // Check if the update was successful before moving the image
        if ($update_image_query_run) {
            if($_FILES['new_image']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if (file_exists("../" . $old_image)) {
                    unlink("../" . $old_image);
                }
                if (move_uploaded_file($_FILES['new_image']['tmp_name'], '../' . $image_update_image)) {
                    echo "Header image moved successfully to " . $image_update_image;
                } else {
                    echo "Failed to move header image. Error: " . $_FILES['new_image']['error'];
                }
                
            }
            redirect("gallery.php", "Image updated successfully.");
        } else {
            redirect("gallery.php", "Failed to update image.");
        }
    }
    
    // Update Image End

    // Delete Image Start

    if (isset($_POST['image_delete_btn'])) {
        // Database connection and ID retrieval
        $image_id = mysqli_real_escape_string($connection, $_POST['image_delete_id']);

        // Fetch the image file path from the database
        $get_image_query = "SELECT image FROM gallery WHERE id='$image_id'";
        $get_image_result = mysqli_query($connection, $get_image_query);

        if (mysqli_num_rows($get_image_result) > 0) {
            $image_data = mysqli_fetch_assoc($get_image_result);
            $image_path = '../' . $image_data['image']; // Full path to the image file

            // Delete the record from the database
            $delete_image_query = "DELETE FROM gallery WHERE id='$image_id'";
            $delete_image_result = mysqli_query($connection, $delete_image_query);

            if ($delete_image_result) {
                // Remove the image file from the server
                if (file_exists($image_path)) {
                    unlink($image_path); // Delete the image file
                }
                // Redirect on success
                redirect("gallery.php", "Image deleted successfully.");
            } else {
                // Redirect on failure
                redirect("gallery.php", "Failed to delete image from database.");
            }
        } else {
            // Redirect if no image found
            redirect("gallery.php", "Image not found.");
        }
    }

    // Delete Image End





//Gallery End

    // Contact Start

    if(isset($_POST['contact_btn'])){
        $page_header = $_POST['page_header'];
        $section1_subtitle = $_POST['section1_subtitle'];
        $section1_title = $_POST['section1_title'];
        $section1_content = $_POST['section1_content'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $map_url = $_POST['map_url'];
        $form_email = $_POST['form_email'];

        $old_header_image = $_POST['old_header_image'];
        $new_header_image = $_FILES['new_header_image']['name'];
        
        $path = "assets/images/contact";

        // header_image
        $header_image_ext = pathinfo($new_header_image, PATHINFO_EXTENSION);
        $header_image_filename = $path.'/header_image'.'.'.$header_image_ext;

        // header_image
        if ($new_header_image != "") {
            $header_image_update_image = $header_image_filename;
        }
        else {
            $header_image_update_image = $old_header_image;
        }

        $update_contact_page_query = "UPDATE contact_page SET 
            page_header = '$page_header',
            header_image = '$header_image_update_image',
            section1_subtitle = '$section1_subtitle',
            section1_title = '$section1_title',
            section1_content = '$section1_content',
            email = '$email',
            phone = '$phone',
            address = '$address',
            map_url = '$map_url',
            form_email = '$form_email'

            WHERE id = '1' ";

        $update_contact_query_run = $connection->query($update_contact_page_query);

        if ($update_contact_query_run) {
            // header_image
            if($_FILES['new_header_image']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if (file_exists("../" . $old_header_image)) {
                    unlink("../" . $old_header_image);
                }
                if (move_uploaded_file($_FILES['new_header_image']['tmp_name'], '../' . $header_image_update_image)) {
                    echo "Header image moved successfully to " . $header_image_update_image;
                } else {
                    echo "Failed to move header image. Error: " . $_FILES['new_header_image']['error'];
                }
                
            }
            
            redirect("contact_page.php", "Updated Successfully");
        } else {
            redirect("contact_page.php", "Update Failed");
        }

    }

    // Contact End

    //footer Start

    if(isset($_POST['footer_btn'])){
        $header_eng = $_POST['header_eng'];
        $header_arb = $_POST['header_arb'];
        $content_eng = $_POST['content_eng'];
        $content_arb = $_POST['content_arb'];

        $update_footer_query = "UPDATE footer SET 
            header_eng = '$header_eng',
            header_arb = '$header_arb',
            content_eng = '$content_eng',
            content_arb = '$content_arb'
            WHERE id = '1' ";

        $update_footer_query_run = $connection->query($update_footer_query);

        if ($update_footer_query_run) {
            redirect("footer.php", "Updated Successfully");
        } else {
            redirect("footer.php", "Update Failed");
        }

    }
    //footer End

    // Social Media Start

    if(isset($_POST['social_media'])){
        $instagram = $_POST['instagram'];
        $facebook = $_POST['facebook'];
        $twitter = $_POST['twitter'];
        $linkedIn = $_POST['linkedIn'];
        $youtube = $_POST['youtube'];

        $update_social_media_query = "UPDATE social_media SET 
            instagram = '$instagram',
            facebook = '$facebook',
            twitter = '$twitter',
            linkedIn = '$linkedIn',
            youtube = '$youtube'
            WHERE id = '1' ";

        $update_footer_query_run = $connection->query($update_social_media_query);

        if ($update_social_media_query_run) {
            redirect("socialmedia.php", "Updated Successfully");
        } else {
            redirect( "socialmedia.php", "Update Failed");
        }

    }
    // Social Media End








        // Testimonial  Start
    //Testimonial Add Start

    if (isset($_POST['testimonial_add_btn'])) {
        $name = $_POST['name'];
        $name_arb = $_POST['name_arb'];
        $message = $_POST['message'];
        $message_arb = $_POST['message_arb'];
       
        $image = $_FILES['image']['name'];

        // Handle the image file
        $path = "assets/img/testimonial";
        $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $filename = $path . '/' . strtolower(str_replace(' ', '-', $name)) . '.' . $image_ext;

        $add_testimonial_query = "INSERT INTO testimonial (image, name, name_arb, message, message_arb) 
                                 VALUES ('$filename', '$name', '$name_arb', '$message', '$message_arb')";

        $add_testimonial_query_run = $connection->query($add_testimonial_query);

        if ($add_testimonial_query_run) {
            // image
            if($_FILES['image']['name'] != ""){
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], '../' . $filename)) {
                echo "Header image moved successfully to " . $filename;
            } else {
                echo "Failed to move header image. Error: " . $_FILES['image']['error'];
            }
                
            }
            
            redirect("testimonials.php", "Updated Successfully");
        } else {
            redirect( "testimonials.php", "Update Failed");
        }
    }
    //Testimonial Add End

    //Testimonial Update Start

    if (isset($_POST['testimonial_update_btn'])) {
        $testimonial_id = $_POST['testimonial_id'];
        $name = $_POST['name'];
        $name_arb = $_POST['name_arb'];
        $message = mysqli_real_escape_string($connection, $_POST['message']);
        $message_arb = mysqli_real_escape_string($connection, $_POST['message_arb']);

        $old_image = $_POST['old_image'];
        $new_image = $_FILES['new_image']['name'];
      

        // Handle the image file
        $path = "assets/img/testimonial";
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        
        $image_filename = $path . '/' . strtolower(str_replace(' ', '-', $name)) . '.' . $image_ext;
        

        // 
        if ($new_image != "") {
            $image_update_image = $image_filename;
        }
        else {
            $image_update_image = $old_image;
        }
     
        
        // Update query to modify the gallery record
        $update_testimonial_query = "UPDATE testimonial SET 
                                image = '$image_update_image', 
                                name = '$name', 
                                name_arb = '$name_arb', 
                                message = '$message',
                                message_arb = '$message_arb' 
                              WHERE id = '$testimonial_id'";
    
        $update_testimonial_query_run = mysqli_query($connection, $update_testimonial_query);
        
        // Check if the update was successful before moving the image
        if ($update_testimonial_query_run) {
            if($_FILES['new_image']['name'] != ""){
                // Check if the old image exists before attempting to delete
                if (file_exists("../" . $old_image)) {
                    unlink("../" . $old_image);
                }
                if (move_uploaded_file($_FILES['new_image']['tmp_name'], '../' . $image_update_image)) {
                    echo "image moved successfully to " . $image_update_image;
                } else {
                    echo "Failed to move image. Error: " . $_FILES['new_image']['error'];
                }
                
            }
            redirect("testimonials.php", "Image updated successfully.");
        } else {
            redirect("testimonials.php", "Failed to update image.");
        }

    }
    //Testimonial Update End

    //Testimonial Delete Start

    if (isset($_POST['testimonial_delete'])) {
        // Database connection and ID retrieval
        $testimonial_id = mysqli_real_escape_string($connection, $_POST['testimonial_id']);

        // Fetch the image file path from the database
        $get_testimonial_query = "SELECT image FROM testimonial WHERE id='$testimonial_id'";
        $get_testimonial_result = mysqli_query($connection, $get_testimonial_query);

        if (mysqli_num_rows($get_testimonial_result) > 0) {
            $image_data = mysqli_fetch_assoc($get_testimonial_result);
            $image_path = '../' . $image_data['image']; // Full path to the image file

            // Delete the record from the database
            $delete_testimonial_query = "DELETE FROM testimonial WHERE id='$testimonial_id'";
            $delete_testimonial_result = mysqli_query($connection, $delete_testimonial_query);

            if ($delete_testimonial_result) {
                // Remove the image file from the server
                if (file_exists($image_path)) {
                    unlink($image_path); // Delete the image file
                }
                // Redirect on success
                redirect("testimonials.php", "Image deleted successfully.");
            } else {
                // Redirect on failure
                redirect("testimonials.php", "Failed to delete image from database.");
            }
        } else {
            // Redirect if no image found
            redirect("testimonials.php", "Image not found.");
        }
    }
    //Testimonial Delete End

     //TestimonialEnd
?>
