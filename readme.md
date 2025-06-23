# HotelReservationSystemRiveraGarcia

**MVC-based PHP Hotel Reservation System** for managing room accommodations, bookings, billing, and inquiries.

> **Collaboration:** Built in partnership with Mark Angelo Rivera.

---

## 📦 Features

- **Room Management**: View, add, edit, and delete accommodations
- **Reservation Module**: Create new bookings, view upcoming/past reservations
- **Billing System**: Generate invoices and review billing history
- **Public Pages**: About, Contact form with inquiry submission
- **Responsive Design**: Mobile-first layout powered by Bootstrap 5

---

## 🛠️ Tech Stack

- **Backend:** PHP 7.4+ (MVC pattern)
- **Database:** MySQL/MariaDB (via PDO)
- **Frontend:** HTML5, CSS3, Bootstrap 5, JavaScript (ES6+)
- **Templating & Routing:** Custom `Router.php` + header/footer partials
- **Date & Time:** Bootstrap Datepicker
- **Plugins:** Owl Carousel, Lightbox, Nice Select, ImagesLoaded, Isotope
- **Server:** Apache with `mod_rewrite` enabled

---

## 🗂️ Project Structure

```bash
HotelReservationSystemRiveraGarcia/
├── app/
│   ├── controllers/        # MVC controllers
│   ├── models/             # Data models (PDO)
│   └── views/              # HTML/PHP templates & partials
├── config/
│   └── config.php          # DB credentials & global settings
├── core/
│   ├── Controller.php      # Base controller class
│   └── Router.php          # URL routing logic
├── public/                 # Public-facing files & assets
│   ├── .htaccess           # Rewrite rules
│   ├── index.php           # Front controller
│   ├── css/, js/, scss/    # Styles & scripts
│   ├── fonts/, image/      # Static assets
│   └── vendors/            # Third-party plugins
└── .git/                   # Git metadata
```

---

## 🚀 Setup & Run

**Clone repository**

```bash
git clone https://github.com/<your-username>/HotelReservationSystemRiveraGarcia.git
cd HotelReservationSystemRiveraGarcia
```

**Configure Apache**

- Enable `mod_rewrite`
- Point `DocumentRoot` to `public/`

**Database**

- Create a database (e.g., `hotel_db`)
- Import your schema or run provided SQL scripts
- Update `config/config.php`:

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'hotel_db');
define('DB_USER', 'root');
define('DB_PASS', 'your_password');
```

**Access**

- Open `http://hotel.local/` (or your configured domain)

---

## 🔧 Usage

- **Browse Rooms:** Check availability & details
- **Make Reservations:** Select dates and submit booking
- **View Bills:** Generate and download invoices
- **Contact:** Send inquiries via the Contact page

---

## 🛡️ Security & Best Practices

- PDO with prepared statements for all SQL queries
- Input Sanitization using `htmlspecialchars()`
- Session-based Authentication for users and admin

---

## 👥 Team & Roles

- **Lead Developer:** Ken Patrick Garcia
- **Collaborator:** Mark Angelo Rivera

---

## 📄 License

Licensed under the MIT License. See LICENSE for details.

Happy coding & happy guests!
