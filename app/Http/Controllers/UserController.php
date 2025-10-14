<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }
    public function create(){
        $kelasModel =  new Kelas();
        $kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }
    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }
    public function store(Request $request){
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        Session::flash('success', 'User berhasil ditambahkan!');
        return redirect()->to('/user');
    }

     public function edit($id){
        $user = UserModel::findOrFail($id);
        $kelas = $this->kelasModel->getKelas();
        return view('edit_user', [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = UserModel::findOrFail($id);
        $exists = UserModel::where('npm', $request->input('npm'))
            ->where('id', '!=', $id)
            ->exists();
        if ($exists) {
            return redirect()
                ->back()
                ->withErrors(['NPM sudah ada, data sudah ada!'])
                ->withInput();
        }
        $user->update([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        \Session::flash('success', 'User berhasil diupdate!');
        return redirect()->to('/user');
    }

    public function destroy($id){
        $user = UserModel::findOrFail($id);
        $user->delete();
        Session::flash('success', 'User berhasil dihapus!');
        return redirect()->to('/user');
    }

    public function getUser(){
        return $this->join('kelas','kelas.id','=','user.kelas_id')
                    ->select('user.*','kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}