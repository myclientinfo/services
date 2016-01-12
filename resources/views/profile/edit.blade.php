@extends('index')

@section('background', 'search')

@section('content')
    <div class="row">

        <div class="col-md-8">
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" name="title" id="title" value="{{$supplier->title}}">
            </div>

            <div class="form-group">

                <div class="row">
                    <div class="col-md-2">
                        <label>I am a</label>
                    </div>
                    <div class="col-md-10">
                        <select name="type_id" id="type_id" class="form-control">
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Summary</label>
                <textarea class="form-control" name="summary" id="summary" rows="3">{{$supplier->summary}}</textarea>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" id="description" rows="8">{{$supplier->description}}</textarea>
            </div>
        </div>


        <div class="col-md-4">

           <p class="services-top">Select all the services that you or your company provide.</p>

            @foreach($categories as $category)
                <h4>{{$category->name}}</h4>
                <ul class="register-side-category">
                    @foreach($category->services as $service)
                        <li><input type="checkbox" name="services[]" value="{{$service->id}}" {{ in_array($service->id, $supplier_services) ? ' checked="checked' : '' }} > {{$service->name}}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <h4>Rates</h4>

            <ul class="edit-rates">
            @foreach($supplier->rates as $rate)
                <li{!! $rate->period->primary ? ' class="primary"' : '' !!}>$ <input type="text" class="rate_input" value="{{$rate->price}}"{!! $rate->period->primary ? ' required="required"' : '' !!}> {{$rate->period->name}}{!! $rate->period->primary ? ' - required' : '' !!}</li>
            @endforeach
            </ul>

        </div>
        <div class="col-md-4">
            <br><br>
            <button class="btn btn-default">Update My Profile</button>
        </div>
        {!! Request::is('profile') ? '<a class="btn btn-default" a href="/profile/edit">Edit</a>' : '' !!}

    </div>
@stop