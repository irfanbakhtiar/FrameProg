<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class MahasiswaController extends Controller
{
public function index(Request $request){
    $mahasiswa = [
        [ 
            'no' => '1',
            'nama' => 'Takyun',
            'kelas' => '6A'
        ],
        [ 
            'no' => '2',
            'nama' => 'Muhammad Irfan Bakhtiar',
            'kelas' => '6B'
        ],
        [ 
            'no' => '3',
            'nama' => 'Warmo',
            'kelas' => '6C'
        ],
        [ 
            'no' => '4',
            'nama' => 'Jakwir',
            'kelas' => '6D'
        ]

    ];

    if($request->query('kelas')){
        $mahasiswa = array_filter($mahasiswa, function($kelas){
            return $kelas['kelas'] == request()->kelas;
        });
    }

    return view('mahasiswa', compact('mahasiswa'));
}

public function show($mahasiswa){
    $mahasiswa = [
      [ 
         'no' => '1',
         'nama' => 'Test1',
         'kelas' => '6A'
     ],
     [ 
         'no' => '2',
         'nama' => 'Muhammad Irfan B',
         'kelas' => '6B'
     ],
     [ 
         'no' => '3',
         'nama' => 'Test3',
         'kelas' => '6C'
     ],
     [ 
         'no' => '4',
         'nama' => 'Test4',
         'kelas' => '6D'
     ]

    ];

    if($mahasiswa){
      $mahasiswa = array_filter($mahasiswa, function($kelas){
          return $kelas['kelas'] == request()->segment(count(request()->segments()));
      });
  }
  return view('mahasiswa', compact('mahasiswa'));
}
}
