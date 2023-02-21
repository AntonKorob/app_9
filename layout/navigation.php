<!-- navbar -->
<div class="bg-info p-2">
    <img class="float-start rounded " src="img/logo.png" alt="qqqq">

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 text-end mb-md-0">
            <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="about.php" class="nav-link px-2 link-dark">About</a></li>
       
        </ul>
        <div class="col-md-3 text-end">
        <?php if($_COOKIE['user'] = 'yes'): ?>
        <a class="btn btn-outline-primary " href="login.php">Logout</a>
        <?php else: ?>
        <a class="btn btn-outline-primary " href="login.php">Login</a>
        <?php endif; ?>
        </div>

    </header>
</div>