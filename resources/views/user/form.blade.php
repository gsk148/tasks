<!-- name Form input -->
<div class="form-group">
    {!! Form::label('name', 'Имя:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- last_name Form input -->
<div class="form-group">
    {!! Form::label('last_name', 'Фамилия:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- position Form input -->
<div class="form-group">
    {!! Form::label('position', 'Должность:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>

<!-- department Form input -->
<div class="form-group">
   {!! Form::label('department_id', 'Название отдела:') !!}
   {!! Form::select('department_id', App\Http\Helper::getDepartments(), null, [ 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email','E-Mail:',['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- password Form input -->
<div class="form-group">
    {!! Form::label('password', 'Пароль:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- password Form input -->
<div class="form-group">
    {!! Form::label('password_confirmation', 'Подтверждение пароля:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>