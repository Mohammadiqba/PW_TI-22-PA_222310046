<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Mohammad Iqbal Fahmi',
            'email' => '222310046@student.ibik.ac.id',
            'phone' => '123-456-7890',
            'address' => 'Jalan yang misterios,kevo',
            'bio' => 'Saya adalah Manusia harimau yang mau menerkam kamu awwww'
        ];

        return view('profile', compact('data'));
    }
}

