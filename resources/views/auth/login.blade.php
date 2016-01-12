@extends('index')

@section('background', 'search')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <div class="panel panel-default" id="login-panel">

            <div class="panel-heading">

                <h3 class="panel-title">Log In</h3>

            </div>
            <div class="panel-body">

                <form class="form-horizontal" method="POST" action="/auth/login">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <label class="col-lg-2 col-md-3 col-sm-3 control-label">Email</label>

                        <div class="col-lg-10 col-md-9 col-sm-9">
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">

                        <label class="col-lg-2 col-md-3 col-sm-3 control-label">Password</label>

                        <div class="col-lg-10 col-md-9 col-sm-9">
                            <input type="password" name="password" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-info pull-right" value="Log In">
                        </div>
                    </div>
                </form>

                @include('errors')

            </div>

        </div>
    </div>
</div>

@stop