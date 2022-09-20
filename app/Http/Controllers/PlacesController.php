<?php

namespace App\Http\Controllers;

use App\Http\Requests\Places\StorePlacesRequest;
use App\Models\Places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PlacesController extends Controller
{
    public function index() {
        return view('places.places', [
            'places' => Places::latest()->filter(request(['tag', 'search']))->simplePaginate(6)
        ]);
    }

    public function show(Places $place) {
        return view('places.place', [
            'place' => $place
        ]);
    }

    public function create() {
        return view('places.create');
    }

    public function store(StorePlacesRequest $request) {
        $data = $request->all();

//        if($request->hasFile('img')) {
//            $data['img'] = $request->file('img')->store('img', 'public');
//        }

        if ($request->hasFile('img')){
            $file = $request->file('img');
            $newFileName = time().'-'.$request->name.'.'.$file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('places', $file, $newFileName);
            $data['img'] = Storage::url('places'.$newFileName);
        }
$data['user_id'] = auth()->id();
        Places::create($data);

        return redirect('/');
    }

    public function edit(Places $place) {
        return view('places.edit', ['place' => $place]);
    }

    public function update(StorePlacesRequest $request, Places $place) {
        $data = $request->all();

        if($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('img', 'public');
        }

        $place->update($data);

        return back();
    }

    public function delete(Places $place) {

        if($place->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $place->delete();
        return redirect('/');
    }

}


