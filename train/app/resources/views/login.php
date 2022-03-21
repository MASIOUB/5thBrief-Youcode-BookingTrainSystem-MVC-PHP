<?php
require_once dirname(__DIR__) . "/includes/header.php";
?>
<div class="wrapper">
    <div class="d-flex flex-column align-items-center">
        <h1>Login</h1>
        <form class="d-flex flex-column align-items-center" method="post">
            <div class="mb-3 row">
                <label for="staticUsername" class="form-label">Username</label><br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticUsername" value="admin" name="username">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" name="password">
                </div>
            </div>
            <button name="submit" class="btn text-light">submit</button>
        </form>
    </div>
</div>
<?php
require_once dirname(__DIR__) . "/includes/footer.php";
?>