<?php
declare(strict_types=1);

namespace AdamTheHutt\LaravelDismissibleTips;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DismissibleTipsController extends Controller
{
    public function dismiss(Request $request): JsonResponse
    {
        $dismissed = DismissedTip::firstOrCreate([
            'user_id' => $request->user()->id,
            'tip' => $request->input('tip')
        ]);

        return response()->json($dismissed);
    }
}
