<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    //
    public function index()
    {
      $data ['buku']=[
        [
            'judul' => 'HTML',
            'halaman' => 125,
            'penulis' => 'ijan',
          ],
          [
            'judul' => 'CSS',
            'halaman' => 345,
            'penulis' => 'Farijan',
          ],
          ];
          return view('books.index', $data);
    
    }
}
