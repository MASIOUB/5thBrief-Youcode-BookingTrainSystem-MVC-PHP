<?php
require_once dirname(__DIR__) . "/includes/header.php";
?>

<h1>reservation page for trip id "<?= $trip["id"] ?>"</h1>
<div>form creation de reservation</div>


<section class="containerForm">

    <form action="" class="formReservation  form-control" method="POST">
        <label class="col-sm-2 col-form-label">name of train</label>
        <input type="text" placeholder="" name="name_train" value="<?= $train["name"] ?>" readonly>
        <label class="col-sm-2 col-form-label">date of trip</label>
        <input type="date" placeholder="" name="date" value="<?= $trip["date_trip"] ?>" readonly>
        <label class="col-sm-2 col-form-label">time</label>
        <input type="time" placeholder="" name="time" value="<?= $trip["start_time"] ?>" readonly>
        <label class="col-sm-2 col-form-label">start station</label>
        <input type="text" placeholder="" name="start_station" value="<?= $trip["start_station"] ?>" readonly>
        <label class="col-sm-2 col-form-label">return station</label>
        <input type="text" placeholder="" name="return_station" value="<?= $trip["return_station"] ?>" readonly>
        <label class="col-sm-2 col-form-label">price</label>
        <input type="number" class="form-control-plaintext" placeholder="" value="<?= $trip["price"] ?>" readonly>
        <!-- required to create a reservation (data mahatjin liha bach n crée reservation) -->
        <label class="col-sm-2 col-form-label">class</label>
        <div class="mb-3 form-check">
            <select class="form-select" aria-label="Default select example" name="class" id="class">
                <?php
                $confort = ["first class", "second class", "bed class"];
                foreach ($confort as $class) : ?>
                    <option value="<?= $class ?>"><?= $class ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <label class="form-label">number of places</label>
        <input type="number" class="form-control" value="1" min="1" name="number_seat">
        <!-- <label for="datetime" class="form-label">date de reservation</label>
        <input type="datetime-local" class="form-control" value="datetime-local" name="date"> -->
        <!-- required to create a reservation -->
        <button class="btn btn-secondary">book </button>

    </form>
</section>

<?php
require_once dirname(__DIR__) . "/includes/footer.php";
?>