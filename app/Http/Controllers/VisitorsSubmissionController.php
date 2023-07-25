<?php

namespace App\Http\Controllers;

use App\Models\VisitorsSubmission;
use App\Http\Requests\StoreVisitorsSubmissionRequest;
use App\Http\Requests\UpdateVisitorsSubmissionRequest;

class VisitorsSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVisitorsSubmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVisitorsSubmissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisitorsSubmission  $visitorsSubmission
     * @return \Illuminate\Http\Response
     */
    public function show(VisitorsSubmission $visitorsSubmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVisitorsSubmissionRequest  $request
     * @param  \App\Models\VisitorsSubmission  $visitorsSubmission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVisitorsSubmissionRequest $request, VisitorsSubmission $visitorsSubmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisitorsSubmission  $visitorsSubmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisitorsSubmission $visitorsSubmission)
    {
        //
    }
}
