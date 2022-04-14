<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // function __construct()
    // {
    //   $this->middleware('guest');
    // //   $this->middleware('selected-middleware', ['only'=>'index']);
    // }
    public function index()
    {
        //
        $title ='index';
        return view('admin.index', compact('title'));
    }

    public function dataUser()
    {
        $title = 'data user';
        $dataUser = User::latest()->paginate(5);
        return view('admin.vDataUser', compact('title','dataUser'))->with('i',(request()->input('page', 1)-1)*5);
    }

    public function dataPt()
    {
        $title = 'data Perusahaan';
        $dataPt = User::latest()->paginate(5);
        return view('admin.vDataPt', compact('title','dataPt'))->with('i',(request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataUser = User::findOrFail($id);
        $dataUser->delete();

        if ($dataUser) {
            return redirect()->route('dataUser')->with(['success'=>'data user di hapus']);
        }else {
            return redirect()->route('dataUser')->with(['error'=>'data user gagal di hapus']);
        }
    }
}
