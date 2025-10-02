<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Models\Feedback;
use App\Models\User;
use App\Services\FeedbackService;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $all_users = FeedbackService::GetLimitFeedback(9);
        $current_user = FeedbackService::GetLimitCurrentUser( 5);
        return view("feedback.index", ["data" => $all_users, 'current_user' => $current_user]);
    }

    public function store(StoreFeedbackRequest $request)
    {
        $request
            ->user()
            ->feedback()
            ->create($request->all());
        return back();
    }
}
