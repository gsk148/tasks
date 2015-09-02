@if($errors->any())
    <div class="alert alert-danger">
        <p>Были допущены следующие ошибки:</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif