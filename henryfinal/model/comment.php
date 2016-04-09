<?php
include("connect.php");

function insert_comment(){
    global $db;
    $query = "INSERT INTO comments (comment_txt, user_id, image_id) VALUES ('".$_POST['comment']."', '".$_POST['user_id']."', '".$_POST['image_id']."')";
    $result = $db->query($query);
}

function get_comments(){
    global $db;
    $query = "SELECT comments.comment_txt, comments.user_id, users.username 
    FROM comments 
    LEFT JOIN users ON comments.user_id = users.id
    WHERE image_id = '".$_POST['image_id']."' ";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}


?>