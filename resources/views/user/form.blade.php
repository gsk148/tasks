<!-- name Form input -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- last_name Form input -->
<div class="form-group">
    {!! Form::label('last_name', 'Last name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- position Form input -->
<div class="form-group">
    {!! Form::label('position', 'Position:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>

<!-- department Form input -->
<div class="form-group">
    {!! Form::label('department', 'Department:') !!}
    {!! Form::text('department', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email','E-Mail:',['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- password Form input -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- password Form input -->
<div class="form-group">
    {!! Form::label('password_confirmation', 'Confirm password:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>