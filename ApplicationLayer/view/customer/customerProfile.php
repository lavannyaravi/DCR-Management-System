
<?php
require_once '../../../libs/custSession.php';
require_once '../../../BusinessServiceLayer/controller/customerProfileController.php';
$customer = new customerProfileController();
$data = $customer->my();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/f252491b10.js" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../assets/css/profile.css">
  <link rel="stylesheet" href="../../../assets/css/navbar.css">
  <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
  <title>DCRMS ! Customer's profile</title>
</head>

<body>

  <!-- NAVBAR -->
  
   <nav class="navbar navbar-expand-md navbar-dark bg-primary">
     <div class="collapse navbar-collapse" id="navbarColor01">
       <div class="navbar-nav" style="padding-top:0px;">
         <a class="nav-item nav-link" href="productList.php">HOME</a
         <form method="post" class="form-inline">
         <button type="submit" id="logout" class="logout" name="logout" style="background:transparent;color:white;border:none;width:0px;outline:none;"
         onclick="return confirm('Are you sure you want to logout?');">
         <a class="nav-item nav-link" style="margin-right:-50px">LOGOUT</a></button>
         </form>
     </div>
   </nav>

   <nav class="navbar navbar-light" style="height:auto;background-color: #f5f5f5">
 
     <h5>Welcome To DCRMS</h5>
     </a>
   </nav>

<!-- PROFILE -->
	
	<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
	
  <div class="container">
    <div id="customer-profile">
      <div id="customer-nav" class="text-center">
        <div class="profile-img border w-100">
          <img class="profile-img-real" src="../../../uploads/<?php echo $data['image'] ?>" alt="" srcset="" onerror="this.src='../../../uploads/default.png';">
        </div>
        





        <div class="border w-100">
          <h5 class=" mt-2">Hello, <?php echo $data["sub_name"]  ?></h5>
        </div>
        <div class="border w-100 py-2">
          <a class="cust-nav-active" href="customerProfile.php"><i class="fa fa-user" aria-hidden="true"></i>
            My Profile</a>
        </div>
        <div class="border w-100 py-2">
          <a class="cust-nav" href="customerProfileEdit.php"> <i class="fa fa-pencil" aria-hidden="true"></i>
            Edit Profile</a>
        </div>
      </div>
	  <div class="border w-100 py-2">
      <div id="customer-details" class="mx-4">
        <h4>My Profile</h4>
        <div id="customer-details-info" class=" mt-3">
          <p>Full name: <strong><?php echo $data["name"] ?></strong></p>
          <p>Email Address: <strong><?php echo $data["email"] ?></strong></p>
          <p>Phone Number: <strong><?php echo $data["phone_number"] ?></strong></p>
        </div>
      </div>
    </div>

  </div>

  <!-- FOOTER 
  <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017-2021 DCRMS</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>-->


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
