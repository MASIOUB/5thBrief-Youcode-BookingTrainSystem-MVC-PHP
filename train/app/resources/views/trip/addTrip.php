

<section class="trip w-100 py-5">
        <div class="partie1 d-flex flex-column gap-4">
            <h1 class=" text-center">add trip</h1>

            <form class="d-flex align-items-center gap-4 p-4 form text-dark" method="POST">
                <div>
                    <label for="formFileLg" class="form-label">Date Of Trip</label>
                    <input type="date" name="date_trip" placeholder="Date Of Trip">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Time</label>
                    <input type="time" name="start_time" placeholder="Time">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Start Station</label>
                    <input type="text" name="start_station" placeholder="Start Station">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Return Station</label>
                    <input type="text" name="return_station" placeholder="Return Station">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Price</label>
                    <input type="number" name="price" placeholder="Price">
                </div>
                <div class="mx-auto my-1 align-self-end">
                    <button class="btn" type="submit">add</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
require_once dirname(__DIR__) . "/../includes/footer.php";
?>