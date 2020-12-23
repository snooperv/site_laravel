@extends('layouts.site', ['title'=>'Мои желания'])

@section('content')
    <h1 class="mt-2 mb-3">Ваши желания</h1>
    @if (isset($posts) && count($posts))
        @include('parts.bodyposts')
        {{ $posts->links() }}
    @else
        <p>Вы еще не добавили список желаний</p>
    @endif
@endsection
