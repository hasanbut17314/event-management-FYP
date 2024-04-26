<?php 
include "includes/header.php";
$select_query = "SELECT * FROM booking LIMIT 1";
$result = mysqli_query($con, $select_query);
$row = mysqli_fetch_assoc($result);
 ?>
<section class="px-3 py-4 my-5 booking_detail">
    <h1 class="b-head">Booking Details</h1>
    <div class="grid grid-cols-2 py-4 bg-white md:px-5 px-4 rounded-lg w-half">
        <div>
            <p>Client Name</p>
            <p>Email</p>
            <p>Phone</p>
            <p>Address</p>
            <p>No. of guests</p>
            <p>Booking Date</p>
            <p>Event type</p>
            <p>Payment Method</p>
            <p>Booking Created at</p>
        </div>
        <div class="book_dnm">
            <p><?= $row['name'] ?></p>
            <p><?= $row['email'] ?></p>
            <p><?= $row['phone'] ?></p>
            <p><?= $row['address'] ?></p>
            <p><?= $row['no_of_guest'] ?></p>
            <p><?= $row['date'] ?></p>
            <p><?= $row['event_type'] ?></p>
            <p><?= $row['payment_method'] ?></p>
            <p><?= $row['created_at'] ?></p>
        </div>
        <form action="code/codes.php" method="post" class="mt-3 py-3">
            <button type="submit" class="cancel_btn" name="cancel_booking_btn">Cancel Booking</button>
        </form>
    </div>
</section>

<?php include "includes/footer.php" ?>