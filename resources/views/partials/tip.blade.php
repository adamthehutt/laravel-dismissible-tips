@if (!\AdamTheHutt\LaravelDismissibleTips\DismissedTip::where('user_id', $_user->id)->where('tip', $tip)->exists())

<div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <div class="row vertical-align">
        <div class="col-xs-1 text-right">
            <i class="fas fa-info-circle fa-2x"></i>
        </div>
        <div class="col-xs-10">
            {{ __("dismissible-tips::tips.$tip") }} @if ($link)&nbsp;&nbsp;<a href="{!! $link !!}"><i class="fas fa-arrow-circle-right"></i></a> @endif
        </div>
    </div>
</div>
<a class="dismiss-tip" data-tip="{{$tip}}" href="#">Don't show this tip again.</a>

@endif
