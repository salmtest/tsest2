<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/close_db.php';

?>

<?php include "./parts/header.php" ?>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <img src="./images/u0yq_lraf_210929.jpg" alt="">
        <h1 class="display-4 fw-normal">اربح مع سالم محمد ال سلطان</h1>
        <p class="lead fw-normal">باقي علي فتح التسجيل </p>
        <h3 id="demo"></h3>
        <p class="lead fw-normal"> للسحب علي ربح نسخه مجانيه </p>
        </p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
</div>


<ul class="list-group list-group-flush">
    <h2>للدخول في السحب اتبع ما يلي : </h2>
    <li class="list-group-item">تابع البث المباشر لصفحتي علي فيسبوك بالتاريخ المذكور اعلاه
    </li>
    <li class="list-group-item">ساقوم ببث مباشر لمدة ساعه </li>
    <li class="list-group-item">خلال فتره الساعه سيتم فتح التسجيل
    </li>
</ul>


<div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الاسم الاول </label>
                <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" value="<?= $firstName ?>" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text error"><?= $errors['firstNameError'] ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الاسم الاخير </label>
                <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" value="<?= $lastName ?>" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text error"><?= $errors['lastNameError'] ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">الايميل الالكتروني </label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?= $email ?>" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text error "> <?= $errors['emailError'] ?></div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات </button>
        </form>
    </div>
</div>


<div class="loader-con">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>

<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button type="button" id="winner" class="btn btn-primary">
        اختيار الرابح
    </button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">الرابح في المسابقة </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php foreach ($users as $user) : ?>

                    <h5 class="card-title display-1 text-center"><?php echo htmlspecialchars($user['firstName'] . ' ' . htmlspecialchars($user['lastName'])); ?></h5>

                <?php endforeach; ?>

            </div>

        </div>
    </div>
</div>


<?php include "./parts/footer.php" ?>