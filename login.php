<?php
session_start();

// page login
include 'layout/header.php';
include 'layout/navigation.php';
include 'config.php';

?>
<div class="conteriner">
    <?php
    if (empty($_COOKIE['user'])):
    ?>
        <div class="col">
            <?php include 'form_auth.php'; ?>
        </div>
        <div class="col">
            <?php include 'form_login.php'; ?>
        </div>
</div>
<?php else : ?>
    <p>Hello <?= $_COOKIE['user']; ?>. <a href="exit.php">Exit here</a></p>
<?php endif; ?>
<?php
include 'layout/footer.php';
?>