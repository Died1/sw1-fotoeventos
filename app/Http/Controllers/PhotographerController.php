<?php

namespace App\Http\Controllers;

use App\Models\Photographer;
use App\Http\Requests\PhotographerRequest;

class PhotographerController extends Controller
{
    public function get()
    {
        return Photographer::all();
    }

    public function find($id)
    {
        $photographer = Photographer::find($id);
        if ($photographer) {
            return $photographer;
        } else {
        }
    }

    public function update(PhotographerRequest $request, $id)
    {
        $validatedData = $request->validated();

        $photographer = Photographer::find($id);

        if (!$photographer) return response()->json(['message' => 'photographero no encontrado'], 404);

        $photographer->update($validatedData);

        return $photographer;
    }
}
