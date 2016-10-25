<?php

        //check existance of uploads directory,if does not exist, make one
        if (!is_dir('../uploads'))
        {
            mkdir("../uploads");
        }
        
        // file handling database interactions
        require '../model/uploadModel.php';
        
        // directory where our files will be stored
        $target_dir = "../uploads/";
        
        // specifies path of file to be uploaded
        $target_file = $target_dir . basename($_FILES['uploadedfile']['name']); 
        //get extension of selected file
        $fileType = pathinfo($target_file, PATHINFO_EXTENSION); 
        //hold status of the uploaded file
        $uploadStatus = 1; 
        
        if (!isset($_POST['checkbox']))
        {
            //echo 'Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy';
            $_SESSION['agree'] = 'failure';
            header("location:../views/student/index.php");
        } 
        else {
            //check if file being uploaded exits in directory
            if (file_exists($target_file))
            {               
                $uploadStatus = -2;
            }
            else
            {
                // check size of the selected file if not exist
                if ($_FILES['uploadedfile']['size'] > 500000)
                {                   
                    $uploadStatus = -1;
                }
                //check the file extension
                elseif ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "docx") 
                {
                    $uploadStatus = 0;                                              
                }
            }
            //display appropriate error message
            switch ($uploadStatus){
                case 0:
                    echo ' Sorry, only .img, .jpeg, .jpg, .png and .docx file cab be uploaded ';
                    $_SESSION['format'] = 'failure';
                    break;
                case -1:
                    echo ' file is too large ';
                    $_SESSION['size']= 'failure';
                    break;
                case -2:
                    echo ' Sorry, file already exits ';
                    $_SESSION['exits']= 'failure';
                    break;
                case 1:
                    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_file)) 
                    {
                        saveData($target_file);
                        echo 'File Uploaded successfully';
                        $_SESSION['exits']= 'failure';
                        //header("location:../views/student/index.php");
                    }
                    else
                    {
                        if (copy($_FILES['uploadedfile']['tmp_name'], $target_file)) {
                        saveData($target_file);
                        echo 'File Copied successfully';
                        $_SESSION['exits']= 'failure';
                        //header("location:../views/student/index.php");
                    } else {
                        throw new Exception('Try again later');
                    }
                }
            }
           
        }
