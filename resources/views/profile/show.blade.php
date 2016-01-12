@extends('index')

@section('background', 'search')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div style="width:250px; height: 334px;">

            <?php $i = 0 ?>
            @foreach($supplier->photos as $photo)
                <img src="{{$photo->photo}}" class="full_image{{ $i ? '' : ' full_visible' }}" id="full_{{$i}}">
                <?php $i++ ?>
            @endforeach

        </div>

        <div id="profile_thumbs">
            <?php $i = 0 ?>
            @foreach($supplier->photos as $photo)
                <img src="{{$photo->photo}}" id="thumb_{{$i}}">
                <?php $i++ ?>
            @endforeach
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
                    <li>${{$rate->price}} {{$rate->period->name}}</li>
                @endforeach
                </ul>

            </div>
        </div>
        {!! Request::is('profile') ? '<a class="btn btn-default" a href="/profile/edit">Edit</a>' : '' !!}

    </div>
</div>
@stop