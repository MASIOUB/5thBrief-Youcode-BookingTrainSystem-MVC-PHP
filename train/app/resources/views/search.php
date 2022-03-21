<?php
require_once dirname(__DIR__) . "/includes/header.php";
?>

<section class="trip w-100 py-5">
        <div class="partie1 d-flex flex-column gap-4">
            <h1 class=" text-center">Find For A Trip</h1>

            <form class="d-flex align-items-center gap-4 p-4 form text-dark" method="GET">
                <div>
                    <label for="formFileLg" class="form-label">Date Of Trip</label>
                    <input type="date" name="date_trip" value="<?=$_GET["date_trip"] ?? ""?>" placeholder="Date Of Trip">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Start Station</label>
                    <input type="text" name="start_station" value="<?=$_GET["start_station"] ?? ""?>" placeholder="Start Station">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Return Station</label>
                    <input type="text" name="return_station" value="<?=$_GET["return_station"] ?? ""?>" placeholder="Return Station">
                </div>
                <div class="mx-auto my-1 align-self-end">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php if (isset($voyages)):?>

<section id="hero" class=" w-100 text-dark py-5">
    <div class="m-0 w-100 py-5 d-flex justify-content-around ">
        <div class="partie1 d-flex flex-column gap-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Start Station</th>
                        <th scope="col">Return Station</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <?php
                foreach ($voyages as $voyage) : ?>
                    <tbody>
                        <tr>

                            <td><?= $voyage["date_trip"] ?></td>
                            <td><?= $voyage["start_time"] ?></td>
                            <td><?= $voyage["start_station"] ?></td>
                            <td><?= $voyage["return_station"] ?></td>
                            <td><?= $voyage["price"] ?></td>
                        </tr>

                    </tbody>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
</section>
<?php endif?>


<?php
require_once dirname(__DIR__) . "/includes/footer.php";
?>