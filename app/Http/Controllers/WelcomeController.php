<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }
}

// {
//     public function /() {
//         return 'Selamat Datang';
//     }
// }

// {
//     public function about() {
//         return 'Nama: Fifi Novitasari, Nim: 2241760035';
//     }
// }

// {
//     public function index() {
//         return "Halaman Artikel dengan ID: {$id}";
//     }
// }
