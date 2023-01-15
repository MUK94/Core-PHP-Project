<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Page Details'; ?>
<?php include SHARED_PATH . '/staff_header.php'; ?>

<?php
    $id = $_GET['id'] ?? 1;

    // echo h_enc($id);
?>


<div class="page show" id="content">
    <a href="<?php echo url_for('/staff/pages/index.php')?>">&laquo; Back to List</a>

    <p>Page ID: <?php echo h_enc($id)?></p>

</div>