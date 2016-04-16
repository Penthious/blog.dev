@extends('layouts.master')

@section('content')
    <div class="container blogHolder">
        <div class="blog-header">
            <div class="container">
                <div class="row centered-form">
                    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <center><h3 class="panel-title">Sign up</h3></center>
                            </div>
                            <div class="panel-body">
                                {{Form::open(['action'=>'UsersController@store', 'method' => 'post'])}}
                                    <div class="row">

                                        @foreach($login_info as $info)
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label($info[0], $info[1]) }}
                                                    {{ Form::text($info[0], null, [     'class'=>"form-control",'placeholder' => $info[1]]) }}
                                                    @if ($errors->has($info[0]))
                                                        {{ $errors->first($info[0], '<span class="help-block errorsColor textSize">:message</span>') }}
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <input type="submit" value="Register" class="btn btn-info btn-block">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
