<?php

namespace App\Http\Controllers;

use App\Models\PetCategory;
use Illuminate\Http\Request;

class PetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pet_cat = PetCategory::all();
        return view('admin.pet-category', compact('pet_cat'));
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
        
        $x = PetCategory::create(
            $request->all()
        );

        if ($x) {
            return back()->with('success', 'Pet category added successfully');
        }else {
            return back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PetCategory $petCategory)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PetCategory $petCategory)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pet_cat = PetCategory::find($id);
        $pet_cat->id = $request->id;
        $pet_cat->name = $request->name;
        $pet_cat->description = $request->description;
        $pet_cat->status = $request->status; 
        $pc = $pet_cat->update();

        if ($pc) {
            return back()->with('success', 'Pet Category updated successfully');
        }else {
            return back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetCategory $petCategory)
    {
        //
    }
}
