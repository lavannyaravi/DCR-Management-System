<?php
require_once '../../../BusinessServiceLayer/model/customerModel.php';

class customerController {

  function loginCust(){
            $customer = new customerModel();
            $customer->C_Mail = $_POST['C_Mail'];
            $customer->C_Password = $_POST['C_Password'];

            $cust = $customer->loginCustomer();
            $value = $cust->fetch();
            
            if($customer->loginCustomer()->rowCount() == 1){  
                $message = 'Success Login';
                 
                session_start();
                $_SESSION['C_ID'] = $value[0];
                $_SESSION['C_Name'] = $value[1];
                $_SESSION['C_Mail'] = $value[2];
                $_SESSION['C_Phone'] = $value[3];
                $_SESSION['C_image'] = $value[4];
                $_SESSION['C_Password'] = $value[5];
                
               
                echo "<script type='text/javascript'>alert('$message');
                window.location = 'customerProfile.php';</script>";
                exit();
            }
            else{
                $message = "Login Failed ! Username or password incorrect";
               
                echo "<script type='text/javascript'>alert('$message');
                window.location = 'logincustomer.php';
                </script>";
            }
    
            
    }
    // Sent data to the database 
    function regsCust(){
        $customer = new customerModel();
        $customer->C_Name = $_POST['C_Name'];
        $customer->C_Mail = $_POST['C_Mail'];
        $customer->C_Phone = $_POST['C_Phone'];
        $customer->C_Password = $_POST['C_Password'];
		$customer->C_image = time().$_FILES['photoFile']['name'];
		
		//file directory to save image
            $customer->target_dir = "../../../uploads/";
    
            //target file to save in directory
            $customer->target_file = $customer->target_dir . basename($_FILES["photoFile"]["name"]);
    
            // Select file type
            $customer->imageFileType = strtolower(pathinfo($customer->target_file,PATHINFO_EXTENSION));
    
            // Valid file extensions- 
            $customer->extensions_arr = array("jpg","jpeg","png","gif");
    
    // Validate if register succesfull 
        if($customer->registerCust() > 0){
                $message = "Register Succesfull!";
            echo "<script type='text/javascript'>alert('$message');
            window.location = 'logincustomer.php';</script>";
            }
    }

    
        

 
}


 ?>
