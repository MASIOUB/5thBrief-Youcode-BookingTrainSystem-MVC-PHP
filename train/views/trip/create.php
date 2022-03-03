<?php

require_once './views/includes/header.php'

?>

<div class="contaner p-5">

	<form action="http://localhost/my-projects/train/trip/saveTrip" method="POST" class="mr-1 d-flex flex-column gap-2">
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

</div>
<?php

require_once './views/includes/footer.php'

?>