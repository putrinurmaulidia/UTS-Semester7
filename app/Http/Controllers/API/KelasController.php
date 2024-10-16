<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Response;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::with('guru', 'students')->get(); // Mengambil kelas beserta guru dan siswa
        return response()->json([
            'success' => true,
            'message' => 'Daftar Kelas',
            'data' => $kelas,
        ], Response::HTTP_OK);
    }

    public function show($id)
    {
        $kelas = Kelas::with('guru', 'students')->find($id);

        if (!$kelas) {
            return response()->json([
                'success' => false,
                'message' => 'Kelas tidak ditemukan',
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Kelas',
            'data' => $kelas,
        ], Response::HTTP_OK);
    }
}
