<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kehadiran' => 'required',
            'ucapan' => 'nullable|string',
        ]);

        Guest::create([
            'nama' => $request->nama,
            'kehadiran' => $request->kehadiran,
            'ucapan' => $request->ucapan,
        ]);

        return redirect('/')
            ->with('success', 'Terima kasih atas ucapan dan konfirmasinya ❤️');
    }
}