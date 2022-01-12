<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Purchase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PurchaseController extends Controller
{
    public function showPurchases(){
        $purchases = Purchase::all();
        return view('purchases.show_purchases', [
            'purchases' => $purchases,
        ]);
    }

    public function createPurchases(){
        return view('purchases.create_purchases');
    }

    public function storePurchases(Request $request){
        //Validate the inputs
        $request->validate([
            'product_name' => 'required',
            'quantity' => 'required',
            'cost_price' => 'required',
            'purchasing_date' => 'required',
        ]);
        $purchases = Purchase::create([
            'quantity' => $request->quantity,
            'advance' => $request->advance,
            'cost_price' => $request->cost_price,
            'total_cost_price' => $request->cost_price * $request->quantity,
            'purchasing_date' => $request->purchasing_date,
            'product_name' => $request->product_name,
            'vendor_id' => Auth::user()->id,
            'purchase_status' => 'In stock',   
        ]);

        Session::flash('success', 'Category Inserted Successfully');
        return back();      
    }
}
