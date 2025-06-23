<?php
// app/controllers/ReservationController.php
class ReservationController extends Controller
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $req = array_map('trim', $_POST);
            $name     = htmlspecialchars($req['customer_name'] ?? '');
            $contact  = htmlspecialchars($req['contact_number'] ?? '');
            $from     = $req['from_date'] ?? '';
            $to       = $req['to_date'] ?? '';
            $type     = htmlspecialchars($req['room_type'] ?? '');
            $capacity = htmlspecialchars($req['room_capacity'] ?? '');
            $payment  = htmlspecialchars($req['payment_type'] ?? '');

            // validation
            if (!$name || !$contact || !$from || !$to || !$type || !$capacity || !$payment) {
                echo "<script>alert('Please fill out all required fields!');</script>";
                return $this->view('reservation/index');
            }
            if ($to <= $from) {
                echo "<script>alert('The checkout date must be at least one day after the check-in date!');</script>";
                return $this->view('reservation/index');
            }

            // redirect with query string
            $qs = http_build_query([
                'name'          => $name,
                'contact'       => $contact,
                'from'          => $from,
                'to'            => $to,
                'room_type'     => $type,
                'room_capacity' => $capacity,
                'payment'       => $payment,
            ]);

            header('Location: ' . BASE_URL . "/billing?{$qs}");
            exit;
        }

        $this->view('reservation/index');
    }
}
