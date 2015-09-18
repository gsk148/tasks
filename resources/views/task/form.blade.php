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
<input type="hidden" id="mover" name="mover" value="{!! Auth::user()->id  !!}" >
<input type="hidden" id="is_active" name="is_active" value="1" >

<!-- owner Form input -->
<div class="form-group">
    {!! Form::label('owner', 'Владелец / владельцы процесса:') !!}
    <select class="form-control"  id="owner" name="owner[]" multiple="multiple">
        {!! App\Http\Helper::getUsersListSelect() !!}
    </select>
</div>

<!-- implementer Form input -->
<div class="form-group">
    {!! Form::label('implementer', 'Исполнитель / исполнители:') !!}
    <select class="form-control" id="implementer" name="implementer[]" multiple="multiple">
         {!! App\Http\Helper::getUsersListSelect() !!}
    </select>
</div>

<!-- supervisor Form input -->
<div class="form-group">
    {!! Form::label('supervisor', 'Куратор проекта:') !!}
    <select class="form-control" id="supervisor" name="supervisor[]" multiple="multiple">
        {!! App\Http\Helper::getUsersListSelect() !!}
    </select>
</div>