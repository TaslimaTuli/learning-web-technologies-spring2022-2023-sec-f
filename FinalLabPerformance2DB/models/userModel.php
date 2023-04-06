<?php 
    require_once('db.php');

    function add($p){
        $con = getConnection();
        $sql = "insert into products(name, buy, sell, profit) values('{$p['name']}', '{$p['buy']}', '{$p['sell']}', '{$p['profit']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function show(){
        $con = getConnection();
        $sql = "SELECT * FROM products";
        $status = mysqli_query($con, $sql); 
        return $status;
    }
    function dlt($name){
        $con = getConnection();
        $sql = "DELETE FROM product WHERE name = $name";
        $status = mysqli_query($con, $sql); 
        return $status;
    }
    function edit($e){
        $con = getConnection();
        $sql = "UPDATE products SET values('{$e['name']}', '{$e['buy']}', '{$e['sell']}')";
        $status = mysqli_query($con, $sql); 
        return $status;
    }
    


?>