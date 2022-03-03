<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>

    
    <form action="http://localhost/my-projects/train/trip/update" method="POST">
        <label>date of trip</label>
        <input type="date" name="date_trip" value="<?= $trip['date_trip']; ?>"><br>
        <label>start time</label>
        <input type="time" name="start_time" value="<?= $trip['start_time']; ?>"><br>
        <label>return time</label>
        <input type="time" name="return_time" value="<?= $trip['return_time']; ?>"><br>
        <label>start station</label>
        <input type="text" name="start_station" value="<?= $trip['start_station']; ?>"><br>
        <label>return station</label>
        <input type="text" name="return_station" value="<?= $trip['return_station']; ?>"><br>
        <label>price</label>
        <input type="number" name="price" value="<?= $trip['price']; ?>"><br>
        <a href="http://localhost/my-projects/train/trip/update/<?php echo $trip['id_trip'] ?> ">update</a>
    </form>

    
</body>

</html>