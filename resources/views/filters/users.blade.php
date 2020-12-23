@extends('layouts.site', ['title'=>'Пользователи'])

@section('content')
    <h1 class="mt-2 mb-3">Список пользователей сайта</h1>
    @if (isset($users) && count($users))
        <div class="row">
            @foreach ($users as $user)
                <div class="col-4 mb-2" style="background-color: #fff">
                    <a href="{{ route('posts', [$user->id, $user->name]) }}" class="ausers">
                        <h3>{{$user->id}}. {{ $user->name }}</h3></a>
                </div>
            @endforeach
        </div>
        {{ $users->links() }}
    @else
        <p>На сайте еще нет ни одного пользователя</p>
    @endif
@endsection
