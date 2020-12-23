@extends('layouts.site', ['title'=>'Поиск'])

@section('content')
    <h1 class="mt-2 mb-3">Результаты поиска</h1>
    @if (isset($posts) && count($posts))
        @include('parts.bodyposts')
        {{ $posts->links() }}
    @else
        <p>По вашему запросу ничего не найдено</p>
    @endif
@endsection
