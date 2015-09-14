@extends('index')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <div style="width:250px; height: 334px;">
            @foreach($supplier->photos as $index => $photo)
                <img src="{{$photo->photo}}" class="full_image{{$index?'':' full_visible'}}" id="full_{{$index}}">
            @endforeach
            </div>

            <div id="profile_thumbs">
            @foreach($supplier->photos as $index => $photo)<img src="{{$photo->photo}}" id="thumb_{{$index}}">@endforeach
            </div>
        </div>
        <div class="col-md-9">
            <h2>{{$supplier->title}}</h2>

            <p style="font-weight: bold;">{{$supplier->summary}}</p>

            <p>{{$supplier->description}}</p>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h4>Services Available</h4>
                    <ul>
                        @foreach($supplier->services as $service)
                            <li>{{$service->name}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h4>Rates</h4>
                    <ul>
                        @foreach($supplier->rates as $rate)
                            <li>${{$rate->price}} {{$rate->time}}</li>
                        @endforeach
                    </ul>

                </div>
            </div>


        </div>
    </div>

@stop