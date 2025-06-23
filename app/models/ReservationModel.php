<?php
class ReservationModel {
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO(
            "mysql:host=localhost;dbname=reservation",
            "root","",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }

    public function getAll(): array {
        $stmt = $this->pdo->query("SELECT * FROM billing ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countAll(): int {
        $stmt = $this->pdo->query("SELECT COUNT(*) FROM billing");
        return (int)$stmt->fetchColumn();
    }

    public function sumIncome(): float {
        $stmt = $this->pdo->query("SELECT SUM(total_bill) FROM billing");
        return (float)$stmt->fetchColumn();
    }

    public function create(array $data){
        $sql = "INSERT INTO billing
            (customer_name, contact_number, from_date, to_date, room_type, room_capacity, payment_type, days, subtotal, discount, extra_charge, total_bill)
          VALUES
            (:customer_name, :contact_number, :from_date, :to_date, :room_type, :room_capacity, :payment_type, :days, :subtotal, :discount, :extra_charge, :total_bill)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }

    public function update(int $id, array $data){
        $data['id'] = $id;
        $sql = "UPDATE billing SET
            customer_name = :customer_name,
            contact_number = :contact_number,
            from_date = :from_date,
            to_date = :to_date,
            room_type = :room_type,
            room_capacity = :room_capacity,
            payment_type = :payment_type,
            days = :days,
            subtotal = :subtotal,
            discount = :discount,
            extra_charge = :extra_charge,
            total_bill = :total_bill
          WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }

    public function delete(int $id){
        $stmt = $this->pdo->prepare("DELETE FROM billing WHERE id = :id");
        $stmt->execute(['id'=>$id]);
    }
}
