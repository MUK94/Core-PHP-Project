<?php require_once('../../../private/initialize.php'); ?>

<?php 
    $page_title = 'Create Page';
?>
<?php include(SHARED_PATH . '/staff_header.php');?>

<?php

    if (is_post_request()) {

        $page_name = $_POST['page_name'] ?? '';
        $visible = $_POST['visible'] ?? '';
    
        echo 'Form Parameters <br>';
        echo 'Page Name: ' . $page_name . '<br>';
        echo 'Visible: ' . $visible . '<br>';
    }else {
        redirect_to(url_for('/staff/pages/index.php'));
    }

?>