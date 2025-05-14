<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black">
  <section class="max-w-6xl mx-auto px-6 py-12">
    <div class="grid md:grid-cols-2 gap-8">
      <!-- Text and Form -->
      <div>
        <h1 class="text-4xl font-bold mb-2">About</h1>
        <p class="text-gray-600 mb-4">Sistem Informasi Galeri dan Aktivitas Positif</p>

        <p class="mb-6 text-gray-800">
          SIGAP+ adalah platform yang mendokumentasikan berbagai kegiatan positif, baik dalam bentuk sosial, edukatif, maupun kreatif, yang dilakukan oleh komunitas atau organisasi. Halaman ini menampilkan cuplikan aktivitas terbaru dari para relawan dan anggota komunitas.
        </p>

        <p class="text-gray-600 mb-6">
          Mulai dari kegiatan bakti sosial, pelatihan digital, hingga ekspresi seni, SIGAP+ hadir sebagai sarana apresiasi terhadap kontribusi nyata di masyarakat. Kami percaya bahwa setiap aksi kecil memiliki dampak besar jika diabadikan dan dibagikan dengan semangat kolaborasi. Temukan inspirasi dari setiap gambar yang kami sajikan, karena di balik setiap momen ada cerita yang layak untuk dikenang.
        </p>


        <!-- Contact Form -->
        <form class="space-y-4">
          <div class="grid grid-cols-2 gap-4">
            <input type="text" placeholder="First name" class="border border-gray-300 rounded px-4 py-2 w-full" />
            <input type="text" placeholder="Last name" class="border border-gray-300 rounded px-4 py-2 w-full" />
          </div>
          <input type="email" placeholder="Email address" class="border border-gray-300 rounded px-4 py-2 w-full" />
          <textarea placeholder="Enter your question or message" class="border border-gray-300 rounded px-4 py-2 w-full h-32"></textarea>
          <button type="submit" class="bg-black text-white px-6 py-2 rounded">Submit</button>
        </form>
      </div>

      <!-- Image Grid -->
      <div class="grid grid-cols-1 gap-4">
        <img src="layout/aset/_.jpeg" alt="Person 1" class="rounded shadow object-cover h-64 w-full" />
        <img src="layout/aset/_.jpeg" alt="Person 2" class="rounded shadow object-cover h-64 w-full" />
        <img src="layout/aset/_.jpeg" alt="Person 3" class="rounded shadow object-cover h-64 w-full" />
      </div>

    </div>
  </section>
</body>
</html>
