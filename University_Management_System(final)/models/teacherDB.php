<?php 
    require_once('db.php');

    function addFaculty($s){
        $con = getConnection();
        $sql = "INSERT INTO teachers ( name, email, gender, contactNo, salary, id) 
        VALUES ('{$s['name']}', '{$s['email']}', '{$s['gender']}', '{$s['contactNo']}', '{$s['salary']}', '{$s['id']}')";
        //var_dump($sql);
        return $status = mysqli_query($con, $sql);
    }

    function show(){
        $con = getConnection();
        $sql = "SELECT * FROM teachers";
        return $result = mysqli_query($con, $sql);
    }
    // function updateCourse($course) {
    //     $con = getConnection();
    //     $sql = "UPDATE courses SET courseName = '{$course['courseName']}', section = '{$course['section']}' WHERE courseName = '{$course['courseName']}'";
    //     $status = mysqli_query($con, $sql);
    //     mysqli_close($con);
    //     return $status;
    // }
    
    function deleteFaculty($s) {
        $con = getConnection();
        $sql = "DELETE FROM teachers WHERE id = $s";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }

    function findById($id) {
        $con = getConnection();
        $sql = "SELECT * FROM teachers WHERE id = $id";
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