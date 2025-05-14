<!-- Footer -->
<footer class="border-t mt-12 px-6 py-12 bg-gray-50 text-gray-800">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
    <!-- Brand & Social -->
    <div>
      <h3 class="text-xl font-bold mb-4">SIAGA+</h3>
      <div class="flex space-x-4 mt-4">
        <a href="#"><i class="fab fa-facebook text-gray-500 hover:text-black"></i></a>
        <a href="#"><i class="fab fa-linkedin text-gray-500 hover:text-black"></i></a>
        <a href="#"><i class="fab fa-youtube text-gray-500 hover:text-black"></i></a>
        <a href="#"><i class="fab fa-instagram text-gray-500 hover:text-black"></i></a>
      </div>
    </div>

    <!-- Topic Columns -->
    <?php for ($i = 0; $i < 3; $i++): ?>
      <div>
        <h4 class="font-semibold mb-3">Topic</h4>
        <ul class="space-y-2 text-sm text-gray-600">
          <li><a href="#" class="hover:underline">Tentang Kami</a></li>
          <li><a href="#" class="hover:underline">Cara Kerja</a></li>
          <li><a href="#" class="hover:underline">Hubungi Kami</a></li>
        </ul>
      </div>
    <?php endfor; ?>
  </div>
</footer>
