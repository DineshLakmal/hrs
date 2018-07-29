<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Room;
use App\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $check_in;
    private $check_out; 
    private $arr_rooms_id;

    public function index()
    {
        //
        $bookings = Booking::latest()->paginate(5);
        return view('bookings.index',compact('bookings'))
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
        return view('bookings.create');
         // return redirect()->route('bookings.index')
         //                ->with('success','Booking created successfully');
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
            'name' => 'required',
            'guests' => 'required',
            'extras' => 'required',
            // 'total_charge' => 'required',
            'paid' => 'required',
        ]);
        $request->merge(['total_charge' => 7000]);
        $request->merge(['check_in' => Session::get('check_in')]);
        $request->merge(['check_out' => Session::get('check_out')]); 

        //Insert booking details & get inserting booking record back 
        $booking_data = Booking::create($request->all());

        //Add record to bookings_rooms table with booking id and room ids 
        foreach (Session::get('arr_rooms_id') as $room_id) {
            DB::table('bookings_rooms')->insert(
              ['bookings_id' => $booking_data->id, 'rooms_id' => $room_id]
            );
        }

        return redirect()->route('bookings.index')
                        ->with('success','Booking created successfully');
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
        $bookings = Booking::find($id);
        return view('bookings.show',compact('bookings'));
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
        $bookings = Booking::find($id);
        return view('bookings.edit',compact('bookings'));
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
            'name' => 'required',
            'email' => 'required',
        ]);
        Booking::find($id)->update($request->all());
        return redirect()->route('bookings.index')
                        ->with('success','Article updated successfully');
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
        Booking::find($id)->delete();
        return redirect()->route('bookings.index')
                        ->with('success','Article deleted successfully');
    }
    
    public function search(Request $request)
    {
        request()->validate([
            'guests' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);
        
        // Assign check_in and check_out into session variables for further uses
        Session::put('check_in', request()->check_in);
        Session::put('check_out', request()->check_out);
  
        $bookedRooms = DB::table('rooms')
             ->select('rooms.id')
             ->join('bookings_rooms', 'rooms.id', '=', 'bookings_rooms.rooms_id')
             ->join('bookings', 'bookings_rooms.bookings_id', '=', 'bookings.id')
             ->where('bookings.check_in', '<=', request()->check_in)->where('bookings.check_out', '>=', request()->check_out)
             ->get();
        
       
       //convert object array of bookedRooms into simple array 
       $arr_rooms_id=array();
       $i=0;
       foreach ($bookedRooms as $br) {
            $arr_rooms_id[$i]=$br->id;
            $i++;
        } 

        $availableRooms = DB::table('rooms')
                     ->select('*')
                     ->whereNotIn('id', $arr_rooms_id)
                     ->get();
        
       
        $room_types = RoomType::pluck('room_type', 'id');
        return view('bookings.search_result', ['rooms' => $availableRooms, 'room_types' => $room_types]);
    }

    public function addCustomer(Request $request){
        // Assign room_ID s to session array for further uses
        Session::put('arr_rooms_id', $request->input('room_id'));

        return view('bookings.create_customer');
    }

}
