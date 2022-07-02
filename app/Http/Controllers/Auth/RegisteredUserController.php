<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use App\Models\User;
use App\Models\Wilayah;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $provinsis = Wilayah::where('kode', 'like', '__')->get();
        $jabatans = Jabatan::all();

        return view('auth.register', compact('provinsis', 'jabatans'));
    }

    public function findKabko(Request $request){
        
        $data = Wilayah::where('kode', 'like', $request->kode.'.__')->get();

        return response()->json($data);
    }

    public function findKecamatan(Request $request){
        
        $data = Wilayah::where('kode', 'like', $request->kode.'.__')->get();

        return response()->json($data);
    }

    public function findKelurahan(Request $request){
        
        $data = Wilayah::where('kode', 'like', $request->kode.'%')->get();

        return response()->json($data);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        // return $request->file('photo')->store('/profiles');

        // dd($request);
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nik' => ['required', 'string', 'max:16'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tgl_lahir' => ['required', 'string', 'max:255'],
            'jk' => ['required', 'integer'],
            'agama' => ['required', 'string', 'max:255'],
            'pendidikan' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'pengurus_tingkat' => ['required', 'string', 'max:255'],
            'provinsi' => ['required', 'string', 'max:255'],
            'kabko' => ['required', 'string', 'max:255'],
            'kecamatan' => ['required', 'string', 'max:255'],
            'kelurahan' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'no_hp' => ['required', 'string', 'max:13', 'max:1024'],
            'photo' => ['required', 'image', 'file'],
            'ktp' => ['required', 'image', 'file'],
        ]);

        $user = $request->all();

        if($request->file('photo'))
        {
            $user['photo'] = $request->file('photo')->store('profiles');
        }

        if($request->file('ktp'))
        {
            $user['ktp'] = $request->file('ktp')->store('ktp');
        }

        $user['password'] = Hash::make($request->password);

        $user = User::create($user);


        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'nik' => $request->nik,
        //     'tempat_lahir' => $request->tempat_lahir,
        //     'tgl_lahir' => $request->tgl_lahir,
        //     'jk' => $request->jk,
        //     'agama' => $request->agama,
        //     'pendidikan' => $request->pendidikan,
        //     'alamat' => $request->alamat,
        //     'pengurus_tingkat' => $request->pengurus_tingkat,
        //     'provinsi' => $request->provinsi,
        //     'kabko' => $request->kabko,
        //     'kecamatan' => $request->kecamatan,
        //     'kelurahan' => $request->kelurahan,
        //     'jabatan' => $request->jabatan,
        //     'no_hp' => $request->no_hp,
        //     'photo' => $dir ?? null,
        // ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
