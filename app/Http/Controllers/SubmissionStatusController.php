<?php

namespace App\Http\Controllers;

use App\Models\SubmissionStatus;
use App\Http\Requests\StoreSubmissionStatusRequest;
use App\Http\Requests\UpdateSubmissionStatusRequest;

class SubmissionStatusController extends Controller
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
     * @param  \App\Http\Requests\StoreSubmissionStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubmissionStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubmissionStatus  $submissionStatus
     * @return \Illuminate\Http\Response
     */
    public function show(SubmissionStatus $submissionStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubmissionStatusRequest  $request
     * @param  \App\Models\SubmissionStatus  $submissionStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubmissionStatusRequest $request, SubmissionStatus $submissionStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubmissionStatus  $submissionStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubmissionStatus $submissionStatus)
    {
        //
    }
}
