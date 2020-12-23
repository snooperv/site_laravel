@extends('layouts.site')

@section('content')
    <h1 class="mt-2 mb-3">Список желаний всех пользователей</h1>
    @include('parts.bodyposts')
    {{ $posts->links() }}
@endsection
