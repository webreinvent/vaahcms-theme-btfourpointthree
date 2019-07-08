@extends("btfourpointthree::layouts.master")

@section('content')


@if(isset($data->title))
    <h1>{!! $data->title !!}</h1>
@endif


<div style="margin: 40px 0px;">
@if(isset($data->content))
    {!! $data->content !!}
@endif



<div class="row">
    <div class="col-md-4">
        <h2>{{vh_field("Feature Two", "text")}}</h2>
        <p>{{vh_field("Feature Two Details", "textarea")}}</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>
    <div class="col-md-4">
        <h2>{{vh_field("Feature One", "text")}}</h2>

        <p>{{vh_field("Feature One Details", "textarea")}}</p>

        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>

    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>
</div>


</div>


@endsection
