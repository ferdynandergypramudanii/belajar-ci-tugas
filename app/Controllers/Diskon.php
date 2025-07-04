<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiskonModel;

class Diskon extends BaseController
{
    protected $diskon;

    public function __construct()
    {
        $this->diskon = new DiskonModel();
    }

    public function index()
    {
        // Cek role admin
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/')->with('failed', 'Akses ditolak.');
        }

        $data['diskon'] = $this->diskon->orderBy('tanggal', 'ASC')->findAll();
        return view('diskon/index', $data);
    }

    public function create()
    {
        $tanggal = $this->request->getPost('tanggal');
        $nominal = $this->request->getPost('nominal');

        // Cek duplikasi tanggal
        $existing = $this->diskon->where('tanggal', $tanggal)->first();
        if ($existing) {
            return redirect()->back()->with('failed', 'Diskon untuk tanggal tersebut sudah ada.');
        }

        $this->diskon->save([
            'tanggal' => $tanggal,
            'nominal' => $nominal,
        ]);

        return redirect()->to('/diskon')->with('success', 'Diskon berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $nominal = $this->request->getPost('nominal');

        $this->diskon->update($id, [
            'nominal' => $nominal,
        ]);

        return redirect()->to('/diskon')->with('success', 'Diskon berhasil diubah.');
    }

    public function delete($id)
    {
        $this->diskon->delete($id);
        return redirect()->to('/diskon')->with('success', 'Diskon berhasil dihapus.');
    }
}
