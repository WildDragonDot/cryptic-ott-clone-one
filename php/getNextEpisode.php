<?php
session_start();
require_once('link.php');
    $data = array();
    if (isset($_POST['course_id'])) {
        $course_id = mysqli_real_escape_string($con, $_POST['course_id']);//1
        $module_id = mysqli_real_escape_string($con, $_POST['module_id']);//1
        $episode_no = mysqli_real_escape_string($con, $_POST['episode_no']);//1
        $episode_no = intval($episode_no) + 1;

        $result2 = mysqli_query($con, "SELECT * FROM `web-series-episodes-info` WHERE `module`='$module_id' AND `episode_no`='$episode_no' LIMIT 1");
        if (mysqli_num_rows($result2) > 0 ) {
            while ($row = mysqli_fetch_assoc($result2)) {
            $data['status'] = 201;
            $data['course_id'] = $row['video_uuid'];
            $data['module_id'] = $row['module'];
            echo json_encode($data);
            }
        }else{
            $data['status'] = 601;
            $data['course_id'] = NULL;
            $data['module_id'] = NULL;
            echo json_encode($data);
        }
            
    }
?>