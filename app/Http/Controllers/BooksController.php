<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\UpdateBooksRequest;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Books::create($request->all());
    }
    public function bookSearch(Request $request){
        if($request->ajax()){
            $data=books::where('name','LIKE',"%{$request->terms}%")->get();
            $output = '';
            if(count($data) >0){
                $output = '<ul class="list-group" style="display:block;position:relative;z-index:1">';
                foreach($data as $row){
                    $output .='<li class="list-group-item">'.$row->name.'<li>';
                }
                $output .= '</ul>';
            }
            else{
                $output .='<li class="list-group-item">No data Found</li>';
            }
            return $output;

        }
        return view('BookSearch');
    }
    public function search(Request $request)
    {
        $data=Books::select('book_title')
                        ->where('book_title','LIKE',"%{$request->terms}%")
                        ->get();
                        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBooksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBooksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBooksRequest  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBooksRequest $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books)
    {
        //
    }
}
