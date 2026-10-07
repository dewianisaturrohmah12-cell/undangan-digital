<?php

namespace App\Http\Controllers;

use App\Models\Rsvp;
use Illuminate\Http\Request;

class RsvpController extends Controller
{
    public function index()
    {
        $rsvps = Rsvp::latest()->get();

        return response()->json($rsvps);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'kehadiran' => 'required|in:Hadir,Tidak Hadir',
            'ucapan' => 'nullable|string|max:1000',
        ]);

        $rsvp = Rsvp::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Ucapan berhasil dikirim.',
            'data' => $rsvp,
        ], 201);
    }
}