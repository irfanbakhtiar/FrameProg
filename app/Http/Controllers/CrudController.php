<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class CrudController extends Controller
{
public function index(Request $request){
    $crud = [
        [ 
            'nim' => '17090047',
            'nama' => 'Muhammad Irfan Bakhtiar',
            'judulta' => 'Detektor Pengaman Motor'
        ],
        [ 
            'nim' => '17090048',
            'nama' => 'David',
            'judulta' => 'Aplikasi Puskesmas'
        ],
        [ 
            'nim' => '17090049',
            'nama' => 'Ryan Mac',
            'judulta' => 'Aplikasi Web Mobile'
        ],
        [ 
            'nim' => '17090050',
            'nama' => 'Jacob Dutch',
            'judulta' => 'Aplikasi Web MP3'
        ]

    ];

    if($request->query('judulta')){
        $crud = array_filter($crud, function($judulta){
            return $judulta['judulta'] == request()->judulta;
        });
    }

    return view('crud', compact('crud'));
}

public function create(){
    return view('create'); 
}

public function store(Request $request){
    $name = $request->name;
    
    return redirect('crud')->with(['success' => 'Berhasil! '.$name.' berhasil ditambahkan']);
}

public function show($crud){
    $cruds = [
        [ 
            'nim' => '17090047',
            'nama' => 'Muhammad Irfan Bakhtiar',
            'judulta' => 'Detektor Pengaman Motor'
        ],
        [ 
            'nim' => '17090048',
            'nama' => 'David',
            'judulta' => 'Aplikasi Puskesmas'
        ],
        [ 
            'nim' => '17090049',
            'nama' => 'Ryan Mac',
            'judulta' => 'Aplikasi Web Mobile'
        ],
        [ 
            'nim' => '17090050',
            'nama' => 'Jacob Dutch',
            'judulta' => 'Aplikasi Web MP3'
        ]

    ];

    if($crud){
        $cruds = array_filter($cruds, function($id){
            return $id['nim'] == request()->crud;
        });
    }

    return view('detail', compact('cruds')); 
}

public function edit($crud){
    $cruds = [
        [ 
            'nim' => '17090047',
            'nama' => 'Muhammad Irfan Bakhtiar',
            'judulta' => 'Detektor Pengaman Motor'
        ],
        [ 
            'nim' => '17090048',
            'nama' => 'David',
            'judulta' => 'Aplikasi Puskesmas'
        ],
        [ 
            'nim' => '17090049',
            'nama' => 'Ryan Mac',
            'judulta' => 'Aplikasi Web Mobile'
        ],
        [ 
            'nim' => '17090050',
            'nama' => 'Jacob Dutch',
            'judulta' => 'Aplikasi Web MP3'
        ]

    ];

    if($crud){
        $cruds = array_filter($cruds, function($id){
            return $id['nim'] == request()->crud;
        });
    }

    return view('edit', compact('cruds'));        
}

public function update(Request $request){
    
    if($request->old_name == $request->name){
        return redirect('/crud')->with(['error' => 'Gagal Edit! Data masih sama!']);
    }else{
        return redirect('/crud')->with(['success' => 'Berhasil! mengubah '.$request->old_name.' menjadi '.$request->name]);
    }
}

public function destroy(Request $request){
    $nama = $request->name;
    return redirect('/crud')->with(['success' => 'Berhasil! Data '.$nama.' berhasil dihapus.']);
}
}