<?php 
    include_once './common/connectDB.php';
    $database = new Connection();
    $db = $database->openConnection();

    if(isset($_POST['query'])){
        $id=$_POST['query'];
        $sql="SELECT codCliente,nomeCliente FROM cliente WHERE codCliente LIKE '%$id%'";
        $result =$db->query($sql);

        if($result->rowCount()>0){
            while($row=$result->fetch(PDO::FETCH_ASSOC)){

                echo "<a href='#' class='list-group-item list-group-item-action'  id='selection'>".$row['codCliente']."-".$row['nomeCliente']."</a>";
            }
        }
        else {
            echo "<p class='list-group-item'>Cliente não encontrado</p>";
        }
    }

?>