<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function store(Request $request, $type)
    {
        if ($request->pid) {
            $survey = new Survey;
            $survey->project_id = $request->pid;
            $survey->user_id = $request->uid;
            $survey->ip_address = $request->ip();
            $survey->status = $type;
            $survey->save();
            if ($survey->project_id != null) {
                $survey = Survey::where('id', $survey->id)->first();
                return view('welcome', compact('survey'));
            }
        }
    }
}
