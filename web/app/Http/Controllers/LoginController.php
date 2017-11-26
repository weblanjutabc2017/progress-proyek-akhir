<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
/* 
use App\Models\Invoice;
use App\Models\Customer; */

class LoginController extends Controller
{   

    public $page = 7;
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$invoices = Invoice::all();
        return view('Login.index')->with(['page' => $this->page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'invoice_no' => 'required',
            'date' => 'required',
            'npwp' => 'required',
            'req_date' => 'required',
            'customer_po' => 'required',
            'delivery_address' => 'required',
            'quantity' => 'required',
            'gross' => 'required',
            'vat' => 'required',
            'total_sales' => 'required',
            'unit_sell' => 'required',
            'extended_price' => 'required',
        ]);

        $invoice = new Invoice();
        $invoice->invoice_no = $request->get('invoice_no');
        $invoice->date = $request->get('date');
        $invoice->npwp = $request->get('npwp');
        $invoice->req_date = $request->get('req_date');
        $invoice->customer_po = $request->get('customer_po');
        $invoice->delivery_address = $request->get('delivery_address');
        $invoice->quantity = $request->get('quantity');
        $invoice->gross = $request->get('gross');
        $invoice->vat = $request->get('vat');
        $invoice->total_sales = $request->get('total_sales');
        $invoice->unit_sell = $request->get('unit_sell');
        $invoice->extended_price = $request->get('extended_price');
        $invoice->id_customer = $request->get('customer');


        $invoice->save();

        return redirect(session()->get('prefix').'/surat_menyurat/invoice');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
    }

    public function edit($id)
    {   
        $invoice = Invoice::FindOrFail($id);
        $customers = Customer::all();
        return view('surat_menyurat.invoice.edit')->with(['invoice' => $invoice,'customers' => $customers, 'page' => $this->page]);
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
         $this->validate($request,[
            'invoice_no' => 'required',
            'date' => 'required',
            'npwp' => 'required',
            'req_date' => 'required',
            'customer_po' => 'required',
            'delivery_address' => 'required',
            'quantity' => 'required',
            'gross' => 'required',
            'vat' => 'required',
            'total_sales' => 'required',
            'unit_sell' => 'required',
            'extended_price' => 'required',
        ]);

        $invoice = invoice::findOrFail($id);
        $invoice->invoice_no = $request->get('invoice_no');
        $invoice->date = $request->get('date');
        $invoice->npwp = $request->get('npwp');
        $invoice->req_date = $request->get('req_date');
        $invoice->customer_po = $request->get('customer_po');
        $invoice->delivery_address = $request->get('delivery_address');
        $invoice->quantity = $request->get('quantity');
        $invoice->gross = $request->get('gross');
        $invoice->vat = $request->get('vat');
        $invoice->total_sales = $request->get('total_sales');
        $invoice->unit_sell = $request->get('unit_sell');
        $invoice->extended_price = $request->get('extended_price');
        $invoice->id_customer = $request->get('customer');
        $invoice->save();

        return redirect(session()->get('prefix').'/surat_menyurat/invoice'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $invoice =  invoice::findOrFail($id);
        $invoice->delete();
        \Request::session()->flash('success', 'Successful Delete Data');
        return redirect()->back();

    }
    
    public function delete($id)
    {

        $invoice = new invoice();
        $invoice = $invoice->find($id);
        
         if(Auth::user()->id_role == 2){
            if(Auth::user()->id != $invoice->id_account){
                return 'denied';
            }
        }
        $invoice->delete();
        \Request::session()->flash('success', 'Successful Delete Data');

        return redirect()->back(); 
    }




}


