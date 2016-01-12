@extends('index')

@section('background', 'register-supplier')

@section('content')

    <h2>Register as a Service Provider</h2>

    <form method="post">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-md-12"><h4>Confidential Account Information</h4></div>
    </div>

    <div class="row">

        <div class="col-md-4">

            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="name" id="name">
            </div>

        </div>
        <div class="col-md-4">

            <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="email" id="email">
            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="email">
            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-8">
            <p>These details are not shared publicly. They are only used to access your account and send you any important information.</p>
        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password" id="email">
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-8">

            <h4>Profile</h4>

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
                <label>Title</label>
                <input class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label>Summary</label>
                <textarea class="form-control" name="summary" id="summary" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" id="description" rows="8"></textarea>
            </div>

            <button class="btn btn-fill pull-right">Sign me up</button>


        </div>
        <div class="col-md-4">

            <h4>Services Offered</h4>

            @foreach($categories as $category)
                <h4>{{$category->name}}</h4>
                <ul class="register-side-category">
                    @foreach($category->services as $service)
                    <li><input type="checkbox" name="services[]" value="{{$service->id}}" > {{$service->name}}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>

    </form>

@stop