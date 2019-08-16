@if (!Auth::check() || !\AdamTheHutt\LaravelDismissibleTips\DismissedTip::whereUserId(Auth::id())->whereTip($tip)->exists())
<div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <div class="row vertical-align">
        <div class="col-xs-1 text-right">
            <i class="fas fa-info-circle fa-2x"></i>
        </div>
        <div class="col-xs-10">
            @if (\Illuminate\Support\Facades\Lang::has($tip))
                @lang($tip)
            @else
                @lang("dismissible-tips::tips.$tip")
            @endif
            @isset($link)&nbsp;&nbsp;
                <a href="{!! $link !!}"><i class="fas fa-arrow-circle-right"></i></a>
            @endisset
        </div>
    </div>
</div>
@auth
<a class="dismiss-tip" data-tip="{{$tip}}" href="#">Don't show this tip again.</a>
@endauth
@endif
