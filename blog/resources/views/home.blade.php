@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae cupiditate dolores inventore ipsam praesentium quaerat reiciendis sunt, unde vel! Fuga mollitia, non ratione sed tempora vel! Adipisci, neque, ratione?</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
