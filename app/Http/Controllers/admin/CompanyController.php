<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\PaymentImage;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
        return view('admin.company.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    private $company;
    public function store(Request $request)
    {

            $this->company = Company::newCompany($request);
            PaymentImage::newPaymentImage($request->payment_images, $this->company->id);
            return back()->with('message','Company Info Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $company = Company::find($id);
        return view('admin.company.edit', [
            'company' => $company,
            'paymentImages' => PaymentImage::where('company_id',$company->id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {

        $this->company = Company::updateCompany($request, $id);
        PaymentImage::updatePaymentImage($request->payment_images, $this->company->id);
        return back()->with('message', 'Company information updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
