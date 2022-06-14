<?php

namespace App\Http\Controllers;

use App\Companies;
use App\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employees::with('companies')->get();
        return view('admin.employees.index', compact('employees', 'companies'));
    }

    public function create()
    {
        $employees = Employees::all();
        $companies = Companies::all();

        return view('admin.employees.crear', compact('employees', 'companies'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:20',
            'apellido' => 'required|string|max:20',
            'compania_id' => 'required',
            'correo' => 'required',
            'telefono' => 'required|max:8|min:8',
        ]);

        $employees = new employees;
        $employees->nombre = $request->nombre;
        $employees->apellido = $request->apellido;
        $employees->compania_id = $request->compania_id;
        $employees->correo = $request->correo;
        $employees->telefono = $request->telefono;

        $employees->save();

        return redirect('admin/employees')->with('message','Guardado Satisfactoriamente !');
    }

    public function actualizar($id)
    {
        $employees = Employees::find($id);
        $companies = Companies::all();
        return view('admin/employees.actualizar',['employees'=>$employees, 'companies'=>$companies]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required|string|max:20',
            'apellido' => 'required|string|max:20',
            'compania_id' => 'required',
            'correo' => 'required',
            'telefono' => 'required|max:8|min:8',
        ]);

        $employees = Employees::find($id);
        $employees->nombre = $request->nombre;
        $employees->apellido = $request->apellido;
        $employees->compania_id = $request->compania_id;
        $employees->correo = $request->correo;
        $employees->telefono = $request->telefono;

        $employees->save();

        return redirect('admin/employees')->with('message','Guardado Satisfactoriamente !');

    }

    public function destroy($id)
    {
        $employees = Employees::find($id);
        $employees->delete();

        return redirect('admin/employees')->with('message','Eliminado Satisfactoriamente !');
    }
}
