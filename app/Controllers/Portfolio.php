<?php

// Mungkin ada komentar di sini
// atau ada baris kosong

namespace App\Controllers; // <-- Error terjadi di sini (Line 5)

class Portfolio extends BaseController
{
    public function index()
    {
        $data['title'] = "Portfolio - Muhammad Farel Fahlevi";
        
        return view('portfolio_view', $data);
    }
}