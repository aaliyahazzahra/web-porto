<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// Route untuk Proyek
Route::get('/projects', function () {
    // Data dummy
    $projects = [
        [
            'title' => 'E-Commerce App',
            'desc' => 'Dibuat dengan Flutter & Firebase.',
            'tag' => 'Mobile',
            'image' => '[https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=400&h=250](https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=400&h=250)'
        ],
        [
            'title' => 'Portfolio Dashboard',
            'desc' => 'Admin panel menggunakan Laravel.',
            'tag' => 'Web',
            'image' => '[https://images.unsplash.com/photo-1551288049-bbbda536339a?auto=format&fit=crop&w=400&h=250](https://images.unsplash.com/photo-1551288049-bbbda536339a?auto=format&fit=crop&w=400&h=250)'
        ],
        [
            'title' => 'Health Tracker',
            'desc' => 'Monitoring kesehatan berbasis IoT.',
            'tag' => 'IoT',
            'image' => '[https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=400&h=250](https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=400&h=250)'
        ]
    ];

    return view('projects', compact('projects'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
