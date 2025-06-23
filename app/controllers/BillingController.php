<?php
// app/controllers/BillingController.php

class BillingController extends Controller {
    public function index() {
        // redirect back if no params
        if (!isset($_GET['name'], $_GET['contact'], $_GET['from'], $_GET['to'], $_GET['room_type'], $_GET['room_capacity'], $_GET['payment'])) {
            header('Location: ' . BASE_URL . '/accomodation/index');
            exit;
        }

        // sanitize
        $name         = htmlspecialchars($_GET['name']);
        $contact      = htmlspecialchars($_GET['contact']);
        $from         = htmlspecialchars($_GET['from']);
        $to           = htmlspecialchars($_GET['to']);
        $room_type    = htmlspecialchars($_GET['room_type']);
        $room_capacity= htmlspecialchars($_GET['room_capacity']);
        $payment      = htmlspecialchars($_GET['payment']);

        // compute days
        $start = new DateTime($from);
        $end   = new DateTime($to);
        $days  = max(1, $start->diff($end)->days);

        // rates matrix
        $rates = [
          'Single'=> ['Regular'=>100,'De Luxe'=>300,'Suite'=>500],
          'Double'=> ['Regular'=>200,'De Luxe'=>500,'Suite'=>800],
          'Family'=> ['Regular'=>500,'De Luxe'=>750,'Suite'=>1000],
        ];
        $rate_per_day = $rates[$room_capacity][$room_type] ?? 0;
        $subtotal     = $rate_per_day * $days;

        // discount
        $discount = 0;
        if ($room_capacity==='Family') {
          if ($days>=6)    $discount = 0.15*$subtotal;
          elseif ($days>=3)$discount = 0.10*$subtotal;
        }

        // surcharge
        $surcharge = 0;
        if ($payment==='Credit Card') $surcharge = 0.10*$subtotal;
        elseif ($payment==='Cheque')   $surcharge = 0.05*$subtotal;

        $total = $subtotal - $discount + $surcharge;

        // persist
        $model = $this->model('BillingModel');
        $model->insert([
          'customer_name'  => $name,
          'contact_number' => $contact,
          'from_date'      => $from,
          'to_date'        => $to,
          'room_type'      => $room_type,
          'room_capacity'  => $room_capacity,
          'payment_type'   => $payment,
          'days'           => $days,
          'subtotal'       => $subtotal,
          'discount'       => $discount,
          'total_bill'     => $total,
        ]);

        // format for display
        $data = [
          'name'      => $name,
          'contact'   => $contact,
          'from'      => $from,
          'to'        => $to,
          'room_type' => $room_type,
          'room_capacity'=> $room_capacity,
          'payment'   => $payment,
          'nights'    => $days,
          'subtotal'  => $subtotal,
          'discount'  => $discount,
          'surcharge' => $surcharge,
          'total'     => $total,
        ];
        

        $this->view('billing/index', $data);
    }
}
