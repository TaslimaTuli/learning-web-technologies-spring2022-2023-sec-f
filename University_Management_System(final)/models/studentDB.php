<?php 
    require_once('db.php');

    function addStudent($s){
        $con = getConnection();
        $sql = "INSERT INTO students (id, name, gender, email, contactNo, address, cgpa) VALUES ('{$s['id']}','{$s['name']}', '{$s['gender']}', '{$s['email']}', '{$s['contactNo']}', '{$s['address']}', '{$s['cgpa']}')";
       var_dump($sql); return $status = mysqli_query($con, $sql);
    }

    function show(){
        $con = getConnection();
        $sql = "SELECT * FROM students";
        return $result = mysqli_query($con, $sql);
    }
    // function updateCourse($course) {
    //     $con = getConnection();
    //     $sql = "UPDATE courses SET courseName = '{$course['courseName']}', section = '{$course['section']}' WHERE courseName = '{$course['courseName']}'";
    //     $status = mysqli_query($con, $sql);
    //     mysqli_close($con);
    //     return $status;
    // }
    
    function deleteStudent($s) {
        $con = getConnection();
        $sql = "DELETE FROM students WHERE id = $s";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }

    function findById($id) {
        $con = getConnection();
        $sql = "SELECT * FROM students WHERE id = $id";
        $result = mysqli_query($con, $sql);
      
        if ($result->num_rows > 0) {
          // Output data of the first row
          $row = $result->fetch_assoc();
          return $row;
        } else {
          return null;
        }
      
        mysqli_close($con);
      }

?>