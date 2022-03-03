<?php

require_once './views/includes/header.php'

?>

    <table  class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>date</th>
                <th>start time</th>
                <th>return time</th>
                <th>start station</th>
                <th>return station</th>
                <th>price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($trips as $trip) {
                echo 
                    "<tr>
                        <td>" . $trip['id_trip'] . "</td>
                        <td>" . $trip['date_trip'] . "</td>
                        <td>" . $trip['start_time'] . "</td>
                        <td>" . $trip['return_time'] . "</td>
                        <td>" . $trip['start_station'] . "</td>
                        <td>" . $trip['return_station'] . "</td>
                        <td>" . $trip['price'] . "</td>
                        <td>
                            <button class='btn btn-sm btn-warning'>
                                <a href='http://localhost/my-projects/train/trip/edit/" . $trip['id_trip'] . "'>
                                    <i class='fas fa-edit text-black'></i>
                                </a>
                            </button>
                            <button class='btn btn-sm btn-danger'>
                                <a href='http://localhost/my-projects/train/trip/delete/" . $trip['id_trip'] . "'>
                                    <i class='fas fa-trash text-black'></i>
                                </a>
                            </button>
                        <td>
                    </tr>";
            }
            ?>
        </tbody>

    </table>
</body>

</html>