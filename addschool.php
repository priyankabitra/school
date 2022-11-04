<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>  
<div class="container-fluid p-2 bg-primary text-white text-center">
  <h1>PHP PROJECT</h1>
  <h6>SCHOOL</h6> 
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
  
<div class="container mt-5">
    <form action="addschool1.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Name :</label> 
                <input class="form-control" type="text" name="name" placeholder="Enter Your Full Name" required>
                <div class="valid-feedback">Username field is valid!</div>
                <div class="invalid-feedback">Username field cannot be blank!</div>
            </div>
            <div class="col-md-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Email : </label> 
                <input class="form-control" type="email" name="email" placeholder="Enter Your E-mail" required>
                <div class="valid-feedback">Email field is valid!</div>
                <div class="invalid-feedback">Email field cannot be blank!</div>
            </div>
            <div class="col-md-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Mobile : </label> 
                <input class="form-control" type="tel" name="moblie" placeholder="Enter Your Mobile number" required>
                <div class="valid-feedback">Mobile field is valid!</div>
                <div class="invalid-feedback">Mobile field cannot be blank!</div>
            </div>
            <div class="col-md-6">
                <label for="formFile" class="form-label">Upload image :</label>
                <input class="form-control" type="file" name="logo" id="formFile" required>
                <div class="valid-feedback">address field is valid!</div>
                <div class="invalid-feedback">address field cannot be blank!</div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Address : </label> 
                    <input class="form-control" type="text" name="address" placeholder="Enter Your Address" required>
                    <div class="valid-feedback">address field is valid!</div>
                    <div class="invalid-feedback">address field cannot be blank!</div>
                </div>
                <div class="col mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Country :</label>
                    <select class="form-select" id="validationCustom04" name="country" required>
                        <option selected disabled value="">Choose...</option>
                        <option>India</option>
                        <option>USA</option>
                        <option>UK</option>
                        <option>Canada</option>
                    </select>
                    <div class="valid-feedback">country field is valid!</div>
                    <div class="invalid-feedback">country field cannot be blank!</div>
                </div>
                <div class="col mt-3">
                    <label for="exampleFormControlInput1" class="form-label">City : </label> 
                    <input class="form-control" type="text" name="city" placeholder="Enter Your City" required>
                    <div class="valid-feedback">city field is valid!</div>
                    <div class="invalid-feedback">city field cannot be blank!</div>
                </div>
                <div class="col mt-3">
                    <label for="exampleFormControlInput1" class="form-label">State : </label> 
                    <input class="form-control" type="text" name="state" placeholder="Enter Your State" required>
                    <div class="valid-feedback">state field is valid!</div>
                    <div class="invalid-feedback">state field cannot be blank!</div>
                </div>
                <div class="col mt-3" >
                    <label for="exampleFormControlInput1" class="form-label">Pincode :</label> 
                    <input class="form-control" type="text" name="pin" placeholder="Enter Your Pin" required>
                    <div class="valid-feedback">pin field is valid!</div>
                    <div class="invalid-feedback">pin field cannot be blank!</div>
                </div>
            </div>                
        </div>
        <div class="mt-3">
            <input type="submit" name="data" class="btn btn-primary">
            <button type="submit" name="data" class="btn btn-primary">Add School</button>
        </div>                
    </form>
</div>
</body>
</html>

