<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mr Sam's</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .sidebar-bg {
            background-color: #1a1a1a;
        }
        .orange-bg {
            background-color: #ff6b35;
        }
        .orange-text {
            color: #ff6b35;
        }
        .main-bg {
            background-color: #f5f5f5;
        }
        .card-bg {
            background-color: #e8e8e8;
        }
        .transaction-item {
            background-color: #ffffff;
        }
    </style>
</head>
<body class="flex h-screen">
    <!-- Sidebar -->
    <div class="sidebar-bg w-64 p-6 flex flex-col">
        <!-- Profile Section -->
        <div class="flex items-center mb-8">
            <div class="orange-bg w-12 h-12 rounded-full flex items-center justify-center mr-3">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <span class="text-white text-lg font-medium">Mr sam's</span>
        </div>

        <!-- Account Switcher -->
        <div class="mb-6">
            <button class="flex items-center justify-between w-full px-4 py-2 text-white border border-gray-600 rounded-lg hover:bg-gray-800 transition-colors">
                <span>Changer de compte</span>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!-- New Account Button -->
        <div class="mb-auto">
            <button class="flex items-center justify-between w-full px-4 py-2 text-white border border-gray-600 rounded-lg hover:bg-gray-800 transition-colors">
                <span>Nouveau Compte</span>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!-- Bottom Menu -->
        <div class="space-y-4">
            <a href="#" class="flex items-center text-white hover:orange-text transition-colors">
                <svg class="w-5 h-5 mr-3 orange-text" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                </svg>
                <span>settings</span>
            </a>
            <a href="#" class="flex items-center text-white hover:orange-text transition-colors">
                <svg class="w-5 h-5 mr-3 orange-text" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                </svg>
                <span>deconnexion</span>
            </a>
        </div>
    </div>
        <?= $content; ?>
    </body>
</html>