<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Treinadore;
use Illuminate\Http\Request;

class TreinadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $treinadores = Treinadore::where('nome', 'LIKE', "%$keyword%")
                ->orWhere('especialidade', 'LIKE', "%$keyword%")
                ->orWhere('facebook', 'LIKE', "%$keyword%")
                ->orWhere('twitter', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('linkedin', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $treinadores = Treinadore::latest()->paginate($perPage);
        }

        return view('admin.treinadores.index', compact('treinadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.treinadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Treinadore::create($requestData);

        return redirect('admin/treinadores')->with('flash_message', 'Treinadore added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $treinadore = Treinadore::findOrFail($id);

        return view('admin.treinadores.show', compact('treinadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $treinadore = Treinadore::findOrFail($id);

        return view('admin.treinadores.edit', compact('treinadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $treinadore = Treinadore::findOrFail($id);
        $treinadore->update($requestData);

        return redirect('admin/treinadores')->with('flash_message', 'Treinadore updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Treinadore::destroy($id);

        return redirect('admin/treinadores')->with('flash_message', 'Treinadore deleted!');
    }
}
