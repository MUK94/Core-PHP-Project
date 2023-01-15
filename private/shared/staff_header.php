<?php if(!isset($page_title)) {
  $page_title = 'Staff Area';
}?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo url_for('/stylesheets/staff.css')?>">
  <title>GBI - <?php echo h_enc($page_title); ?></title>
</head>
<body>
  <header>
    <h1>GBI Staff Area</h1>
  </header>
  <nav>
    <ul>
      <li><a href="<?php echo WWW_ROOT . '/staff/index.php'; ?>">Menu</a></li>
    </ul>
  </nav>