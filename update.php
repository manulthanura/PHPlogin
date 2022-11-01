<?php
// include database connection file
include_once("../includes/config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$username=$_POST['username'];
	$phonenumber=$_POST['phonenumber'];
	$email=$_POST['email'];
	$location=$_POST['location'];

	// update user data
	$result = mysqli_query($conn, "UPDATE users SET username='$username',phonenumber='$phonenumber',email='$email',location='$location' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: tables-users.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$username = $user_data['username'];
	$phonenumber = $user_data['phonenumber'];
	$email = $user_data['email'];
	$location = $user_data['location'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        
        <title>Edit - User Data</title>
    </head>
    <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                            <form action="" method="POST">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit User Data</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="input-group mb-1">
                                            <label for="inputEmail">User Name</label></div>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Edit User Name" name="username" value=<?php echo $username;?>>
                                            </div>
                                            <div class="input-group mb-1">
                                            <label for="inputEmail">Phone Number</label></div>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Edit User's Phone Number" name="phonenumber" value=<?php echo $phonenumber;?>>
                                            </div>
                                            <div class="input-group mb-1">
                                            <label for="inputEmail">User Email</label></div>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Edit User's Email" name="email" value=<?php echo $email;?>>
                                            </div>
                                            <div class="input-group mb-1">
                                            <label for="inputEmail">User Location</label></div>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Edit User's Location" name="location" value=<?php echo $location;?>>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="dashboard.php">Back to Dashboard</a>
                                                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                                                <input type="submit" name="update" value="Update" class="btn btn-success">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; VegiMart 2021</div>
                            <div>
                                <a href="../index.php">Back to Site</a>
                                &middot;
                                <a href="../about-out.php">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
