<!-- dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black">

<?php include 'header.php';?>

  <!-- Header Section -->
  <header class="px-6 py-12 text-center">
    <h1 class="text-4xl font-bold mb-4">Sistem Penanggulangan & Penyaluran Bantuan Pasca Bencana</h1>
    <p class="text-gray-600 mb-6">Platform digital untuk mengelola pendataan, distribusi, dan pelaporan bantuan pasca bencana secara cepat, akurat, dan transparan.</p>
    <button onclick="window.location.href='login.php'" class="bg-purple-500 text-white px-4 py-2 rounded">
  Jelajahi Sitem
</button>
  </header>

  <!-- Hero Image --> 
  <div class="px-6">
    <img src="layout/aset/different-people-doing-volunteer-work-with-food.jpg" alt="Hero" class="rounded shadow mb-12">
  </div>

  <!-- Section Cards -->
  <section class="px-6 mb-16">
    <h2 class="text-2xl font-bold mb-6">Layanan Utama</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <?php for ($i = 0; $i < 1; $i++): ?>
        <div class="bg-gray-100 p-4 rounded shadow">
          <img src="layout/aset/side-view-man-taking-notes-ambulance-car.jpg" class="mb-4 rounded">
          <h3 class="font-semibold mb-2">Pendataan Korban</h3>
          <p class="text-gray-600 text-sm">Sistem mencatat data korban terdampak secara real-time, termasuk lokasi, kebutuhan, dan status bantuan.</p>
        </div>
        <div class="bg-gray-100 p-4 rounded shadow">
          <img src="layout/aset/tourists-go-up-hill-sunrise.jpg" class="mb-4 rounded">
          <h3 class="font-semibold mb-2">Distribusi Bantuan</h3>
          <p class="text-gray-600 text-sm">Bantuan disalurkan berdasarkan prioritas dan kebutuhan yang telah diverifikasi, dengan pelacakan logistik yang efisien.</p>
        </div>
        <div class="bg-gray-100 p-4 rounded shadow">
          <img src="layout/aset/business-work-concept.jpg" class="mb-4 rounded">
          <h3 class="font-semibold mb-2">Laporan & Transparansi</h3>
          <p class="text-gray-600 text-sm">Semua aktivitas tercatat dalam sistem dengan laporan publik demi memastikan kepercayaan dan akuntabilitas.</p>
        </div>
      <?php endfor; ?>
    </div>
  </section>
  <?php include 'footer.php';?>


</body>
</html>
