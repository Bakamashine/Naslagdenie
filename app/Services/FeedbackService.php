<?php

namespace App\Services;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackService
{
    public static function GetLimitFeedback(int $count)
    {
        return Feedback::limit($count)->orderByDesc("created_at")->get();
    }

    public static function GetLimitCurrentUser(int $count)
    {
        $data = request()
            ->user()
            ->feedback()
            ->limit($count)
            ->orderByDesc("created_at")
            ->get();
        return $data;

    }
}
