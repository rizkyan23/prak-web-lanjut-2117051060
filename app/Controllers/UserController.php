<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;
use PhpParser\Node\Expr\FuncCall;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'user' => $this->userModel->getUser(),        
        ];

        return view('list_user', $data);
    }

    public function profile($nama = " ", $kelas = " ", $npm = " ")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];

        return view('profile', $data);
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        // $kelas = [
        //     [
        //         'id'    => 1,
        //         'nama_kelas'    => 'A'
        //     ],
        //     [
        //         'id'    => 2,
        //         'nama_kelas'    => 'B'
        //     ],
        //     [
        //         'id'    => 3,
        //         'nama_kelas'    => 'C'
        //     ],
        //     [
        //         'id'    => 4,
        //         'nama_kelas'    => 'D'
        //     ],
        // ];

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store()
    {

        // $userModel = new UserModel();
        
        if(!$this->validate($this->userModel->getValidationRules())) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back();
        }

        $path = 'assets/uploads/img/';

        $foto = $this->request->getFile('foto');

        $name = $foto->getRandomName();

        if($foto->move($path, $name))
        {
            $foto = base_url($path. $name);
        }

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
            'foto' => $foto
        ]);

        
        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $this->request->getVar('kelas'),
        ];

        return redirect()->to('/user');
    }

    public function edit($id)
    {
        $user = $this->userModel->getUser($id);
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ];

        return view('edit_user',$data);
    }

    public function update($id)
    {
       $path = 'assets/uploads/img/';
       $foto = $this->request->getFile('foto');
    
       $data = [
        'nama' => $this->request->getVar('nama'),
        'id_kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
       ];

       if ($foto->isValid()){
        $name = $foto->getRandomName();

        if ($foto->move($path, $name)) {
            $foto_path = base_url($path . $name);

            $data['foto'] = $foto_path;
        }
       }

       $result = $this->userModel->updateUser($data, $id);

       if(!$result){
        return redirect()->back()->withInput()
        ->with('error', 'Gagal Menyimpan Data');
       }

       return  redirect()->to(base_url('/user'));
    }

    public function destroy($id)
    {
        $result = $this->userModel->deleteUser($id);
        if (!$result){
            return redirect()->back()->with('error', "Gagal Menghapus Data");
        }

        return redirect()->to(base_url('/user'))
        ->with('succes', 'Berhasil Menghapus Data');
    }

    public function show($id)
    {
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user'  => $user
        ];
        return view('profile', $data);
    }
}