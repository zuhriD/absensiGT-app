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
        $jadwal = Jadwal::with('imam', 'masjid', 'activity')->where('imam_id', $id)->get();
        $formattedJadwal = $jadwal->map(function ($item) {
            return [
                'id' => $item->id,
                'imam_id' => $item->imam->id,
                'nama_imam' => $item->imam->name,
                'nama_masjid' => $item->masjid->name,
                'latitude_masjid' => $item->masjid->latitude,
                'longitude_masjid' => $item->masjid->longitude,
                'nama_aktivitas' => $item->activity->name,
                'date' => $item->date,
                'keterangan' => $item->keterangan,
                'bukti' => $item->bukti,
                'status' => $item->status,      
                'timestamps' => [
                    'created_at' => $item->created_at,  
                    'updated_at' => $item->updated_at,
                ],
            ];
        });
    
        return response()->json([
            'status' => true,
            'data' => $formattedJadwal,
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
        $jadwal = Jadwal::with('imam', 'masjid', 'activity')->
        where('imam_id', $id)->where('id', $id_jadwal)->first();
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
