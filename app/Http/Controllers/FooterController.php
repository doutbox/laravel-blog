<?php

namespace App\Http\Controllers;

use App\Footer;
use App\Http\Requests\FooterFormRequest;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footers = Footer::all();

        return view('footers.list')->with("footers", $footers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('footers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FooterFormRequest $request)
    {
        $footer = new Footer();
        $footer->title = $request->get('title');
        $footer->content = $request->get('content');

        $footer->save();

        return redirect(route('footers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $footer = Footer::where('id', $id)->first();

        return view('footers.show')->with('footer', $footer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footer = Footer::where('id', $id)->first();

        return view('footers.edit')->with('footer', $footer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $footer = Footer::find($id);

        if ($footer){
            $footer->title = $request->input('title');
            $footer->content = $request->input('content');

            $footer->save();

            return redirect(route('footers.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $footer = Footer::find($id);

        if ($footer){
            $footer->delete();

            return redirect(route('footers.index'));
        }
    }
}
