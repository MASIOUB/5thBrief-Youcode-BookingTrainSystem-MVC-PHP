<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>create trip</title>
</head>
<body>
	<form action="http://localhost/my-projects/train/trip/save" method="POST">
		<label>date of trip</label>
		<input type="date" name="date_trip"><br>
		<label>start time</label>
		<input type="time" name="start_time"><br>
        <label>return time</label>
		<input type="time" name="return_time"><br>
        <label>start station</label>
		<input type="text" name="start_station"><br>
        <label>return station</label>
		<input type="text" name="return_station"><br>
        <label>price</label>
		<input type="number" name="price"><br>
		<button>save</button>
	</form>
</body>
</html>