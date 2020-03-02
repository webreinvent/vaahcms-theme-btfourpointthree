@extends("btfourpointthree::layouts.master")

@section('content')


    @if(isset($data->title))
        <h1>{!! $data->title !!}</h1>
    @endif

    <h1>{{VaahExcel::helloWorld()}}</h1>

<div style="margin: 40px 0px;">
@if(isset($data->content))
    {!! $data->content !!}
@endif



</div>


@endsection
