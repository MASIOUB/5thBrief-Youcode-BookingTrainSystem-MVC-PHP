<?php
require_once dirname(__DIR__) . "/../includes/header.php";
?>

<h1>list trip</h1>
<?php
// echo json_encode($trips);
?>

<section id="hero" class=" w-100 text-dark py-5">
    <div class="container m-0 w-100 py-5 d-flex justify-content-around ">
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
                foreach ($trips as $key) : ?>
                    <tbody>
                        <tr>

                            <td><?= $key["date_trip"] ?></td>
                            <td><?= $key["start_time"] ?></td>
                            <td><?= $key["start_station"] ?></td>
                            <td><?= $key["return_station"] ?></td>
                            <td><?= $key["price"] ?></td>
                        </tr>

                    </tbody>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
</section>

<?php
require_once dirname(__DIR__) . "/../includes/footer.php";
?>