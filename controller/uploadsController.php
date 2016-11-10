<?php
        define('MB', 1048576);
        // file handling database interactions
        require '../model/uploadModel.php';
        
        //check existance of uploads directory,if does not exist, make one
        if (!is_dir('../uploads'))
        {
            mkdir("../uploads");
        }        
                
        // directory where our files will be stored
        $target_dir = "../uploads/";
        
        // specifies path of file to be uploaded
        $target_file = $target_dir . basename($_FILES['uploadedfile']['name']); 
        
        //get extension of selected file
        $fileType = pathinfo($target_file, PATHINFO_EXTENSION); 
        //hold status of the uploaded file
        $uploadStatus = 1; 
        $academicYear = date("Y");
        getSubmissionDate($academicYear);
        
        //CALCULATE THE DATE DIFFERENCE
        $date1 = new DateTime("now");
        $date2 = new DateTime($submissionDate);

        $interval =$date1->diff($date2);
        $diff= $interval->format('%R%a');
        if ($diff < 0)
        {
            $_SESSION['date'] = 'failure';
            header("location:../views/student/index.php");
        } 
        else 
        {
            //check if file being uploaded exits in directory
            if (file_exists($target_file))
            {               
                $uploadStatus = -2;
            }
            else
            {
                // check size of the selected file if not exist
                if ($_FILES['uploadedfile']['size'] > 5*MB)
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
                    //echo ' Sorry, only .img, .jpeg, .jpg, .png and .docx file cab be uploaded ';
                    $_SESSION['format'] = 'failure';
                    header("location:../views/student/index.php");
                    break;
                case -1:
                    //echo ' file is too large ';
                    $_SESSION['size']= 'failure';
                    header("location:../views/student/index.php");
                    break;
                case -2:
                    //echo ' Sorry, file already exits ';
                    $_SESSION['exits']= 'failure';                    
                    header("location:../views/student/index.php");
                    break;
                case 1:
                    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_file)) 
                    {
                        saveData($target_file);
                        //echo 'File Uploaded successfully';
                        $_SESSION['success']= 'success';
                        header("location:../views/student/index.php");
                    }
                    else
                    {
                        if (copy($_FILES['uploadedfile']['tmp_name'], $target_file)) {
                        saveData($target_file);                        
                        $_SESSION['success']= 'success';
                        header("location:../views/student/index.php");
                    } else {
                        throw new Exception('Try again later');
                    }
                }
            }
           
        }
