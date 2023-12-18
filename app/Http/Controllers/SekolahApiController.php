<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Jurusan;
use App\Models\User;
use App\Models\Sekolah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SekolahApiController extends Controller
{
    public function login(Request $request)
    {
        $email = strip_tags($request->input('email'));
        $password = strip_tags($request->input('password'));
        $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json([
                'status' => 400,
                'message' => 'Login gagal, silahkan periksa kembali username dan password anda',
            ]);
        }
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $user = Auth::user();
            if ($user) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Login Berhasil',
                    'data' => $user,
                ]);
                // return redirect()->intended('/');
            } else {
                return response()->json([
                    'status' => 400,
                    'message' => 'Login Gagal, Silahkan Perikasa kembali username dan password anda',
                ]);
            }
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Sepertinya terjadi Kesalahan',
            ]);
        }
    }
    //api check login
    public function cekLogin()
    {
        // Periksa apakah pengguna sudah login
        if (Auth::check()) {
            return response()->json([
                'status' => 200,
                'message' => 'User Login',
                'data' => Auth::user()
            ],);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'User is not logged in'
            ],);
        }
    }


    public function register(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        // $this->validate($request, [
        //     'name' => 'required|min:4',
        //     'email' => 'required|email|unique:users,email',
        //     'username' => 'required|unique:users,usernamfirst
        //     'no_hp' => 'required|numeric',
        //     'password' => 'required|min:8',
        // ]);

        $cekEmail = User::where('email', $email)->first();
        if ($cekEmail) {
            return response()->json([
                'status' => 400,
                'message' => 'Email Sudah digunakan'
            ],);
        }

      
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Registrasi Berhasil'
        ],);
    }

    // api logout
    public function logout(Request $request)
    {



        $token = '6905eab1ee153c3306ac531fcd5ae8ce';
        $headerValue = $request->header('token');

        $user = auth()->user();
        if (!$user) {
            return response()->json([
                'status' => 400,
                'message' => 'User is not logged in'
            ],);
        }

        if ($headerValue == $token) {
            Auth::logout();
            return response()->json([
                'status' => 200,
                'message' => 'Berhasil Logout',
            ]);
        } else {
            $data = [
                'status' => 400,
                'message' => 'Token Salah',
            ];
            return response()->json(['data' => $data]);
        }
    }
    public function sekolah (Request $request)
    {
        
        $token = '6905eab1ee153c3306ac531fcd5ae8ce';
        $headerValue = $request->header('token');

        $user = auth()->user();
        if (!$user) {
            return response()->json([
                'status' => 400, 
                'message' => 'User is not logged in'
            ],);
        }

        if ($headerValue == $token) {
        $data = Sekolah::get();

        $result  = [];
        foreach ($data as $item){
            $result [] = [
                'namasekolah'=>$item->namasekolah,
                'kepsek'=>$item->kepsek,
                'akre'=>$item->akre,
                'npsn'=>$item->kepsek,
                'visi'=>$item->visi,
                'misi'=>$item->misi,
                'ekskul'=>$item->ekskul,
                'nohp'=>$item->nohp,
                'lokasi'=>$item->lokasi,
                'berdiri'=>$item->berdiri,
                'logo'=>'http://sekolahku2/storage/'.$item->logo,
            ];
        }
       
        return response()->json([
            'status' => 200, 
            'message' => 'Berhasil',
            'data' => $result
        ],);

    } else {
        $data = [
            'status' => 400,
            'message' => 'Token Salah',
        ];
        return response()->json(['data' => $data]);
    }
    }

    public function jurusan (Request $request)
    {
        
        $token = '6905eab1ee153c3306ac531fcd5ae8ce';
        $headerValue = $request->header('token');

        $user = auth()->user();
        if (!$user) {
            return response()->json([
                'status' => 400, 
                'message' => 'User is not logged in'
            ],);
        }

        if ($headerValue == $token) {
        $data = Jurusan::get();

        $result  = [];
        foreach ($data as $item){
            $result [] = [
                'nama jurusan'=>$item->nmjurusan,
                'idsekolah'=>$item->idsekolah,
                'deskripsi'=>$item->deskripsi,
                'prospek'=>$item->prospek,
            ];
        }
       
        return response()->json([
            'status' => 200, 
            'message' => 'Berhasil',
            'data' => $result
        ],);

    } else {
        $data = [
            'status' => 400,
            'message' => 'Token Salah',
        ];
        return response()->json(['data' => $data]);
    }
    }

    public function userAktif(Request $request)
    {

         
        $token = '6905eab1ee153c3306ac531fcd5ae8ce';
        $headerValue = $request->header('token');
        $id_modul = $request->input('id_modul');

        $user = auth()->user();
        if (!$user) {
            return response()->json([
                'status' => 400, 
                'message' => 'User is not logged in'
            ],);
        }

        if ($headerValue == $token) {

        $data = User::find($user->id);

        return response()->json([
            'status' => 200,
            'message' => 'Success   ',
            'data' => $data,
        ]);
        } else {
        $data = [
            'status' => 400,
            'message' => 'Token Salah',
        ];
        return response()->json(['data' => $data]);
     }
    } 
}
