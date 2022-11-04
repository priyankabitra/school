<?php include 'connections.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="">
    <title>Student Schools</title>
</head>
<body>
<div class="container mt-3">
  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Pin</th>
        <th>Logo</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $query = mysqli_query($conn,'SELECT * FROM school_data');
        while($row = mysqli_fetch_assoc($query)){
      ?>        
      <tr>
        <td><?php echo $row['school_id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['state']; ?></td>
        <td><?php echo $row['country']; ?></td>
        <td><?php echo $row['pincode']; ?></td>
        <td><img class="img-thumbnail" width="60px" src="assets/school/<?php echo $row['logo']; ?>"></td>
      </tr>
      <?php       
        }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>

