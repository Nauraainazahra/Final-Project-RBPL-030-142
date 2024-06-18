<?php
include 'config.php';

$id = $_POST['id'];

$sql = "DELETE FROM datapelanggan WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data pelanggan berhasil dihapus.";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: index.php");
?>
