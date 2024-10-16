<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Response;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('kelas')->get(); // Mengambil siswa beserta kelas
        return response()->json([
            'success' => true,
            'message' => 'Daftar Siswa',
            'data' => $siswa,
        ], Response::HTTP_OK);
    }

    public function show($id)
    {
        $siswa = Siswa::with('kelas')->find($id);

        if (!$siswa) {
            return response()->json([
                'success' => false,
                'message' => 'Siswa tidak ditemukan',
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Siswa',
            'data' => $siswa,
        ], Response::HTTP_OK);
    }
}
