<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Fakultas;
use App\Models\ProgramStudi;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');

        $users = User::all();

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('admin');
        $roles = Role::all();

        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->authorize('admin');

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role_id' => 'required|exists:roles,id',
            'prodi_id' => 'required_if:role_id,4|exists:program_studis,id',
            'fakultas_id' => 'required_if:role_id,3|exists:fakultas,id',
        ]);

        $data['password'] = bcrypt($data['password']);

        DB::transaction(function () use ($data) {

            $store = User::create($data);

            if ($data['role_id'] == 3 || $data['role_id'] == 4) {
                $store->roles()->attach($data['role_id'], ['fakprod_id' => $data['fakultas_id'] ?? $data['prodi_id']]);
            }

        });


         return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|min:6|confirmed',
            'role_id' => 'required|exists:roles,id',
            'prodi_id' => 'required_if:role_id,4|exists:program_studis,id_prodi',
            'fakultas_id' => 'required_if:role_id,3|exists:fakultas,id',
        ]);


        if ($data['password']) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user = User::findOrFail($id);
        $user->update($data);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    public function getProdi()
    {
        $data = ProgramStudi::select('id', 'nama_program_studi', 'kode_prodi', 'id_prodi', 'nama_jenjang_pendidikan')->get()->toArray();

        return response()->json($data);

    }

    public function getFakultas()
    {
        $data = Fakultas::select('id', 'nama_fakultas')->get()->toArray();

        return response()->json($data);

    }
}
