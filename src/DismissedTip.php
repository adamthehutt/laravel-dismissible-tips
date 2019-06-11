<?php
declare(strict_types=1);

namespace AdamTheHutt\LaravelDismissibleTips;

use Illuminate\Database\Eloquent\Model;

class DismissedTip extends Model
{
    public $fillable = ['user_id', 'tip'];
}
