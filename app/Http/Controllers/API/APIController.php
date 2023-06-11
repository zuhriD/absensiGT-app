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
            'status' => 'required',
            'bukti' => 'required',
        ]);
        dd($request->all());

        $jadwal = Jadwal::find($id);
        // $jadwal->status = $validatedData['status'];
        $jadwal->save();

        return response()->json([
            'status' => true,
            'data' => $jadwal,
            'message' => 'Berhasil mengubah status jadwal'
        ], 200);
    }


}
