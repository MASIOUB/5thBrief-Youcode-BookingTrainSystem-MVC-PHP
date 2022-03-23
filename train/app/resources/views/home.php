<?php
require_once dirname(__DIR__) . "/includes/header.php";
?>



<link rel="stylesheet" href="styles/home.css">

<div class="wrapper">
    <div class="row header">
        <div class="col-md-6">
            <div class="feature-box text-center w-100">
                <h1 class="">Where do you want to go?</h1>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt eleifend neque vel commodo.</p> -->
                <!-- <a href="#" class="text-light btn mx-0">Book Now</a> -->
                <div>

                    <form class="d-flex flex-column align-items-center gap-4 p-4 form text-dark w-100" method="GET">
                        <div class=" d-flex justify-content-between w-100">
                            <label for="formFileLg" class="form-label">Date Of Trip</label>
                            <input type="date" name="date_trip" value="<?= $_GET["date_trip"] ?? "" ?>" placeholder="Date Of Trip" class="col-md-6">
                        </div>
                        <div class=" d-flex justify-content-between w-100">
                            <label for="formFileLg" class="form-label">Start Station</label>
                            <input type="text" name="start_station" value="<?= $_GET["start_station"] ?? "" ?>" placeholder="Start Station" class="col-md-6">
                        </div>
                        <div class=" d-flex justify-content-between w-100">
                            <label for="formFileLg" class="form-label">Return Station</label>
                            <input type="text" name="return_station" value="<?= $_GET["return_station"] ?? "" ?>" placeholder="Return Station" class="col-md-6">
                        </div>
                        <div class="mx-auto my-1 align-self-end">
                            <button class="btn text-light" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="images/clip-travelling-by-train.png" class="feature-img">
        </div>
    </div>
</div>
<div class="row ">

    <?php if (isset($tripExist)) :
        echo "<h1 class='text-center'>" . $_GET["date_trip"] . "</h1>";
        foreach ($tripExist as $key) :
    ?>
                <div class="wrapper p-0 row text-center col-md-4">
                    <div class="card-header w-100">
                        <?= "Price:" . $key["price"] ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= "Station Start:" . $key["start_station"] ?></p>
                        <p class="card-text"><?= "Return Start:" . $key["return_station"] ?></p>
                        <p class="card-text"><?= "Start Time:" . $key["start_time"] ?></p>
                        <!-- <input type="hidden" > -->
                        <a class="btn text-light" href="<?= createLink("booking/create/" . $key["id"]) ?>">Book</a>
                    </div>
                </div>
    <?php endforeach;
    endif; ?>

    

</div>

<?php
require_once dirname(__DIR__) . "/includes/footer.php";
?>