<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="bg-blue-500 py-4 flex items-center justify-between px-[15%]">
    <div class="w-[20%]">
        <h1 class="font-bold text-xl text-white">E-Laundry</h1>
    </div>
    <div class="flex gap-6 items-center justify-center text-white w-[40%]">
        <a href="#" class="hover:text-black hover:scale-105">Home</a>
        <a href="#services" class="hover:text-black hover:scale-105">Services</a>
        <a href="#" class="hover:text-black hover:scale-105">Testimoni</a>
        <a href="customer/customer_view.php" class="hover:text-black hover:scale-105">Customer</a>
        <a href="#" class="hover:text-black hover:scale-105">Admin</a>
    </div>
    <!-- <div class="w-[20%] flex justify-center items-center">
        <a href="#" class="bg-blue-700 text-white pl-5 pr-5 pt-2 pb-2 rounded hover:bg-blue-600 hover:shadow-md">Login</a>
    </div> -->
  </nav>

  <div class="h-[80vh] flex items-center justify-center flex-col bg">
    <h1 class="text-[3rem] font-bold">E-Laundry</h1>
    <p>Sebuah aplikasi pengelolaan data laundry dengan mudah dan cepat.</p>
  </div>

  <div class="px-[15%]">
    <div class="flex items-center justify-center mb-4 mt-4">
      <h2 class="font-bold text-xl">Services</h2>
    </div>
    <div class="flex items-center gap-10">
      <div id="services">
        <img src="assets/Thinking face-pana.svg" alt="image-services" class="w-[300px]">
      </div>
      <div>
        <ol>
          <li>Pengelolaan Data Customer</li>
          <li>Pengelolaan Data Admin</li>
          <li>Pengelolaan Data Pesanan</li>
        </ol>
      </div>
    </div>
  </div>

</body>
</html>