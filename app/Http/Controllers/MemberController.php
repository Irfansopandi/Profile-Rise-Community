<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index() {
        $dataMem = Member::all();

        return view('admin.anggota', compact('dataMem'));
    }

    public function addMember(Request $request) {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric|digits:8',
            'kampus' => 'required',
            'divisi' => 'required',
            'jabatan' => 'required'
        ]);

        Member::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kampus' => $request->kampus,
            'divisi' => $request->divisi,
            'jabatan' => $request->jabatan
        ]);

        return redirect()->route('member.index')->with('Succes', 'Data berhasil ditambahkan');
    }

    public function deleteMember($id) {
        $dataMem = Member::findOrFail($id);
        $dataMem->delete();
        
        return redirect()->route('member.index')->with('succes', 'Data berhasil dihapus');
    }
}
