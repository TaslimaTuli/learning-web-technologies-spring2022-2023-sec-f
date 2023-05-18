<?php 
    require_once('db.php');

    function addNotice($n){
        $con = getConnection(); //, '{$n['id']}'
        $sql = "insert into notice(title, description, date, id) values('{$n['title']}', '{$n['description']}', '{$n['date']}', '{$n['id']}')";
        return $status = mysqli_query($con, $sql);
    }

    function show(){
        $con = getConnection();
        $sql = "SELECT * FROM notice";
        return $result = mysqli_query($con, $sql);
    }
    // function updateCourse($course) {
    //     $con = getConnection();
    //     $sql = "UPDATE courses SET courseName = '{$course['courseName']}', section = '{$course['section']}' WHERE courseName = '{$course['courseName']}'";
    //     $status = mysqli_query($con, $sql);
    //     mysqli_close($con);
    //     return $status;
    // }
    
    function deleteNotice($id) {
        $con = getConnection();
        $sql = "DELETE FROM notice WHERE id = $id";
        $status = mysqli_query($con, $sql);
        mysqli_close($con);
        return $status;
    }

    function findById($id) {
        $con = getConnection();
        $sql = "SELECT * FROM notice WHERE id = $id";
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