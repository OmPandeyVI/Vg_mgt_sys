<?php
include '../PhpFiles/connection.php';

if (!isset($_POST['note_id'], $_POST['note_title'], $_POST['note_content'])) {
    echo 'Missing required form fields.';
    exit;
}

$note_id = mysqli_real_escape_string($conn, $_POST['note_id']);
$note_title = mysqli_real_escape_string($conn, $_POST['note_title']);
$note_content = mysqli_real_escape_string($conn, $_POST['note_content']);

$query = "UPDATE tbl_pin_board SET pinboard_title = '$note_title', pinboard_content = '$note_content' WHERE pinboard_id = '$note_id'";

if (mysqli_query($conn, $query)) {
    echo 'success';
} else {
    echo 'Database error: ' . mysqli_error($conn);
}
?>
