<?php
$current_page = $_SERVER['REQUEST_URI'];
$base_path = '/envisionxperts.com';
?>
<nav class="bg-gray-800 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <a href="<?= $base_path ?>/" class="text-2xl font-bold text-white">EnvisionXperts</a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="<?= $base_path ?>/" class="nav-link <?= $current_page == $base_path.'/' ? 'text-white' : '' ?>">Home</a>
                <a href="<?= $base_path ?>/services" class="nav-link <?= $current_page == $base_path.'/services' ? 'text-white' : '' ?>">Services</a>
                <a href="<?= $base_path ?>/portfolio" class="nav-link <?= $current_page == $base_path.'/portfolio' ? 'text-white' : '' ?>">Portfolio</a>
                <a href="<?= $base_path ?>/contact" class="nav-link <?= $current_page == $base_path.'/contact' ? 'text-white' : '' ?>">Contact</a>
                <button id="theme-toggle" class="p-2 rounded-lg bg-gray-700 hover:bg-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-300 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <a href="<?= $base_path ?>/" class="block py-2 nav-link <?= $current_page == $base_path.'/' ? 'text-white' : '' ?>">Home</a>
            <a href="<?= $base_path ?>/services" class="block py-2 nav-link <?= $current_page == $base_path.'/services' ? 'text-white' : '' ?>">Services</a>
            <a href="<?= $base_path ?>/portfolio" class="block py-2 nav-link <?= $current_page == $base_path.'/portfolio' ? 'text-white' : '' ?>">Portfolio</a>
            <a href="<?= $base_path ?>/contact" class="block py-2 nav-link <?= $current_page == $base_path.'/contact' ? 'text-white' : '' ?>">Contact</a>
        </div>
    </div>
</nav> 