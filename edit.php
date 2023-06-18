<?php
include("db.php");

$name = '';
$phone = '';
$nid_number = '';
$address = '';
$comments = '';
$image = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM servents WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
$phone = $row['phone'];
$nid_number = $row['nid_number'];
$address = $row['address'];
$comments = $row['comments'];
$image = $row['picture'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $nid_number = $_POST['nid_number'];
  $address = $_POST['address'];
  $comments = $_POST['comments'];
  $image = $_POST['picture'];
  
  $query = "UPDATE `servents` SET `name`='$name',`phone`='$phone',`nid_number`='$nid_number',`address`='$address',`comments`='$comments',`picture`='$image' WHERE 1";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'servents Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location:home.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container w-100 p-4">
  <div class="row w-100">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="name" type="text" class="form-control" value="<?php echo $name; ?>" placeholder="Update Name">
        </div>
        <div class="form-group">
          <input name="phone" type="text" class="form-control" value="<?php echo $phone; ?>" placeholder="Update phone">
        </div>
        <div class="form-group">
          <input name="nid_number" type="text" class="form-control" value="<?php echo $nid_number; ?>" placeholder="Update nid_number">
        </div>
        <div class="form-group">
        <textarea name="address" class="form-control" cols="30" rows="10"><?php echo $address;?></textarea>
        </div>
        <div class="form-group">
        <textarea name="comments" class="form-control" cols="30" rows="10"><?php echo $comments;?></textarea>
        </div>
        <div class="form-group">
          <input name="picture" type="text" class="form-control" value="<?php echo $image; ?>" placeholder="Update picture">
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
