<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Http\Requests\PurchaseRequest;

class PurchaseController extends Controller
{
    public function get()
    {
        return Purchase::with('purchaseDetails', 'user')->get();
    }

    public function find($id)
    {
        $result = Purchase::with('purchaseDetails', 'user')->find($id);
        if ($result) {
            return $result;
        } else {
        }
    }


    public function save(PurchaseRequest $request)
    {
        $validatedData = $request->validated();

        return Purchase::create($validatedData);
    }

    public function update(PurchaseRequest $request, $id)
    {
        $validatedData = $request->validated();

        $purchase = Purchase::find($id);

        if (!$purchase) return response()->json(['message' => 'purchase no encontrado'], 404);

        $purchase->update($validatedData);

        return $purchase;
    }
}
