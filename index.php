<?php include("db.php"); ?>
<?php include('includes/header.php'); ?>


<body>
    
<div class="transfer-container">
    <!-- navigation bar ends -->
    <div class="transfers">
        <?php
        $query = "SELECT * FROM servents";
        $result_tasks = mysqli_query($conn, $query);

        echo '<div class="container">';
        echo '<div class="row row-cols-4 ">';

        while ($row = mysqli_fetch_assoc($result_tasks)) {
            echo '<div class="card" style="width: 18rem;">';
            echo '<img src="' . $row['picture'] . '" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['name'] . '</h5>';
            echo '<p class="card-text">' . $row['address'] . '</p>';
            echo '<a href="hire.php?servent_id=' . $row['id'] . '" class="btn btn-primary">Hire Now</a>';
            echo '</div>';
            echo '</div>';
        }

        echo '</div>';
        echo '</div>';
        ?>
    </div>
</div>

<?php include('includes/footer.php'); ?>