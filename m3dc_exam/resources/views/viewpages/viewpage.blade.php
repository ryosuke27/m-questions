@extends('layouts.layoutindex')

@section('content')

<div class="container">
    <div class="container-component">

        <div class="pageWrap">
            <div class="panel panel-primary">
                <div class="panel-heading text-center"></div>
                <div class="panel-body">
                        <div class="gaiyo">
							<dl>
                          		<dt>日程</dt>
								<dd>{{ config('defaultcfg')['defaultcfg']['SEMI_INFO_DATE'] }}</dd>
								<dt>演題</dt>
								<dd>{{ config('defaultcfg')['defaultcfg']['SEMI_INFO_TITLE'] }}</dd>
								<dt>演者</dt>
								<dd>{{ config('defaultcfg')['defaultcfg']['SEMI_INFO_PROF'] }}</dd>
               				</dl>
                        </div>
                <div>
                     <iframe src="/img/m3dc_logo.png"></iframe>
                </div>
                <div class="panel-footer">
                    <p class="glyphicon glyphicon-warning-sign text-danger">　PCでご視聴の場合はVPNを切断しご覧ください</p>
                </div>
            </div>

            <div class="col-sm-12 contactBox">
                <a target="_blank" href="{{ config('defaultcfg')['defaultcfg']['INQUIRY_URL'] }}">接続に関する技術的な質問等ございましたら、こちらからお問い合わせ下さい。</a>
            </div>
        </div>

    </div>
</div>

@endsection