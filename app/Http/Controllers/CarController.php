<?php

namespace App\Http\Controllers;

use App\Car;
use App\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(5);
        return view('admin/car/index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/car/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required',
            'capacity' => 'required',
            'speed' => 'required',
            'price' => 'required',
            'seat' => 'required',
        ]);

        $slug = Str::slug($request->name);
        $attr['slug'] = $slug;

        $thumbnail1 = request()->file('thumbnail1');
        $thumbnailUrl1 = $thumbnail1->storeAs("images/photos", "{$slug}.'1'.{$thumbnail1->extension()}");
        $attr['thumbnail1'] = $thumbnailUrl1;

        $thumbnail2 = request()->file('thumbnail2');
        $thumbnailUrl2 = $thumbnail2->storeAs("images/photos", "{$slug}.'2'.{$thumbnail2->extension()}");
        $attr['thumbnail2'] = $thumbnailUrl2;

        $thumbnail3 = request()->file('thumbnail3');
        $thumbnailUrl3 = $thumbnail3->storeAs("images/photos", "{$slug}.'3'.{$thumbnail3->extension()}");
        $attr['thumbnail3'] = $thumbnailUrl3;

        $thumbnail4 = request()->file('thumbnail4');
        $thumbnailUrl4 = $thumbnail4->storeAs("images/photos", "{$slug}.'4'.{$thumbnail4->extension()}");
        $attr['thumbnail4'] = $thumbnailUrl4;

        Car::create($attr);
        return redirect()->to('/car/create')->with('success', 'Data Mobil berhasil dibuat !');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $cars)
    {
        $cars->delete();
        return redirect()->to('/car/listcar')->with('success', 'Data Mobil berhasil dihapus !');
    }
}
