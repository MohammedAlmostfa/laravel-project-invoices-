<?php

namespace App\Http\Controllers;

use App\Models\invoces_details;
use Illuminate\Http\Request;
use App\Models\invoices;
use App\Models\invoice_attachment;
use Illuminate\Support\Facades\Storage;

class InvocesDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(invoces_details $invoces_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edait ($id)


 {

        $invoices = invoices::where('id',$id)->first();
        $details  = invoces_details::where('id_Invoice',$id)->get();
        $attachments  = invoice_attachment::where('invoice_id',$id)->get();
        return view('invoices.invices_details',compact('invoices','details','attachments'));

    
 }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, invoces_details $invoces_details)
    {
        //
    }

    
    
 public function open_file($invoice_number, $file_name)
{
    return  Storage::disk('public_uploads')->get($invoice_number.'/'.$file_name);
   
}


public function get_file($invoice_number, $file_name)
{
      return  Storage::disk('public_uploads')->get($invoice_number.'/'.$file_name);
  
}

   public function destroy(Request $request)
    {
        
       // $invoices = invoice_attachments::findOrFail($request->id_file);
        //$invoices->delete();
        //Storage::disk('public_uploads')->delete($request->invoice_number.'/'.$request->file_name);
        //session()->flash('delete', 'تم حذف المرفق بنجاح');
       // return back();
    }

}