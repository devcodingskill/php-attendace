<?php
$title = "View Records";
require_once 'includes/header.php';
require_once 'db/conn.php';

$results = $crud->getAttendees();
?>
<h1 class="text-center">View Records page</h1>
<table class="table">
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Email Address</th>
        <th>Contact Number</th>
        <th>Specialty</th>
    </tr>
    <!-- we can open and close php in spread tab  -->
    <!-- open here -->
    <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $r['attendee_id']?></td>
            <td><?php echo $r['firstname']?></td>
            <td><?php echo $r['lastname']?></td>
            <td><?php echo $r['dob']?></td>
            <td><?php echo $r['email']?></td>
            <td><?php echo $r['contact']?></td>
            <td><?php echo $r['specialty_id']?></td>
            

        </tr>


        <!-- close php tag here -->
    <?php } ?>
</table>



<!-- footer -->
<?php require_once 'includes/footer.php'; ?>