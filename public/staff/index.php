<?php require_once('../../private/initialize.php') ?>

<?php $page_title = 'Staff Menu';?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

    <div id="content">
        <div id="main-menu">
            <h2>Main Menu</h2>
            <ul>
                <li><a href="<?php echo url_for('staff/subjects/index.php')?>">Subjects</a></li>
                <li><a href="<?php echo url_for('staff/pages/index.php')?>">Pages</a></li>
            </ul>
        </div>

        <strong>FILE PATHS</strong>: <br>
        <?php echo 'SHARED PATH: ' . SHARED_PATH;?> <br>
        <?php echo 'PRIVATE PATH:  ' . PRIVATE_PATH;?> <br> 
        <?php echo 'PUBLIC PATH: ' . PUBLIC_PATH;?> <br>
        <?php echo 'PROJECT PATH: ' . PROJECT_PATH;?> <br>
    </div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
