<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Imagen;
use Illuminate\Http\Request;

class ImagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $imagens = Imagen::where('nome', 'LIKE', "%$keyword%")
                ->orWhere('arquivo', 'LIKE', "%$keyword%")
                ->orWhere('ativo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $imagens = Imagen::latest()->paginate($perPage);
        }
        // $imagens = Imagen::make(stream_get_contents('miniatura','arquivo',['img']));
        // return $img->response();
        
        return view('admin.imagens.index', compact('imagens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.imagens.create');
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
                if ($request->hasFile('arquivo')) {
            $requestData['arquivo'] = $request->file('arquivo')
                ->store('uploads', 'public');
        }

        Imagen::create($requestData);

        return redirect('admin/imagens')->with('flash_message', 'Imagen added!');
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
        $imagen = Imagen::findOrFail($id);

        return view('admin.imagens.show', compact('imagen'));
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
        $imagen = Imagen::findOrFail($id);

        return view('admin.imagens.edit', compact('imagen'));
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
                if ($request->hasFile('arquivo')) {
            $requestData['arquivo'] = $request->file('arquivo')
                ->store('uploads', 'public');
        }

        $imagen = Imagen::findOrFail($id);
        $imagen->update($requestData);

        return redirect('admin/imagens')->with('flash_message', 'Imagen updated!');
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
        Imagen::destroy($id);

        return redirect('admin/imagens')->with('flash_message', 'Imagen deleted!');
    }
    
    
}
