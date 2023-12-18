<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function getDataUser(Request $request) {
        $nama = $request->get('nama');
        $email = $request->get('email');

        $arrNama = [
            'nama' => $nama,
            'email' => $email
        ];

        return response()->json($arrNama, 200);
    }

    public function createDataUser(Request $request) {
        $arr = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
        ];

        $isValid = $this->cekUser($arr['username']);

        if ($isValid) {
            $res['status'] = true;
            $res['message'] = 'Username Valid!';
            $code = 200;
        } else {
            $res['status'] = false;
            $res['message'] = 'Username Tidak Valid!';
            $code = 401;
        }

        return response()->json($res, $code);
    }

    private function cekUser($username) {
        return $username === 'Nengsih';
    }

    public function updateDataUser(Request $request) {
        $arr = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
        ];

        // response json
        return response()->json($arr, 200);
    }

    public function deleteDataUser(Request $request) {
        $username = $request->input('username');

        $isValid = $this->cekUser($username);

        if ($isValid) {
            $res['status'] = true;
            $res['message'] = 'Data berhasil dihapus!';
            $code = 200;
        } else {
            $res['status'] = false;
            $res['message'] = 'Data tidak ditemukan atau username tidak valid!';
            $code = 401;
        }

        return response()->json($res, $code);
    }
}
