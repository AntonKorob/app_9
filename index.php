<?php session_start();
// index
include 'layout/header.php';
?>

<body>
    <?php include 'layout/navigation.php' ?>

    <div class="col">
        <div class="d-flex flex-wrap ">
            <?php
            for ($i = 0; $i < 6; $i++) :
            ?>
                <div class="col-3 m-5">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Free</h4>
                        </div>
                        <div class="card-body">
                            <img src="img/<?php echo ($i + 1) ?>.png" class="img-thumbnail">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                        </div>
                    </div>
                </div>
            <?php
            endfor
            ?>
        </div>
    </div>

    <?php include 'layout/footer.php' ?>
</body>

</html>