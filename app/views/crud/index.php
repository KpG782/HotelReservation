<?php
// app/views/crud/index.php
$reservations      = $data['reservations'];
$totalReservations = $data['total_reservations'];
$totalIncome       = $data['total_income'];
?>
<style>
/* page background */
body {
  background: url('<?= BASE_URL ?>/image/reservation-banner.png') no-repeat center center/cover;
  background-size: cover;
}

/* Title + overview section */
.page-header {
  margin: 8rem 2rem 2rem;
  padding: 1rem;
  width: calc(100% - 4rem);
  background: rgba(255,255,255,0.2);
  backdrop-filter: blur(8px);
  border-radius: 8px;
  color: #fff;
  text-align: center;
}
.overview-cards {
  display: flex; gap: 1rem; margin-top: 1rem;
}
.overview-card {
  flex: 1; padding: 1rem;
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255,255,255,0.3);
  border-radius: 8px; color: #fff;
}
.overview-card h5 { margin: 0; font-weight: 500; }
.overview-card h2 { margin: .5rem 0 0; font-size: 2rem; }

/* Tabs */
.nav-tabs {
  margin: 0 2rem; width: calc(100% - 4rem);
}
.nav-tabs .nav-link {
  color: #fff;
  background: rgba(116, 106, 106, 0.1);
  border-radius: 4px; margin-right: .5rem;
}
.nav-tabs .nav-link.active {
  background: rgba(255, 255, 255, 0.77);
}

/* content cards */
.glass-card {
  margin: 1.5rem 2rem;
  width: calc(100% - 4rem);
  padding: 1rem;
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255,255,255,0.3);
  border-radius: 8px; color: #fff;
}

/* section header above table */
.glass-card .section-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1rem;
}
.glass-card .section-header h4 {
  padding: 0.5rem 1rem;
  border-radius: 4px;
}
.glass-card .section-header .btn-add {
  min-width: 120px;
}

/* the table */
.table {
  color: #fff;
  width: 100% !important;
  border-collapse: collapse;
}
.table thead th {
  background: rgb(185, 185, 185) !important;
  border-color: rgba(255,255,255,0.4) !important;
}
.table tbody tr:nth-of-type(odd) {
  background: rgba(255,255,255,0.05);
}
.table th, .table td {
  border: 1px solid rgba(255,255,255,0.4) !important;
  padding: 0.5rem;
  text-align: center;
}

/* DataTables UI tweaks */
.dataTables_wrapper .dataTables_length label,
.dataTables_wrapper .dataTables_filter label {
  color: #fff;
}
.dataTables_wrapper .dataTables_paginate .paginate_button a {
  color: #fff !important;
  background: transparent !important;
  border: none !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current a {
  background: #fff !important;
  color: #000 !important;
}

/* buttons */
.btn { min-width: 80px; }
</style>

<div class="page-header">
  <h1>Admin | Darrel &amp; Ayien's Five Star Hotel</h1>
  <div class="overview-cards">
    <div class="overview-card">
      <h5>Total Reservations</h5>
      <h2><?= $totalReservations ?></h2>
    </div>
    <div class="overview-card">
      <h5>Total Income</h5>
      <h2>$<?= number_format($totalIncome,2) ?></h2>
    </div>
  </div>
</div>

<ul class="nav nav-tabs justify-content-center">
  <li class="nav-item">
    <a class="nav-link active disabled" data-bs-toggle="tab" href="#tab-list">All Reservations</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" data-bs-toggle="tab" href="#tab-add">Create / Edit Reservation</a>
  </li>
</ul>

<div class="tab-content">
  <!-- LIST -->
  <div id="tab-list" class="tab-pane fade show active">
    <div class="glass-card">
      <div class="section-header">
        <h4>All Reservations</h4>
        <button class="btn btn-success btn-add"
        onclick="resetReservationForm(); bootstrap.Tab.getOrCreateInstance(document.querySelector('a[href=\'#tab-add\']')).show()">
        Add Reservation
      </button>

      </div>
      <table id="reservationsTable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th><th>Name</th><th>Contact</th><th>From</th><th>To</th>
            <th>Type</th><th>Capacity</th><th>Payment</th>
            <th>Days</th><th>Sub</th><th>Disc</th><th>Extra</th><th>Total</th><th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($reservations as $r): ?>
          <tr>
            <td><?= $r['id'] ?></td>
            <td><?= htmlspecialchars($r['customer_name']) ?></td>
            <td><?= htmlspecialchars($r['contact_number']) ?></td>
            <td><?= $r['from_date'] ?></td>
            <td><?= $r['to_date'] ?></td>
            <td><?= $r['room_type'] ?></td>
            <td><?= $r['room_capacity'] ?></td>
            <td><?= $r['payment_type'] ?></td>
            <td><?= $r['days'] ?></td>
            <td>$<?= number_format($r['subtotal'],2) ?></td>
            <td>$<?= number_format($r['discount'],2) ?></td>
            <td>$<?= number_format($r['extra_charge'],2) ?></td>
            <td>$<?= number_format($r['total_bill'],2) ?></td>
            <td>
              <form method="POST" class="d-inline">
                <input type="hidden" name="id" value="<?= $r['id'] ?>">
                <button name="delete" class="btn btn-sm btn-danger">Delete</button>
              </form>
              <button class="btn btn-sm btn-primary"
                      onclick='openEdit(<?= json_encode($r) ?>)'>
                Edit
              </button>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- ADD -->
  <div id="tab-add" class="tab-pane fade">
    <div class="glass-card">
      <div class="section-header">
        <h4>Create / Update Reservation</h4>
        <button class="btn btn-secondary"
                onclick="bootstrap.Tab.getOrCreateInstance(document.querySelector('a[href=\'#tab-list\']')).show()">
          Back
        </button>
      </div>
      <form method="POST" class="row g-3">
        <?php include __DIR__.'/form_fields.php'; ?>
        <div class="col-12 text-end">
          <button name="create" class="btn btn-success">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
<script>
  $(document).ready(()=>{
    $('#reservationsTable').DataTable({
      pageLength: 10,
      lengthChange: false,
      ordering: false,
      searching: true,
    });
  });

  function resetReservationForm() {
    let f = document.querySelector('#tab-add form');

    // Clear all input fields
    f.querySelectorAll('input, select, textarea').forEach(el => {
      if (el.type !== 'hidden') el.value = '';
    });

    // Remove hidden id input
    let idInput = f.querySelector('input[name="id"]');
    if (idInput) idInput.remove();

    // Remove Update button if exists
    let updateBtn = f.querySelector('button[name="update"]');
    if (updateBtn) updateBtn.parentElement.remove();
  }

  function openEdit(r) {
    let tab = document.querySelector('a[href="#tab-add"]');
    bootstrap.Tab.getOrCreateInstance(tab).show();
    let f = document.querySelector('#tab-add form');

    resetReservationForm(); // Reset first

    if (!f.querySelector('[name="id"]')) {
      f.insertAdjacentHTML('beforeend',
        '<input type="hidden" name="id" value="'+r.id+'">' +
        '<div class="col-12 text-end">' +
          '<button name="update" class="btn btn-warning">Update</button>' +
        '</div>'
      );
    }
    Object.keys(r).forEach(k => {
      let el = f.querySelector(`[name="${k}"]`);
      if (el) el.value = r[k];
    });
  }
</script>
