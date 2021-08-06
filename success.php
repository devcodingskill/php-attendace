<?php
$title = "Index";
require_once 'includes/header.php';
require_once 'db/conn.php';

//before we add data we need to check is post or just go to the page 
if(isset($_POST['submit']))
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
   // $dob= $_POST['datepicker'];
    //change date format mm-dd-yyyy to yyyy-mm-dd
    $orgDate =$_POST['datepicker'];
    
    $dob= date("Y-m-d",strtotime($orgDate));

    $specialty = $_POST['specialty'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
 /// call fuction to insert value
    $isSuccess =$crud->insert($fname,$lname,$dob,$email,$contact,$specialty);
}

?>
<h1 class="text-center">Sucess page</h1>

<!-- using Posrt Method -->
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstname'] . ' '. $_POST['lastname'] ;?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text"><?php echo  $dob;?></p>
    <p class="card-text"><?php echo $_POST['specialty'];?></p>
    <p class="card-text"><?php echo $_POST['contact'];?></p>
    <p class="card-text"><?php echo $_POST['email'];?></p>
    
  </div>
</div>

<!-- footer -->
<?php require_once 'includes/footer.php'; ?>