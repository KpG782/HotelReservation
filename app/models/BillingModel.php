<?php
// app/models/BillingModel.php

class BillingModel {
    /** @var \PDO */
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO(
            'mysql:host=localhost;dbname=reservation;charset=utf8mb4',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }

    /**
     * Insert a new billing record.
     *
     * @param array $data [
     *   'customer_name'  => string,
     *   'contact_number' => string,
     *   'from_date'      => 'YYYY-MM-DD',
     *   'to_date'        => 'YYYY-MM-DD',
     *   'room_type'      => string,
     *   'room_capacity'  => string,
     *   'payment_type'   => string,
     *   'days'           => int,
     *   'subtotal'       => float,
     *   'discount'       => float,
     *   'total_bill'     => float,
     * ]
     */
    public function insert(array $data): bool {
        $sql = "
          INSERT INTO billing (
            customer_name,
            contact_number,
            from_date,
            to_date,
            room_type,
            room_capacity,
            payment_type,
            days,
            subtotal,
            discount,
            total_bill
          ) VALUES (
            :customer_name,
            :contact_number,
            :from_date,
            :to_date,
            :room_type,
            :room_capacity,
            :payment_type,
            :days,
            :subtotal,
            :discount,
            :total_bill
          )
        ";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':customer_name'  => $data['customer_name'],
            ':contact_number' => $data['contact_number'],
            ':from_date'      => $data['from_date'],
            ':to_date'        => $data['to_date'],
            ':room_type'      => $data['room_type'],
            ':room_capacity'  => $data['room_capacity'],
            ':payment_type'   => $data['payment_type'],
            ':days'           => $data['days'],
            ':subtotal'       => $data['subtotal'],
            ':discount'       => $data['discount'],
            ':total_bill'     => $data['total_bill'],
        ]);
    }
}
