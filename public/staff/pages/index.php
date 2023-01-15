<?php require_once('../../../private/initialize.php') ?>

<?php 
    $pages = [
        ['id' => '1', 'visible' => '1', 'page_name' => 'Home'],
        ['id' => '2', 'visible' => '1', 'page_name' => 'Services'],
        ['id' => '3', 'visible' => '1', 'page_name' => 'Projects'],
        ['id' => '5', 'visible' => '1', 'page_name' => 'Contact'],
    ]
?>

<?php $page_title = 'Pages'; ?> 

<?php include SHARED_PATH . '/staff_header.php'; ?>

<!-- Content -->
<div id="content">
    <div class="pages">
        <h1>Pages</h1>

        <div class="actions">
            <a href="" class="action">Add New Page</a>
        </div>

        <!-- Listing Pages -->
        <table class="list">
            <tr>
                <th>ID</th>
                <th>Visible</th>
                <th>Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($pages as $page){?>
                <tr>
                    <td><?php echo h_enc($page['id']); ?></td>
                    <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
                    <td><?php echo h_enc($page['page_name']); ?></td>
                    <td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . $page['id']); ?>">View</a></td>
                    <td><a class="action" href="">Edit</a></td>
                    <td><a class="action" href="">Delete</a></td>
                </tr>
            <?php }?>


        </table>

    </div>
</div>

<?php include SHARED_PATH . '/staff_footer.php'; ?>