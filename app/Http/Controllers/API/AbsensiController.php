<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Response;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::with('siswa')->get(); // Mengambil absensi beserta siswa yang bersangkutan
        return response()->json([
            'success' => true,
            'message' => 'Daftar Absensi',
            'data' => $absensi,
        ], Response::HTTP_OK);
    }

    public function show($id)
    {
        $absensi = Absensi::with('siswa')->find($id);

        if (!$absensi) {
            return response()->json([
                'success' => false,
                'message' => 'Absensi tidak ditemukan',
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Absensi',
            'data' => $absensi,
        ], Response::HTTP_OK);
    }
}