
<?php 
include "function.php";
ob_start();
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Apotek Sehat</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Sidebar -->
  <div class="flex">
    <div class="w-64 bg-indigo-700 text-white h-screen px-4 py-6">
      <h2 class="text-2xl font-semibold mb-6">Apotek Sehat</h2>
      <ul>
        <li><a href="dashboard.php" class="block py-2 text-sm hover:bg-indigo-600 rounded">Dashboard</a></li>
        <li><a href="panel.php" class="block py-2 text-sm hover:bg-indigo-600 rounded">Info obat</a></li>
       
      </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card: Total Obat -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold text-gray-700">Total Data Obat</h3>
          <p class="text-3xl font-bold text-indigo-700 mt-4">
            <?php
              // Include database connection
              include('database.php');
              
              // Query to get total number of obat
              $result = mysqli_query($db, "SELECT COUNT(*) AS total_obat FROM obat");
              $data = mysqli_fetch_assoc($result);
              echo $data['total_obat'];
            ?>
          </p>
        </div>
      </div>

      <!-- Tabel Produk Obat -->
      <div class="bg-white p-6 mt-8 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-gray-700">Daftar Produk</h3>
        <table class="min-w-full mt-4">
          <thead>
            <tr>
              <th class="py-2 px-4 text-left text-gray-600">Nama Obat</th>
              <th class="py-2 px-4 text-left text-gray-600">Harga</th>
              <th class="py-2 px-4 text-left text-gray-600">Stok</th>
              <th class="py-2 px-4 text-left text-gray-600">Aksi</th>
            </tr>
          </thead>
          <tbody>
          
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>
