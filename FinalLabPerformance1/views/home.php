<?php
    session_start();
   
?>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<table border="1" width=100%>
        <tr height="100px">
            <th width=20%>
        
            </th>
            <th align="middle">
                <h2>Dashboard</h2>
            </th>
            <th width=20%>
            Logged in as <a href="view.php"><?php if(isset($_SESSION['username'])){
            echo($_SESSION['username']);}  ?></a> |
                <a href="../controllers/logout.php">Logout</a> 
            </th>
        </tr>

        <tr >
            <td width=20%>
                <table width=100%>
                   
                    <tr>
                        <td>
                            <ul>
                                
                               
                               
    
                            </ul>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2" align="center">
                <table border="1" width="100%" height="90px">

                    <tr align="center" >
                    <h3>Specifications</h3>
                        <th >No.</th>
                        <th>Specification Name</th>
                        <th >Specification Role</th>
                        <th>Screen Defination</th>
                        <th >User Story</th>
                        <th >Acceptance Criterea</th>
                        <th >UI Screen/Wireframe</th>
                        <th >Tags</th>

                       
                    </tr> 
                        
                </table>


            </td>
        </tr>
</table>
</body>
</html>
<?php 
    
?>
