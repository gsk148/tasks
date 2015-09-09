<!-- title Form input -->
<div class="form-group">
    {!! Form::label('title', 'Название задачи:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<!-- description Form input -->
<div class="form-group">
    {!! Form::label('description', 'Описание задачи:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<!-- mover Form input -->
<div class="form-group">
    {!! Form::label('mover', 'Инициатор задачи:') !!}
    {!! Form::text('mover', null, ['class' => 'form-control']) !!}
</div>
<!-- owner Form input -->
<div class="form-group">
    {!! Form::label('owner', 'Владелец / владельцы процесса:') !!}
    {!! Form::text('owner', null, ['class' => 'form-control']) !!}
</div>
<!-- implementer Form input -->
<div class="form-group">
    {!! Form::label('implementer', 'Исполнитель / исполнители:') !!}
    {!! Form::text('implementer', null, ['class' => 'form-control']) !!}
</div>
<!-- implementer Form input -->
<div class="form-group">
    {!! Form::label('implementer', 'Исполнитель / исполнители:') !!}
    <select multiple="multiple">
        <optgroup label="Cats">
            <option value="leopard">Leopard</option>
            <option value="tiger">Tiger</option>
        </optgroup>
        <optgroup label="Dogs">
            <option value="spaniel">Spaniel</option>
        </optgroup>
    </select>
</div>

<!-- supervisor Form input -->
<div class="form-group">
    {!! Form::label('supervisor', 'Куратор проекта:') !!}
    {!! Form::text('supervisor', null, ['class' => 'form-control']) !!}
</div>