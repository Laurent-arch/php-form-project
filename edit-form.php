<?php
include('connection.php');

$sql = "SELECT * from users";
$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head.php'); ?>
</head>

<body>
  <div class="container">
    <table class="table">
      <form action="phpUpdateFormScript.php" method="POST">
        <thead class="thead-light">
          <tr>
            <th scope="col"></th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Category</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <?php
        while ($rows = $result->fetch_assoc()) {
        ?>
          <tr>
            <!-- <th scope="row"><?php echo $rows['id']; ?></th> -->
            <td><input type="hidden" value=<?php echo $rows['id']; ?> name="id" /></td>
            <td><input type="text" value=<?php echo $rows['firstname']; ?> name="firstname" /></td>
            <td><input type="text" value=<?php echo $rows['lastname']; ?> name="lastname" /></td>
            <td><input type="text" value=<?php echo $rows['email']; ?> name="email" /></td>
            <td><input type="text" value=<?php echo $rows['mobile']; ?> name="mobile" /></td>
            <td><input type="number" value=<?php echo $rows['category']; ?> name="category" /></td>
            <td>
              <button type="submit" class="btn btn-danger">Edit</button>
            </td>
          </tr>
        <?php
        }
        ?>
        <tbody>



        </tbody>

      </form>
    </table>
  </div>
</body>

</html>