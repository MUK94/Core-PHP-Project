<?php require_once('../../../private/initialize.php');
    
    if(!isset($_GET['id'])) {
        redirect_to(url_for('/staff/pages/index.php'));
    }

    $id = $_GET['id'];
    $page_name = "";
    $visible = "";

    if (is_post_request()) {

        $page_name = $_POST['page_name'] ?? '';
        $visible = $_POST['visible'] ?? '';

        echo 'Form Parameters <br>';
        echo 'Page Name: ' . $page_name . '<br>';
        echo 'Visible: ' . $visible . '<br>';
    }

?>

<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <a href="<?php echo url_for('/staff/pages/index.php');?>" class="back-link">&laquo; Back to Pages</a>
    <!-- Displaying Form -->
    <div class="pages new">
        <h1>Edit Page</h1>

        <form action="<?php echo url_for('/staff/pages/edit.php?id=' . u_enc(h_enc($id))); ?>" method="post">
            <dl>
                <dt>Page Name</dt>
                <dd>
                    <input type="text" name="page_name" value="<?php echo $page_name; ?>" />
                </dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd>
                    <input type="hidden" name="visible" value="0" />
                    <input type="checkbox" name="visible" value="1" />
                </dd>
            </dl>
            <div id="operations">
                <input type="submit" value="Create Page" />
            </div>
        </form>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>