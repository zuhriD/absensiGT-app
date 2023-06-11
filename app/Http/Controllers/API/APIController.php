<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class APIController extends Controller
{
    // make function show all data jadwal by imam
    public function showAllJadwalByImam($id)
    {
        $jadwal = Jadwal::where('imam_id', $id)->get();
        return response()->json([
            'status' => true,
            'data' => $jadwal,
            'message' => 'Berhasil menampilkan data jadwal'
        ], 200);
    }

    // make function edit status jadwal by imam
    public function editStatusJadwalByImam(Request $request, $id, $id_jadwal)
    {
        $validatedData = $request->validate([
            'keterangan' => 'required',
            'bukti' => 'required', 
            'status' => 'required',
        ]);
        $jadwal = Jadwal::where('imam_id', $id)->where('id', $id_jadwal)->first();
        $jadwal->keterangan = $validatedData['keterangan'];
        $jadwal->bukti = $validatedData['bukti'];
        $jadwal->status = $validatedData['status'];
        $jadwal->save();

        return response()->json([
            'status' => true,
            'data' => $jadwal,
            'message' => 'Berhasil mengubah status jadwal'
        ], 200);
    }


}
