<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class invoices extends Model
{
    protected $fillable=[
    
            'invoice_number' ,
            'invoice_Date' ,
            'product',
            'section_id',
            'Amount_collection',
            'Amount_Commission' ,
            'Discount',
            'Value_VAT' ,
            'Rate_VAT',
            'Total',
            'Status' ,
            'Value_Status',
            'note',
             'Payment_Date',
     ];
  public function section()
{
    return $this->belongsTo('App\Models\Section');
}
use SoftDeletes;


     
}
