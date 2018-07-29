<?php

namespace App\Http\Controllers;

use App\Room;
use App\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $rooms = Room::latest()->paginate(5);
        $room_types = RoomType::pluck('room_type', 'id');
        return view('rooms.index',compact('rooms','room_types'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $room_types = RoomType::pluck('room_type', 'id');
        return view('rooms.create', compact('id', 'room_types'));
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
        request()->validate([
            'room_no' => 'required',
            'room_types_id' => 'required',
            'room_price' => 'required',
            'floor' => 'required',
        ]);
        Room::create($request->all());
        return redirect()->route('rooms.index')
                        ->with('success','Room created successfully');
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
        $rooms = Room::find($id);
        return view('rooms.show',compact('rooms'));
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
        $rooms = Room::find($id);
        return view('rooms.edit',compact('rooms'));
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
        request()->validate([
            'room_no' => 'required',
            'room_type' => 'required',
            'room_price' => 'required',
            'floor' => 'required',
        ]);
        Room::find($id)->update($request->all());
        return redirect()->route('rooms.index')
                        ->with('success','Room updated successfully');
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
        Room::find($id)->delete();
        return redirect()->route('rooms.index')
                        ->with('success','Room deleted successfully');
    }

    public static function getFreeRooms($date){
        echo "f exeted :".$date;
    }

}
