<?php 
    include_once './common/connectDB.php';
    $database = new Connection();
    $db = $database->openConnection();

    if(isset($_POST['query'])){
        $nome=$_POST['query'];
        $sql="SELECT codCliente,nomeCliente FROM cliente WHERE nomeCliente LIKE '%$nome%'";
        $result =$db->query($sql);

        if($result->rowCount()>0){
            while($row=$result->fetch(PDO::FETCH_ASSOC)){

                echo "<a href='#' class='list-group-item list-group-item-action' id='selectionN'>".$row['nomeCliente']."</a>";
            }
        }
        else {
            echo "<p class='list-group-item'>Cliente não encontrado</p>";
        }
    }

?>