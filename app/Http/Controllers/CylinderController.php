<?php

namespace App\Http\Controllers;

use App\Models\Cylinder;
use Illuminate\Http\Request;

/**
 * Class CylinderController
 * @package App\Http\Controllers
 */
class CylinderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cylinders = Cylinder::paginate();

        return view('cylinder.index', compact('cylinders'))
            ->with('i', (request()->input('page', 1) - 1) * $cylinders->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cylinder = new Cylinder();
        return view('cylinder.create', compact('cylinder'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cylinder::$rules);

        $cylinder = Cylinder::create($request->all());

        return redirect()->route('cylinders.index')
            ->with('success', 'Cylinder created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cylinder = Cylinder::find($id);

        return view('cylinder.show', compact('cylinder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cylinder = Cylinder::find($id);

        return view('cylinder.edit', compact('cylinder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cylinder $cylinder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cylinder $cylinder)
    {
        request()->validate(Cylinder::$rules);

        $cylinder->update($request->all());

        return redirect()->route('cylinders.index')
            ->with('success', 'Cylinder updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cylinder = Cylinder::find($id)->delete();

        return redirect()->route('cylinders.index')
            ->with('success', 'Cylinder deleted successfully');
    }
}
