<?php // app/views/accomodation/index.php ?>

<!--================ Breadcrumb Area =================-->
<section class="breadcrumb_area" style="background: url('<?= BASE_URL ?>/image/reservation-banner.png') no-repeat center center; background-size: cover;">
  <div class="overlay bg-parallax"
       data-stellar-ratio="0.8"
       data-stellar-vertical-offset="0"
       data-background=""></div>
  <div class="container">
    <div class="page-cover text-center">
      <h2 class="page-cover-tittle">Accomodation</h2>
      <ol class="breadcrumb">
        <li><a href="<?= BASE_URL ?>/home/index">Home</a></li>
        <li class="active">Reservation</li>
      </ol>
    </div>
  </div>
</section>

<!--================ Room Reservation Form =================-->
<section class="hotel_booking_area section_gap">
  <div class="container mt-5">
    <div class="card shadow-lg p-4">
      <h2 class="text-center">Room Reservation</h2>
      <form method="post" action="<?= BASE_URL ?>/accomodation">
        <div class="mb-3">
          <label class="form-label">Customer Name</label>
          <input type="text" class="form-control" name="customer_name" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Contact Number</label>
          <input type="text" class="form-control" name="contact_number" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Reservation Date</label>
          <div class="d-flex">
            <input type="date" class="form-control me-2" name="from_date" id="from_date" required>
            <input type="date" class="form-control" name="to_date" id="to_date" required>
          </div>
          <small class="text-danger" id="dateError"></small>
        </div>

        <div class="mb-3">
          <label class="form-label">Room Type</label>
          <?php foreach (['Regular','De Luxe','Suite'] as $rt): ?>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="room_type" value="<?= $rt ?>" required>
              <label class="form-check-label"><?= $rt ?></label>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="mb-3">
          <label class="form-label">Room Capacity</label>
          <?php foreach (['Single','Double','Family'] as $rc): ?>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="room_capacity" value="<?= $rc ?>" required>
              <label class="form-check-label"><?= $rc ?></label>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="mb-3">
          <label class="form-label">Payment Type</label>
          <select class="form-select" name="payment_type" required>
            <?php foreach (['Cash','Cheque','Credit Card'] as $p): ?>
              <option value="<?= $p ?>"><?= $p ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-primary">Submit Reservation</button>
          <button type="reset" class="btn btn-secondary">Clear Entry</button>
        </div>
      </form>
    </div>
  </div>
</section>

<script>
  // Enforce checkout > checkin
  function validateDates() {
    const fromEl = document.getElementById('from_date');
    const toEl   = document.getElementById('to_date');
    const err    = document.getElementById('dateError');
    if (!fromEl.value) {
      err.innerText = '';
      return;
    }
    const minTo = new Date(fromEl.value);
    minTo.setDate(minTo.getDate() + 1);
    toEl.min = minTo.toISOString().slice(0,10);

    if (toEl.value && toEl.value <= fromEl.value) {
      err.innerText = 'The checkout date must be at least one day after the check-in date!';
      toEl.value = '';
    } else {
      err.innerText = '';
    }
  }

  document.getElementById('from_date').addEventListener('change', validateDates);
  document.getElementById('to_date').addEventListener('change', validateDates);
</script>
