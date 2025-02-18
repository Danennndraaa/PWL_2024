<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $nama = "Danendra Adhipramana";
        $nim = "244107023011";
        return "Nama: " . $nama . ", NIM: " . $nim;
    }
}
