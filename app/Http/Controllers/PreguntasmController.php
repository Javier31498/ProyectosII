<?php

namespace App\Http\Controllers;

use App\Models\Preguntasm;
use Illuminate\Http\Request;

/**
 * Class PreguntasmController
 * @package App\Http\Controllers
 */
class PreguntasmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntasms = Preguntasm::paginate();

        return view('preguntasm.index', compact('preguntasms'))
            ->with('i', (request()->input('page', 1) - 1) * $preguntasms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preguntasm = new Preguntasm();

        return view('preguntasm.create', compact('preguntasm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Preguntasm::$rules);

        $preguntasm = Preguntasm::create($request->all());

        return redirect()->route('preguntasm.index')
            ->with('success', 'Pregunta creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preguntasm = Preguntasm::find($id);

        return view('preguntasm.show', compact('preguntasm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preguntasm = Preguntasm::find($id);

        return view('preguntasm.edit', compact('preguntasm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Preguntasm $preguntasm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preguntasm $preguntasm)
    {
        request()->validate(Preguntasm::$rules);

        $preguntasm->update($request->all());

        return redirect()->route('preguntasm.index')
            ->with('success', 'Pregunta respondida correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $preguntasm = Preguntasm::find($id)->delete();

        return redirect()->route('preguntasm.index')
            ->with('success', 'Preguntasm deleted successfully');
    }
}
