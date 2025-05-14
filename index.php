<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Sederhana</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md p-6">
            <h2 class="text-2xl font-bold text-purple-600 mb-6">SIGAP +</h2>
            <nav class="space-y-4">
                <a href="#" class="block text-gray-700 hover:text-purple-600">Dashboard</a>
                <a href="#" class="block text-purple-600 font-semibold">korban</a>
                <a href="#" class="block text-gray-700 hover:text-purple-600">Payment</a>
                <a href="#" class="block text-gray-700 hover:text-purple-600">Report</a>
                <a href="#" class="block text-gray-700 hover:text-purple-600">Settings</a>
            </nav>
            <div class="mt-10">
                <a href="dashboard.php" class="text-red-500 hover:underline"> Logout</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-purple-600">Daftar Korban</h1>
                <a href="add.php" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded">
                    + Add New Student
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-purple-100 text-purple-700 uppercase text-sm leading-normal">
                        <tr>
                            <th class="py-3 px-6 text-left">ID</th>
                            <th class="py-3 px-6 text-left">Photo</th>
                            <th class="py-3 px-6 text-left">Nama</th>
                            <th class="py-3 px-6 text-left">Umur</th>
                            <th class="py-3 px-6 text-left">Jenis Kelamin</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm">
                        <!-- Data akan ditampilkan di sini -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
