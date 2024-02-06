<?php

namespace App\Http\Controllers;

use PDF;
use App\Mail\PdfMail;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Employee::create($request->all());
        $pdf = PDF::loadView('pdf.template', ['data' => $request->all()]);

        $pdf->save(storage_path('app/public/pdf_output.pdf'));
        
        Mail::to($request->email)->send(new PdfMail($request->all()));
        return back();
    }

    public function generatePdf(Request $request)
    {
        // Generate your PDF content and save it to a file or return a downloadable response.
        // Example using barryvdh/laravel-dompdf:
        
        $pdf = PDF::loadView('pdf.template', ['data' => $request->all()]);

        $pdf->save(storage_path('app/public/pdf_output.pdf'));
        

        return response()->json(['pdf_url' => asset('storage/pdf_output.pdf')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
