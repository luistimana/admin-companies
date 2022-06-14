<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompaniesController extends Controller
{

    public function index()
    {
        $companies = Companies::all();
        return view('admin.companies.index', compact('companies'));
    }

    public function create()
    {
        $companies = Companies::all();

        return view('admin.companies.crear', compact('companies'));
    }

    public function store(Request $request)
    {
        $companies = new Companies;
        $companies->nombre = $request->nombre;
        $companies->correo = $request->correo;
        $logo = $request->file('logo');
        $nombre = $logo->getClientOriginalName();
        \Storage::disk('local')->put($nombre,  \File::get($logo));
        $companies->logo = $nombre;
        $companies->pagina_web = $request->pagina_web;
        $companies->save();

        return redirect('admin/companies')->with('message','Guardado Satisfactoriamente !');
    }

    public function actualizar($id)
    {
        $companies = Companies::find($id);
        return view('admin/companies.actualizar',['companies'=>$companies]);
    }

    public function update(Request $request, $id)
    {
        $companies = Companies::find($id);
        $companies->nombre = $request->nombre;
        $companies->correo = $request->correo;


        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $nombre = $logo->getClientOriginalName();
            \Storage::disk('local')->put($nombre,  \File::get($logo));
            $companies->logo = $nombre;
        }

        $companies->pagina_web = $request->pagina_web;
        $companies->save();

        return redirect('admin/companies')->with('message','Guardado Satisfactoriamente !');

    }

    public function destroy($id)
    {
        $companies = Companies::find($id);
        $imagen = explode(",", $companies->logo);
        Storage::delete($imagen);
        $companies->delete();

        return redirect('admin/companies')->with('message','Eliminado Satisfactoriamente !');
    }
}
