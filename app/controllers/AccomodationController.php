<?php
// app/controllers/AccomodationController.php

class AccomodationController extends Controller
{
    public function index()
    {
        // If the form was submitted...
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Trim and grab all fields
            $req = array_map('trim', $_POST);
            $fields = [
                'customer_name',
                'contact_number',
                'from_date',
                'to_date',
                'room_type',
                'room_capacity',
                'payment_type',
            ];
            // Validate presence
            foreach ($fields as $f) {
                if (empty($req[$f])) {
                    echo "<script>alert('Please fill out all required fields!');</script>";
                    return $this->view('accomodation/index');
                }
            }
            // Date logic
            if ($req['to_date'] <= $req['from_date']) {
                echo "<script>alert('The checkout date must be at least one day after the check-in date!');</script>";
                return $this->view('accomodation/index');
            }
            // Build query string and redirect
            $qs = http_build_query([
                'name'          => $req['customer_name'],
                'contact'       => $req['contact_number'],
                'from'          => $req['from_date'],
                'to'            => $req['to_date'],
                'room_type'     => $req['room_type'],
                'room_capacity' => $req['room_capacity'],
                'payment'       => $req['payment_type'],
            ]);
            header('Location: ' . BASE_URL . "/billing?{$qs}");
            exit;
        }

        // On GET, just show the form
        $this->view('accomodation/index');
    }
}
