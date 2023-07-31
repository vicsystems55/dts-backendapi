<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\SubmissionNotifyMail;
use App\Models\VisitorsSubmission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

        $submissions = VisitorsSubmission::with('office')->latest()->get();

        return $submissions;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVisitorsSubmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $user = User::where('email', $request->email)->first();

        if ($user) {
            # code...

            // $doc = $request->file('file');

            // $new_name = rand().".".$doc->getClientOriginalExtension();

            // $doc->move(public_path('avatars'), $new_name);

            // $avatar = User::find($request->user()->id)->update([
            //     'avatar' => config('app.url').'avatars/'.$new_name
            // ]);
            $submission = VisitorsSubmission::create([
                'user_id' => $user->id,
                'title' => $request->title,
                'from_address' => $request->from_address,
                'phone' => $request->phone,
                'comments' => $request->comments,
                'tracking_code' => ('FMF-DTS-2023-'.rand(1000,9999)),

                'office_id' => $request->office_id,
                'submission_format' => $request->submission_format,
                'submission_date' => $request->submission_date,
                'uploada_url' =>'/doc.png',
            ]);


        }else{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->phone),
                'role' => 'visistor',
            ]);

            $submission = VisitorsSubmission::create([
                'user_id' => $user->id,
                'title' => $request->title,
                'from_address' => $request->from_address,
                'phone' => $request->phone,
                'comments' => $request->comments,
                'tracking_id' => rand('FMF-DTS-2023-'.rand(1000,9999)),

                'office_id' => $request->office_id,
                'submission_format' => $request->submission_format,
                'submission_date' => $request->submission_date,
                'uploada_url' =>'/doc.png',
            ]);
        }

        $datax =[
            'tracking_id' => $submission->tracking_code,
            'name' => $user->name
        ];

        Mail::to($user->email)->send(new SubmissionNotifyMail($datax));


        return $submission;




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
