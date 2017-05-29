<?php

namespace App\Http\Controllers;

use App\{Sale, Seller};
use App\Http\Requests\StoreSaleRequest;

class SaleController extends Controller
{
    /**
     * Store seller's sale
     *
     * @param  StoreSaleRequest $request
     * @return Response
     */
    public function store(StoreSaleRequest $request)
    {
        $seller = Seller::find($request->input('seller_id'));

        $sale = new Sale();

        $sale->value = $request->input('value');

        $sale->seller()->associate($seller);

        $sale->save();

        return response()->json([
            'name' => $seller->name,
            'email' => $seller->email,
            'commission' => $sale->value->multiply(8.5)->divide(100)->getAmount()
        ]);
    }
}
