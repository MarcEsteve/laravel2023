<?php
namespace App\Http\Controllers;
use App\Models\Ejemplo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ConnectController extends Controller
{
    public function index()
    {
        $ejemplos = Ejemplo::all();
        return view('ejemplo.index', compact('ejemplos'));
    }

    public function create()
    {
        return view('ejemplo.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'email' => 'required|unique:ejemplo,email',
        ]);

        Ejemplo::create($data);

        return redirect()->route('ejemplo.index')->with('success', 'Registro creado con éxito.');
    }

    public function edit(Ejemplo $ejemplo)
    {
        return view('ejemplo.edit', compact('ejemplo'));
    }

    public function update(Request $request, Ejemplo $ejemplo)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'email' => 'required|unique:ejemplo,email,' . $ejemplo->id,
        ]);

        $ejemplo->update($data);

        return redirect()->route('ejemplo.index')->with('success', 'Registro actualizado con éxito.');
    }

    public function destroy(Ejemplo $ejemplo)
    {
        $ejemplo->delete();
        return redirect()->route('ejemplo.index')->with('success', 'Registro eliminado con éxito.');
    }
    
    public function delete(Ejemplo $ejemplo)
    {
        return view('ejemplo.delete', compact('ejemplo'));
    }
}