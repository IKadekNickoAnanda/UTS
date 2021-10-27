<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualModel;

class PenjualController extends Controller
{
    public function __construct()
    {
        $this->PenjualModel = new PenjualModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'penjual' => $this->PenjualModel->allData(),
        ];
        return view('penjual', $data);
    }
}
