<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
//use Request;
use Auth;
use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct(){
        $this->middleware('auth',['only'=>'index']);

    }

    public function index()
    {
        //
         Auth::User();
        $show=Blog::latest('publishedAt')->published()->get();
        return view('blog.index',compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        //return 'hii';

        return view('blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    //Request $request
    public function store(Request $request)
    {
        //
        //['publishedAt']=Carbon::now();

        $this->validate($request,[
            'name'=>'required',
            'blogNo'=>'required',

    ]);
//       Auth::User()->blog;   //return the coolcetion
        $blog=new Blog($request->all());
        Auth::User()->blog()->save($blog);

        //dd($text);
        //$all=$request->all();
        //$ww=Blog::create($request->all());

        return redirect('blog');
      dd($ww);
        //$all=$request->all();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //

        $edit=Blog::findOrfail($id);
        return view('blog.edit',compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        //

        $this->validate($request,[
           "name"=>"required",
           "blogNo"=>"required",

        ]);
        $data=Blog::findOrfail($id);
        $data->update($request->all());
        dd($data);
        return 'hi';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
