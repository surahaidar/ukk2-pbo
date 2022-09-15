<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jeniskamar;

class JeniskamarController extends Controller
{
    public function index(){
        $data = jeniskamar::all();
        return view('jeniskamar.jeniskamar', compact('data'));
    }

    public function jeniskamar()
    {
        return view('tambahkamar');
    }

    public function store(Request $request){
        $this->validate($request, [
            'jeniskamar'=> 'required',
            'fasilitaskamar'=> 'required',
            'reservasi'=> 'required',
            'harga'=> 'required',    
        ]);
        $request = jeniskamar::create($request->all());
        return redirect()->route('jeniskamar');
    }

    public function tampilankamar($id)
    {
        $data = jeniskamar::find ($id);
        return view('editkamar', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = jeniskamar::find($id);
        $data->update ($request->all());
        return redirect()->route('jeniskamar');
    }

    public function destroy($id)
    {
        $data = jeniskamar::find($id);
        $data->delete();
        return redirect()->route('jeniskamar');
    }
}
