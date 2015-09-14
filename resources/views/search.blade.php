@extends('index')

@section('content')
    <h2>Search for Suppliers</h2>
<form method="post">
    <div class="row supplier_category">
    <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="type">Search for</label>
                    <input name="keywords" id="keywords" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="type">Type</label>
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
    @foreach($categories as $category)
        <div class="col-md-4 col-sm-6"><h3>{{$category->name}}</h3>

        <ul class="list-group">
        @foreach($category->services as $service)
            <li class="list-group-item"><input type="checkbox" name="services[]" value="{{$service->id}}"
                {{in_array($service->id, $input['services']) ? ' checked="checked"' : ''}}> {{$service->name}}</li>
        @endforeach
        </ul>
        </div>
    @endforeach
    </div>
    </div>
    <input type="submit" class="btn btn-info pull-right" value="Search">
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
@stop