<?php
session_start();
if(isset($_SESSION['flag'])) {
    require_once('../models/userModel.php');
    $username = $_SESSION['username'];
    $row = profile($username);

    if(isset($_POST['submit'])){

        //$username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        $conn = getConnection();
        $sql = "UPDATE users SET password='{$password}',name='{$name}',email='{$email}',gender='{$gender}', dob='{$dob}' WHERE username = $username";
        var_dump($sql);
        $result=mysqli_query($conn, $sql);
    }
    

    // else{
    //     $id=$_SESSION['current_user']['username'];
    //     $data = getUserById($id);

    //     $full_name=$data['full_name'];
    //     $email=$data['email'];
    //     $phone=$data['phone'];
    //     $program=$data['program'];
    //     $dob=$data['dob'];
    // }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../asset/css/add.css">
</head>
<body>
<header>
    <h1>Edit Profile</h1>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Course.php">Courses</a></li>
        <li><a href="Student.php">Students</a></li>
        <li><a href="NoticeList.php">Notice</a></li>
        <li><a href="Faculty.php">Teachers</a></li>
        <li><a href="view.php">Profile</a></li>
        <li><a href="../controllers/logout.php">Logout</a></li>
    </ul>
</nav>
<form id="editForm" action="../controllers/editProfileCheck.php" method="post">
    <table>
        <tr>
            <td align="center"><img src="../asset/propic.png" alt="" height="200px" width="200px"></td>
        </tr>
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="email" id="email" value="<?php echo $row['email']; ?>"></td>
        </tr>
        <tr>
            <td>Gender: </td>
            <td>
                <input type="radio" name="gender" id="gender" value="Male" <?php if($row['gender'] == 'Male') echo 'checked'; ?>>Male
                <input type="radio" name="gender" id="gender" value="Female" <?php if($row['gender'] == 'Female') echo 'checked'; ?>>Female
            </td>
        </tr>
        <tr>
            <td>Date of Birth: </td>
            <td><input type="date" name="dob" id="dob" value="<?php echo $row['dob']; ?>"></td>
        </tr>
        <tr>
        <td>
             <input type="submit" name="edit_btn" id="submit" value="Save" onclick="editProfileValidation()">
        </td>
        </tr>
    </table>
</form>
<footer>
    <p>2023 University Management System</p>
</footer>
<!-- <script>
    function updateProfile() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var result = JSON.parse(this.responseText);
                if (result.status == 'success') {
    alert('Profile updated successfully!');
} else {
    alert('Failed to update profile!');
}

            }
        };
        var data = new FormData(document.getElementById('editForm'));
        xhr.open('POST', '../controllers/editProfileController.php', true);
        xhr.send(data);
    }
</script> -->
</body>
</html>
<?php
} else {
    header('location: login.php');
}
?>

