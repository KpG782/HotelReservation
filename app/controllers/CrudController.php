<?php
class CrudController extends Controller {
    private $model;

    private const ROOM_RATES = [
        "Single" => ["Regular" => 100, "De Luxe" => 300, "Suite" => 500],
        "Double" => ["Regular" => 200, "De Luxe" => 500, "Suite" => 800],
        "Family" => ["Regular" => 500, "De Luxe" => 750, "Suite" => 1000],
    ];

    public function __construct(){
        // load our ReservationModel
        $this->model = $this->model("ReservationModel");
    }

    public function index(){
        // handle form submits
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // create or update
            if (isset($_POST['create']) || isset($_POST['update'])) {
                // sanitize & fetch
                $c  = htmlspecialchars($_POST['customer_name']);
                $cn = htmlspecialchars($_POST['contact_number']);
                $from = $_POST['from_date'];
                $to   = $_POST['to_date'];

                // compute days
                $days = (strtotime($to) - strtotime($from)) / (60*60*24);
                if ($days < 1) $days = 1;

                $rt = htmlspecialchars($_POST['room_type']);
                $rc = htmlspecialchars($_POST['room_capacity']);
                $pt = htmlspecialchars($_POST['payment_type']);

                // rate & subtotal
                $rate = self::ROOM_RATES[$rc][$rt] ?? 0;
                $subtotal = $rate * $days;

                // discount (family)
                $discount = 0;
                if ($rc === "Family") {
                    if ($days >= 3 && $days <= 5) $discount = 0.10 * $subtotal;
                    elseif ($days >= 6)         $discount = 0.15 * $subtotal;
                }

                // extra charge
                $extra = 0;
                if ($pt === "Credit Card") $extra = 0.10 * $subtotal;
                elseif ($pt === "Cheque")  $extra = 0.05 * $subtotal;

                $total = $subtotal - $discount + $extra;

                // build payload
                $data = [
                    'customer_name'  => $c,
                    'contact_number' => $cn,
                    'from_date'      => $from,
                    'to_date'        => $to,
                    'room_type'      => $rt,
                    'room_capacity'  => $rc,
                    'payment_type'   => $pt,
                    'days'           => $days,
                    'subtotal'       => $subtotal,
                    'discount'       => $discount,
                    'extra_charge'   => $extra,
                    'total_bill'     => $total
                ];

                if (isset($_POST['create'])) {
                    $this->model->create($data);
                } else {
                    $this->model->update((int)$_POST['id'], $data);
                }

                header("Location: " . BASE_URL . "/crud/index");
                exit;
            }

            // delete
            if (isset($_POST['delete'])) {
                $this->model->delete((int)$_POST['id']);
                header("Location: " . BASE_URL . "/crud/index");
                exit;
            }
        }

        // load view data
        $all   = $this->model->getAll();
        $count = $this->model->countAll();
        $sum   = $this->model->sumIncome();

        $this->view("crud/index", [
            'reservations'      => $all,
            'total_reservations'=> $count,
            'total_income'      => $sum
        ]);
    }
}
