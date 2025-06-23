<?php
// app/views/billing/index.php
extract($data);
?>
<style>
  /* ==================================================
     Page-specific styling for the Billing view
  ================================================== */
  .page-banner {
  background: url('<?= BASE_URL ?>/image/reservation-banner.png') no-repeat center center/cover;
  /* increase top/bottom padding for a taller banner */
  padding: 8rem 0 6rem;
  /* ensure it never collapses below a usable height */
  min-height: 300px;
}
  .thank-you-banner {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(8px);
    color: #fff;
    font-weight: 600;
    border-radius: 8px;
    margin-bottom: 2rem;
  }
  .billing-card {
    max-width: 900px;
    margin: -2rem auto 4rem;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 12px;
    overflow: hidden;
  }
  .billing-card .card-body {
    padding: 2rem;
    color: #fff;
  }
  .billing-card .table {
    margin-bottom: 2rem;
  }
  .billing-card .table th,
  .billing-card .table td {
    border-color: rgba(255,255,255,0.4);
  }
  .billing-card .table th {
    width: 35%;
    font-weight: 500;
  }
  .billing-card .btn {
    min-width: 100px;
  }
</style>

<!-- Banner with Thank-You -->
<section class="page-banner text-center">
  <div class="container">
    <div class="thank-you-banner">
      Thank you for booking with us, <strong><?= htmlspecialchars($name) ?></strong>!
    </div>
  </div>
</section>

<!-- Frosted-glass Billing Card -->
<section class="billing-area">
  <div class="container">
    <div class="billing-card card">
      <div class="card-body">
        <h2 class="text-center mb-4">Billing Statement</h2>
        <table class="table table-bordered text-white">
          <tbody>
            <tr><th>Customer Name</th>    <td><?= htmlspecialchars($name) ?></td></tr>
            <tr><th>Contact Number</th>   <td><?= htmlspecialchars($contact) ?></td></tr>
            <tr><th>Reservation Date</th> <td><?= htmlspecialchars($from) ?> to <?= htmlspecialchars($to) ?></td></tr>
            <tr><th>Room Type</th>        <td><?= htmlspecialchars($room_type) ?></td></tr>
            <tr><th>Room Capacity</th>    <td><?= htmlspecialchars($room_capacity) ?></td></tr>
            <tr><th>Payment Type</th>     <td><?= htmlspecialchars($payment) ?></td></tr>
            <tr><th>Number of Nights</th> <td><?= htmlspecialchars($nights) ?></td></tr>
            <tr><th>Subtotal</th>         <td>$<?= number_format($subtotal,2) ?></td></tr>
            <tr><th>Discount</th>         <td>$<?= number_format($discount,2) ?></td></tr>
            <tr><th>Surcharge</th>        <td>$<?= number_format($surcharge,2) ?></td></tr>
            <tr><th>Total Bill</th>       <td><strong>$<?= number_format($total,2) ?></strong></td></tr>
          </tbody>
        </table>
        <div class="text-center">
          <a href="<?= BASE_URL ?>/home/index" class="btn btn-primary mx-2">Home</a>
          <a href="javascript:history.back()"   class="btn btn-secondary mx-2">Back</a>
        </div>
      </div>
    </div>
  </div>
</section>
