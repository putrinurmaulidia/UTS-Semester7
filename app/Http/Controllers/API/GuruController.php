<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User; // Guru model
use Illuminate\Http\Response;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = User::with('classes')->get(); // Mengambil guru beserta kelas yang diajarkan
        return response()->json([
            'success' => true,
            'message' => 'Daftar Guru',
            'data' => $gurus,
        ], Response::HTTP_OK);
    }

    public function show($id)
    {
        $guru = User::with('classes')->find($id);

        if (!$guru) {
            return response()->json([
                'success' => false,
                'message' => 'Guru tidak ditemukan',
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Guru',
            'data' => $guru,
        ], Response::HTTP_OK);
    }
}
