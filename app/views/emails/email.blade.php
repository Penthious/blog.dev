{{Form::open(['action'=>'HomeController@doContact', 'method' => 'post'])}}

    <div class="form-group">
        {{ Form::label('from', 'From') }}

        {{ Form::text('from', null, [ 'class'=>"form-control text-center"]) }}
        @if ($errors->has('from'))
            {{ $errors->first('from', '<span class="help-block errorsColor">:message</span>') }}
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}

        {{ Form::text('email', null, [ 'class'=>"form-control text-center"]) }}
        @if ($errors->has('email'))
            {{ $errors->first('email', '<span class="help-block errorsColor">:message</span>') }}
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('subject', 'Subject') }}

        {{ Form::text('subject', null, [ 'class'=>"form-control text-center"]) }}
        @if ($errors->has('subject'))
            {{ $errors->first('subject', '<span class="help-block errorsColor">:message</span>') }}
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('body', 'Body') }}

        {{ Form::text('body', null, [ 'class'=>"form-control text-center"]) }}
        @if ($errors->has('body'))
            {{ $errors->first('body', '<span class="help-block errorsColor">:message</span>') }}
        @endif
    </div>


    <button type="submit" name="button">Save</button>
{{ Form::close() }}
