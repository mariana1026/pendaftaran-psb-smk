<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Daftar;
use Illuminate\Http\Request;
use Session;
use Auth;

class DaftarController extends Controller
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
            $daftar = Daftar::where('nama', 'LIKE', "%$keyword%")
				->orWhere('alamat', 'LIKE', "%$keyword%")
				->orWhere('smpn', 'LIKE', "%$keyword%")
				->orWhere('nilai_un', 'LIKE', "%$keyword%")
				->orWhere('user_id', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $daftar = Daftar::paginate($perPage);
        }

        return view('daftar.index', compact('daftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('daftar.create');
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
        
        Daftar::create($requestData);

        Session::flash('flash_message', 'Daftar added!');

        return redirect('daftar');
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
        $daftar = Daftar::findOrFail($id);

        return view('daftar.show', compact('daftar'));
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
        $daftar = Daftar::findOrFail($id);

        return view('daftar.edit', compact('daftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $daftar = Daftar::findOrFail($id);
        $daftar->update($requestData);

        Session::flash('flash_message', 'Daftar updated!');

        return redirect('daftar');
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
        Daftar::destroy($id);

        Session::flash('flash_message', 'Daftar deleted!');

        return redirect('daftar');
    }

    public function personaldata(){
        $daftar = Daftar::where('user_id',Auth::user()->id)->get();
        return view ('daftar.personaldata',compact('daftar'));
    }


    public function peringkat(){
        $daftar = Daftar::orderBy('nilai_un','DESC')->get();

        return view('daftar.dataperingkat',compact('daftar'));
    }
}
