@extends('layouts.main')

@section('content')
    <x-post.post-card
        :post="$post"
        type="view"
        style="margin-top: 150px !important;"
    >
    </x-post.post-card>
@stop
