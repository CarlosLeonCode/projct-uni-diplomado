<?php

namespace App\Http\Controllers;

use App\Models\Maintance;
use App\Models\Cylinder;
use Illuminate\Http\Request;

/**
 * Class MaintanceController
 * @package App\Http\Controllers
 */
class MaintanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maintances = Maintance::paginate();

        return view('maintance.index', compact('maintances'))
            ->with('i', (request()->input('page', 1) - 1) * $maintances->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maintance = new Maintance();
        $cylinders = Cylinder::All();
        return view('maintance.create', compact('maintance', 'cylinders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Maintance::$rules);

        $maintance = Maintance::create($request->all());

        return redirect()->route('maintances.index')
            ->with('success', 'Maintance created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maintance = Maintance::find($id);

        return view('maintance.show', compact('maintance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maintance = Maintance::find($id);
        $cylinder_id = $maintance->cylinder_id;
        $cylinders = Cylinder::where('id', $cylinder_id)->get();
        return view('maintance.edit', compact('maintance', 'cylinders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Maintance $maintance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maintance $maintance)
    {
        request()->validate(Maintance::$rules);

        $maintance->update($request->all());

        return redirect()->route('maintances.index')
            ->with('success', 'Maintance updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maintance = Maintance::find($id)->delete();

        return redirect()->route('maintances.index')
            ->with('success', 'Maintance deleted successfully');
    }
}
