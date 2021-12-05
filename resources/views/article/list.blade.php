@extends('Layouts.app')

@section('content')

<h1>Danh sach bai viet</h1>

@foreach ($articles as $article)
<div>
    <h2>{{ $article->title }}</h2>
</div>
@endforeach

<div>
    {{ $articles->links() }}
</div>

@endsection