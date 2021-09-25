<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Lens;
use Illuminate\Http\Request;


class LensController_M extends Controller
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
            $lens = Lens::where('lensID', 'LIKE', "%$keyword%")
                ->orWhere('lenstype', 'LIKE', "%$keyword%")
                ->orWhere('lensprice', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $lens = Lens::latest()->paginate($perPage);
        }

        return view('manager.lens.index', compact('lens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('manager.lens.create');
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
        
        Lens::create($requestData);

        return redirect('manager/lens')->with('flash_message', 'Lens added!');
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
        $lens = Lens::findOrFail($id);

        return view('manager.lens.show', compact('lens'));
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
        $lens = Lens::findOrFail($id);

        return view('manager.lens.edit', compact('lens'));
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
        
        $len = Lens::findOrFail($id);
        $len->update($requestData);

        return redirect('manager/lens')->with('flash_message', 'Lens updated!');
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
        Lens::destroy($id);

        return redirect('manager/lens')->with('flash_message', 'Lens deleted!');
    }
}
