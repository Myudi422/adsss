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

  <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-3xl font-semibold mb-4 text-center">Selamat Datang di Aplikasi Update!</h2>

    <p class="text-gray-700 text-lg mb-8 text-center">
      Untuk meningkatkan pengalaman Anda, pilih versi aplikasi sesuai dengan tipe ARM perangkat Anda.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- ARMv7 Card -->
      <div class="max-w-md mx-auto bg-blue-200 rounded p-4">
        <h3 class="text-xl font-semibold mb-2 text-center">ARMv7</h3>
        <p class="text-gray-700 text-base mb-4 text-center">Pilihan terbaik untuk perangkat ARMv7.</p>
        <a href="link_update_armv7.apk"
          class="block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full text-center">
          Download
        </a>
      </div>

      <!-- ARM64 Card -->
      <div class="max-w-md mx-auto bg-green-200 rounded p-4">
        <h3 class="text-xl font-semibold mb-2 text-center">ARM64</h3>
        <p class="text-gray-700 text-base mb-4 text-center">Untuk perangkat dengan tipe ARM64.</p>
        <a href="link_update_arm64.apk"
          class="block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full text-center">
          Download
        </a>
      </div>

      <!-- x86 Card -->
      <div class="max-w-md mx-auto bg-yellow-200 rounded p-4">
        <h3 class="text-xl font-semibold mb-2 text-center">x86</h3>
        <p class="text-gray-700 text-base mb-4 text-center">Kompatibel dengan perangkat x86.</p>
        <a href="link_update_x86.apk"
          class="block bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full text-center">
          Download
        </a>
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
