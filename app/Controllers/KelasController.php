<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\UserModel;

class KelasController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getKelas(),        
        ];
        return view('list_kelas', $data);
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create Kelas',
        ];

        return view('create_kelas', $data);
    }

    public function store()
    {
        
        $this->kelasModel->saveKelas([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'angkatan' => $this->request->getVar('angkatan'),
        ]);

        
        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'angkatan' => $this->request->getVar('angkatan'),
        ];

            return redirect()->to('/kelas');
    }

    public function edit($id)
    {
        $user = $this->userModel->getUser($id);
        $kelas = $this->kelasModel->getKelas($id);

        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ];

        return view('edit_kelas',$data);
    }

    public function update($id)
    {
    
       $data = [
        'nama_kelas' => $this->request->getVar('nama_kelas'),
        'angkatan' => $this->request->getVar('angkatan'),
       ];

       $result = $this->kelasModel->updateKelas($data, $id);

       if(!$result){
        return redirect()->back()->withInput()
        ->with('error', 'Gagal Menyimpan Data');
       }

       return  redirect()->to(base_url('/kelas'));
    }

    public function destroy($id)
    {
        $result = $this->kelasModel->deleteKelas($id);
        if (!$result){
            return redirect()->back()->with('error', "Gagal Menghapus Data");
        }

        return redirect()->to(base_url('/kelas'))
        ->with('succes', 'Berhasil Menghapus Data');
    }
} 
