<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SupplierController extends Controller
{
   public function SupplierAll()
   {
       $suppliers = Supplier::query()->latest()->get();
//       dd($data);
       return view('backend.supplier.supplier_all',compact('suppliers'));
   }
   //end SupplierAll method

    public function SupplierAdd(){
        return view('backend.supplier.supplier_add');
    }
    //end SupplierAdd method

    public function SupplierStore(Request $request){
//       dd($request->all());
        Supplier::insert([
            'name'=>$request->name,
            'mobile_no'=>$request->mobile_no,
            'email'=>$request->email,
            'address'=>$request->address,
            'created_by'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Supplier Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('supplier/all')->with('SupplierStored','Supplier Inserted Success');

    }
//End method

}
