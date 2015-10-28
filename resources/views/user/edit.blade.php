@extends('layout')

@section('mainContent')
    @include('partials.flash')
    <h1>User</h1>
    {{ $user->name }}

@endsection
@section('footer')
    <script>
        $('.alert').delay(3000).slideUp(300);
    </script>
@endsection

@stop