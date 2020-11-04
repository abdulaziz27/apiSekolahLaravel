<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Murid;
use App\Models\Murid;
use App\Models\Kelas;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Murid::all();
        // $data = Murid::select("*");
        // $kelas = Kelas::all();

        // if ($request->keyword) {
        //     $query  = $request->keyword;
        //     $data->where(function ($q) use ($query) {
        //        $q->orWhere("name", "LIKE", "%{$query}%")
        //          ->orWhere("email", "LIKE", "%{$query}%")
        //          ->orWhere("phone_number", "LIKE", "%{$query}%")
        //          ->orWhere("address", "LIKE", "%{$query}%");
        //     });
        // } 
        // if ($request->gender) {
        //     $query  = $request->gender;
        //     $data->where("gender", $query);
        // }
        
        // %A A% %A%
        
        return $data;
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
        $murid = new Murid;
        $murid->nisn = $request->nisn;
        $murid->name = $request->name;
        $murid->email = $request->email;
        $murid->phone_number = $request->phone_number;
        $murid->address = $request->address;
        $murid->gender = $request->gender;
        $murid->kelas_id = $request->kelas_id;
        if ($murid->save()) {
            return ['status' => 'Yeay! Data Has Been Saved Successfully'];
        } else {
            return ['status' => 'Noo! Data Unsaved'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Murid::where('nisn',$id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Murid::where('nisn',$id)->first();
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
        $murid = Murid::where('nisn',$id)->first();
        $murid->nisn = $request->nisn;
        $murid->name = $request->name;
        $murid->email = $request->email;
        $murid->phone_number = $request->phone_number;
        $murid->address = $request->address;
        $murid->gender = $request->gender;
        $murid->kelas_id = $request->kelas_id;
        if ($murid->update()) {
            return ['status' => 'Yeay! Data Has Been Updated Successfully'];
        } else {
            return ['status' => 'Noo! Failed to Update'];
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
        $murid = Murid::where('nisn',$id)->first();
        if ($murid->delete()) {
            return ['status' => 'Yeay! Data Has Been Deleted Successfully'];
        } else {
            return ['status' => 'Noo! Failed to Delete'];
        }
    }
}
