<?php

$data = new StationsController();
$stations = $data->getAllStations();
print_r($stations)

?>

<!-- hero -->

<section id="hero" class="bg-dark text-dark py-5">
    <div class="container" >
        <div class="d-flex">
            <div class="w-50 mx-auto">
                <div>
                    <h1>Where do you want to go?</h1>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet nunc molestie, elementum eros a, pretium leo. Aenean id neque id mauris viverra vehicula aliquet et arcu. Nam molestie nunc est. Etiam tempor aliquet ligula, faucibus sollicitudin neque blandit ut.</p>
                </div>
            </div>


            <div class="w-50 mx-auto">
                <div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Start Station</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Return Station</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Start Date</label>
                    <input class="form-control form-control-lg" type="date" placeholder="" aria-label=".form-control-lg example">
                </div>
                <div class="d-grid gap-2 mx-auto my-1">
                    <button class="btn btn-primary" type="button">Search</button>
                </div>
            </div>

        </div>
    </div>
</section>