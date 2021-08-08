<?php
$title = "Index";
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getSpecialies();
?>
<!-- all content for this page -->

<h1 class="text-center">Hello, world!</h1>
<!-- data for this from 
          -first name
          -last name
          -DOB
          -Specialy
          -Email
          -Contact Number  
    -->
<form method="post" action="success.php">
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="mb-3">
        <label for="datepicker" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" id="datepicker" name="datepicker">
    </div>
    <div class="mb-3">
        <label for="specialty" class="form-label">Specialty</label>
        <select class="form-select" aria-label="Default select example" id="specialty" name="specialty">
            <!-- <option selected>Plese select one</option>
            <option value="1">Database Admin</option>
            <option value="2">Software developer</option>
            <option value="3">Other</option> -->

            <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['specialty_id'];?> "> <?php echo $r['name'];?>  </option>
            <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="phonenumber" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="phonenumber" name="contact">
    </div>
    <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
</form>


<!-- footer -->
<?php require_once 'includes/footer.php'; ?>