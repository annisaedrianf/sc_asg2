<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinema;

class CinemaController extends Controller
{
    public function index(){
        $cinema =Cinema::all();
        $data = ['cinema'=>$cinema];
        
        return $data;
    }

    public function create(Request $request){
        $cinema = new Cinema();
        $cinema->title = $request->title;
        $cinema->genre = $request->genre;
        $cinema->minutes = $request->minutes;
        $cinema->price = $request->price;
        $cinema->save();

        return "Cinema Added";
    }

    public function update(Request $request, $id){
        $cinema = Cinema::find($id);
        $cinema->title = $request->title;
        $cinema->genre = $request->genre;
        $cinema->minutes = $request->minutes;
        $cinema->price = $request->price;
        $cinema->save();

        return "Cinema Updated";
    }

    public function delete($id){
        $cinema = Cinema::find($id);
        $cinema->delete();

        return "Cinema Deleted";
    }

    public function detail($id){
        $cinema = Cinema::find($id);

        return $cinema;
    }
}
