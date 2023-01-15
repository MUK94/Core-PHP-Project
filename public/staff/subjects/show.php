<?php require_once('../../../private/initialize.php') ?>
<?php require_once('../../../private/functions.php') ?>

<?php $page_title = 'Subject Details'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>


<?php

    $id = $_GET['id'] ?? '1'; // PHP > 7.0

    // echo h_enc($id);
?>

<div class="subject show" id="content">
    
    <div class="back">
        <a href="<?php echo url_for('/staff/subjects/index.php') ?>">&laquo; Back to Subjects</a>
    </div>

    <div class="links">
        <a href="show.php?name=<?php echo u_enc('John Doe');?>">Link</a> <br>
        <a href="show.php?company=<?php echo u_enc('Widgets&More');?>">Link</a> <br>
        <a href="show.php?query=<?php echo u_enc('!#@?');?>">Link</a> <br>
    </div>

</div>