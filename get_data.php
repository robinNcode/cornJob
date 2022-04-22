<?php
include 'db_connect.php';

function getEntry()
{
    global $conn;
    //get data from info table
    $sql = "SELECT * FROM info ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    $template = '';
    while($user = mysqli_fetch_assoc($result)){
        $template .= '<tr>';
        $template .= '<td>' . $user['id'] . '</td>';
        $template .= '<td>' . $user['name'] . '</td>';
        $template .= '<td>' . $user['phone'] . '</td>';
        $template .= '<td>' . $user['created_at'] . '</td>';
        $template .= '</tr>';
    }
    var_dump($template);
    return $template;
}

getEntry();