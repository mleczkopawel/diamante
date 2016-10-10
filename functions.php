<?php
/**
 * Created by PhpStorm.
 * User: mlecz
 * Date: 10.10.2016
 * Time: 21:29
 */

if ($_POST['search']) {
    $searchData = $_POST['search'];
    $query = "SELECT * FROM wp_post WHERE title LIKE '%" . $searchData . "%' OR content LIKE '%" . $searchData . "%'";

    $result = $wpdb->query($query);

    $result = json_encode($result);

    echo $result;
}