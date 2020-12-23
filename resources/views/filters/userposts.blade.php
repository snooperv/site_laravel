@extends('layouts.site', ['title'=>'Желания пользователя ' . $name])

@section('content')
    <h1 class="mt-2 mb-3">Желания пользователя {{ $name }}</h1>
    @if (isset($posts) && count($posts))
        @include('parts.bodyposts')
        {{ $posts->links() }}
    @else
        <p>Пользователь {{ $name }} еще не добавил список желаний</p>
    @endif
@endsection
