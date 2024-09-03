<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="/public/css/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg">
            <div class="p-4">
                <img src="path_to_logo" alt="Logo">
            </div>
            <nav class="mt-6">
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-500 hover:text-white">
                    Beranda
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-500 hover:text-white">
                    Profile
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-500 hover:text-white">
                    Pengajuan Baru
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-500 hover:text-white">
                    Pengajuan Ulang
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-500 hover:text-white">
                    Status Pengajuan
                </a>
            </nav>
            <div class="mt-auto p-4">
                <a href="#" class="block py-2.5 px-4 bg-red-500 text-white rounded text-center transition duration-200 hover:bg-red-600">
                    Logout
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <?= $this->renderSection('content') ?>
        </main>
    </div>
</body>
</html>
