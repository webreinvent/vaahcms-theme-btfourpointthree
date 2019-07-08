@extends("btfourpointthree::layouts.master")

@section('content')
    <h1>Home Page Template</h1>

    @hello("test")


    <div style="margin: 40px 0px;">

    @if(isset($data->content))
        {!! $data->content !!}
    @endif



    </div>

@endsection
