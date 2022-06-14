<?php

namespace App\Http\Controllers;

use App\Companies;
use App\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

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
