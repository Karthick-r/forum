<?php

namespace App\Http\Controllers;
use App\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro = new Profile;
        $pro->user_id = Auth::user()->id;
        if($request->hasFile('image')){

            $image  = $request->image;
            $new = time().$image->getOriginalClientName();
            $image->move('upload', $new);
            $pro->image = 'upload/'.$new;

        }

        $pro->company = $request->company;
        $pro->about = $request->about;
        $pro->save();

        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $pro = Profile::where('user_id', '=', Auth::user()->id)->first();
        $pro->user_id = Auth::user()->id;
        if($request->hasFile('image')){

            $image  = $request->image;
            $new = time().$image->getOriginalClientName();
            $image->move('upload', $new);
            $pro->image = 'upload/'.$new;

        }

        $pro->company = $request->company;
        $pro->about = $request->about;
        $pro->save();

        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
