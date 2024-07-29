<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::all();

        // return response($data, 200);

        // return response([
        //     'code' => 200,
        //     'response' => [
        //         'data' => $data,
        //         "message" => 'Data berhasil ditampilkan',
        //     ]
        // ], 200);

        return response([
            'messege' => "Data berhasil di tambilkan",
            "data" => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer',
        ]);

        return response([
            'massage' => 'Data berhasil di input',
            'data' => Siswa::create($validator)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            return response([
                'massage' => 'Data berhasil ditampilkan',
                'data' => Siswa::findOrFail($id),
            ], 200);
        } catch (\Throwable $th) {
            return response([
                'massage' => 'Data tidak ditemukan',
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer',
        ]);

        $data = Siswa::find($id);
        $data->update($validator);

        return response([
            'massage' => 'Data berhasil di Update',
            'data' => $data
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response([
            'massage' => 'Data berhasil di hapus'
        ], 201);
    }
}
