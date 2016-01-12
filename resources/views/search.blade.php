@extends('index')

@section('background', 'search')

@section('content')
    @if (session('message'))
        <div class="alert alert-danger landing-alert">
            <div class="container text-center">
                <h5><i class="fa fa-exclamation-triangle"></i> {{ session('message') }}</h5>
            </div>
        </div>
    @endif

    <form method="post" class="search_form" action="{{ action('SuppliersController@search') }}">
    <?php echo csrf_field(); ?>
    <div class="wrapper">
        <div class="landing-header" style="background-image: url('img/pexels-sand-small.jpg'); min-height: 300px;">
            <div class="container">
                <div class="motto" style="padding-top: 6%">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                            <h3 class="title-uppercase">Search For</h3>
                            <div class="form-group">
                                <select name="type" id="type" class="form-control">
                                    <option value="">Any Type</option>
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}"{{isset($input['type']) && $input['type'] == $type->id ? ' selected=selected' : ''}}>{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-10">
                            <button class="btn btn-default pull-right">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

        <div class="row supplier_category">

        @foreach($categories as $category)
            <div class="col-md-4 col-sm-6">

                <h3>{{$category->name}}</h3>

                <ul class="list-unstyled">
                @foreach($category->services as $service)
                    <li><input type="checkbox" name="services[]" value="{{$service->id}}"
                        {{in_array($service->id, $input['services']) ? ' checked="checked"' : ''}}> {{$service->name}}</li>
                @endforeach
                </ul>
            </div>
        @endforeach

        </div>


</form>

@if($suppliers)
    <h3>There are {{count($suppliers)}} Suppliers</h3>

    <p>The following suppliers match your search criteria.</p>
@else
    <h3>No Suppliers Found</h3>

    <p>Try entering a less specific search.</p>
@endif

<ul id="supplier_listing">
    @foreach($suppliers as $supplier)
    <li class="col-lg-6 col-md-4 col-sm-12">
        <h4><a href="{{route('profile', ['id' => $supplier->id])}}">{{$supplier->title}}</a></h4>

        <p><b>{{$supplier->summary}}</b></p>

        <p>{{$supplier->description}}</p>

    </li>
    @endforeach
</ul>
    </div>
    </div>
@stop