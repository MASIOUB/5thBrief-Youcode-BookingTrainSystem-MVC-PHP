<?php
class  BookingController
{

    private $trainModel;
    private $bookingModel;
    private $tripModel;
    public function __construct()
    {
        $this->trainModel = new Train();
        $this->tripModel = new Trip();
        $this->bookingModel = new Booking();
    }

    public function index()
    {
        view("booking");
    }

    public function create($id_trip)
    {
        // $infoVoyage = $this->voyageModel->fetchAllWithJoin("where voyage.id =:id", "join train on train.id = voyage.trainId", ["id" => $voyageId]);
        $trip = $this->tripModel->fetchById($id_trip);
        if (!$trip) {
            return redirect("/");
        }
        $train = $this->trainModel->fetchOne("where id = :id", ["id" => $trip["id_train"]]);
        if (isPostRequest()) {
            // save reservation with $_POST
            // if(!isLoggedIn()){
                // return redirect("/register/guest")
            // }
            
            $bookingData = [
                "id_user"=> currentUserId(),
                "id_trip" => $id_trip,
                ...$_POST // spread operator
            ];
            $isBookingCreated = $this->bookingModel->create($bookingData);
            if($isBookingCreated){
                return redirect("/");
            }
        
            return redirect("/booking/create/$id_trip");
        } else {
            return view("booking", ["trip" => $trip, "train" => $train]);
        }



        // check if voyage exists
        // create reservation
        // redirection to user/reservation 
    }
}