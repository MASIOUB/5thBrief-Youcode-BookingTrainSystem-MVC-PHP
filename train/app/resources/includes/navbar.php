<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?= createLink("/") ?>">Traveler Train</a>
    <button class="navbar-toggler menu-btn text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= createLink("/") ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= createLink("/booking") ?>">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= createLink("/History") ?>">History</a>
            </li>
        </ul>
        <ul class="navbar-nav gap-1">
            <?php if (isLoggedIn()) : ?>
                <span class="mr-3 text-light align-self-center ">Welcome back, <?php echo $_SESSION['username'] 
                                                                                ?></span>
                <li class="btn"><a class=" text-light" href="#">Logout</a></li>

            <?php else : ?>
                <li class="btn mx-0"><a class=" text-light" href="<?= createLink("/login") ?>">Login</a></li>
                <li class="btn btn-secondary mx-0"><a class=" text-light" href="register">Register</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>