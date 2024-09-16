<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$homeArray = [
        [
            'kegiatan' => 'bolaa',
            'tanggal' => '12/12/2023'
        ],
        [
            'kegiatan' => 'basket',
            'tanggal' => '13/12/2023'
        ]
];




Route::get('/', function () use ($homeArray) {
    return view('home', ['home' => $homeArray]);
});




Route::get('/materi', function () {
    return view('materi');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/posts', function () {
    return view('posts', ['posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post){


    return view('post', ['post'=>$post]);

});

Route::get('/profile', function () {
    return view('profile');
});

