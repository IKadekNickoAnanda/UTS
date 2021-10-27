<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelompokpenjualModel;

class KelompokpenjualController extends Controller
{
    public function __construct()
    {
        $this->KelompokpenjualModel = new KelompokpenjualModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'kelompokpenjual' => $this->KelompokpenjualModel->allData(),
        ];
        return view('kelompokpenjual', $data);
    }

    public function detail($id_kelompokpenjual)
    {
        if (!$this->KelompokpenjualModel->detailData($id_kelompokpenjual)) {
            abort(404);
        }
        $data = [
            'kelompokpenjual' => $this->KelompokpenjualModel->detailData($id_kelompokpenjual),
        ];
        return view('detailkelompokpenjual', $data);
    }

    public function add()
    {
        return view('addkelompokpenjual');
    }

    public function insert()
    {
        Request()->validate([
            'id_kp' => 'required|unique:tb_kelompokpenjual,id_kp|min:4|max:4|',
            'nama_kelompokpenjual' => 'required',
        ],[
            'id_kp.required' => 'wajib diisi!',
            'id_kp.unique' => 'id ini sudah ada!',
            'id_kp.min' => 'minimal 4 karakter!',
            'id_kp.max' => 'maksimal 4 karaktere!',
            'nama_kelompokpenjual.required' => 'wajib diisi!',
        ]);

        //jika validasi tidak ada maka simpan data
        $data = [
            'id_kp' => Request()->id_kp,
            'nama_kelompokpenjual' => Request()->nama_kelompokpenjual,
        ];

        $this->KelompokpenjualModel->addData($data);
        return redirect()->route('kelompokpenjual')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id_kelompokpenjual)
    {
        if (!$this->KelompokpenjualModel->detailData($id_kelompokpenjual)) {
            abort(404);
        }
        $data = [
            'kelompokpenjual' => $this->KelompokpenjualModel->detailData($id_kelompokpenjual),
        ];
        return view('editkelompokpenjual', $data);
    }

    public function update($id_kelompokpenjual)
    {
        Request()->validate([
            'id_kp' => 'required|min:4|max:4|',
            'nama_kelompokpenjual' => 'required',
        ],[
            'id_kp.required' => 'wajib diisi!',
            'id_kp.min' => 'minimal 4 karakter!',
            'id_kp.max' => 'maksimal 4 karaktere!',
            'nama_kelompokpenjual.required' => 'wajib diisi!',
        ]);


        //jika validasi tidak ada maka simpan data
        $data = [
            'nama_kelompokpenjual' => Request()->nama_kelompokpenjual,
        ];

        $this->KelompokpenjualModel->editData($id_kelompokpenjual, $data);
        return redirect()->route('kelompokpenjual')->with('pesan', 'Data Berhasil Diupdate!');
    }

    public function delete($id_kelompokpenjual)
    {
        $this->KelompokpenjualModel->deleteData($id_kelompokpenjual);
        return redirect()->route('kelompokpenjual')->with('pesan', 'Data Berhasil Dihapus!');
    }

}
