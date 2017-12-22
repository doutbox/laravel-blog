<?php

namespace App\Http\Controllers;

use App\Header;
use App\Http\Requests\HeaderFormRequest;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = Header::all();

        return view('headers.list')->with("headers", $headers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('headers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeaderFormRequest $request)
    {
        $header = new Header();
        $header->title = $request->get('title');
        $header->content = $request->get('content');

        $header->save();
        return redirect(route('headers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $header = Header::where('id', $id)->first();

        if (!$header){
            return redirect('/')->withErrors('Página requisitada não encontrada');
        } else {
            return view('headers.show')->with('header', $header);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $header = Header::where('id', $id)->first();

        return view('headers.edit')->with('header', $header);
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
        $header = Header::find($id);

        if ($header){
            $header->title = $request->input('title');
            $header->content = $request->input('content');

            $header->save();

            return redirect(route('headers.index'));
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
        $header = Header::find($id);

        if ($header){
            $header->delete();

            return redirect(route('headers.index'));
        }
    }
}
