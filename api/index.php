<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Download Aplikasi Update</title>
  <!-- Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

  <div class="container mx-auto mt-8">
    <h2 class="text-3xl font-semibold text-center mb-8">Pilih Tipe ARM</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <!-- ARMv7 Card -->
      <div class="max-w-md mx-auto bg-white rounded overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 text-center">ARMv7</div>
          <p class="text-gray-700 text-base text-center">Download Aplikasi untuk ARMv7</p>
        </div>
        <div class="px-6 pt-4 pb-2 flex justify-center">
          <a href="link_update_armv7.apk"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            Download
          </a>
        </div>
      </div>

      <!-- ARM64 Card -->
      <div class="max-w-md mx-auto bg-white rounded overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 text-center">ARM64</div>
          <p class="text-gray-700 text-base text-center">Download Aplikasi untuk ARM64</p>
        </div>
        <div class="px-6 pt-4 pb-2 flex justify-center">
          <a href="link_update_arm64.apk"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            Download
          </a>
        </div>
      </div>

      <!-- x86 Card -->
      <div class="max-w-md mx-auto bg-white rounded overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2 text-center">x86</div>
          <p class="text-gray-700 text-base text-center">Download Aplikasi untuk x86</p>
        </div>
        <div class="px-6 pt-4 pb-2 flex justify-center">
          <a href="link_update_x86.apk"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            Download
          </a>
        </div>
      </div>
    </div>

    <!-- Note Update Section -->
    <div class="mt-8">
      <h3 class="text-xl font-semibold mb-4">Catatan Pembaruan</h3>
      <ul class="list-disc pl-6">
        <li>Fitur baru yang luar biasa</li>
        <li>Peningkatan kinerja aplikasi</li>
        <li>Perbaikan bug yang signifikan</li>
      </ul>
    </div>
  </div>

  <!-- Optional: Add your own script or additional CDN here -->

</body>

</html>
