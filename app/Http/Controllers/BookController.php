<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::get();
        if($book && $book->count() > 0){
            return response(['message' => 'Show data successful', 'data' => $authors], 200);
 
        }else{
        return response(['message' => 'No data to be displayed', 'data' => null], 404);
    }
        
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
        return Book::create([
            "title" => $request->title,
            "description" => $request->description,
            "author" => $request->author,
            "publisher" => $request->publisher,
            "date_of_issue" => $request->date_of_issue,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find();
        if ($authors && $authors->count() > 0) {
            return response(['message' => 'Show data successful', 'data' => $authors], 200);
 
        }else{
        return response(['message' => 'No data to be displayed', 'data' => null], 404);
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
        return Book::find($id)->update([
            "title" => $request->title,
            "description" => $request->description,
            "author" => $request->author,
            "publisher" => $request->publisher,
            "date_of_issue" => $request->date_of_issue,
        ]);

            if($book && $book->count() > 0){
                return response(['message' => 'Show data successful', 'data' => $authors], 200);
     
            }
            return response(['message' => 'No data to be displayed', 'data' => null], 404);
        
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
        
        return Book::destroy($id);
        if($book){
            $book->delete();
            return response([], 204);
 
        }else{
            return response(['message' => 'Update data failed', 'data' => null], 406);

        }
        
    
    }
}
