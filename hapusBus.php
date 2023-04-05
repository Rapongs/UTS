<?php 
    include ('function.php');

    $id = $_GET["id_bus"];

    if(hapusBus($id) > 0){
        echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
    } else{
    echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
    }
?>