@extends('layouts.master')

@section('title','Home')

@section('content')
<tr>
    <td colspan="4"></td>
</tr>
<tr>
    <td colspan="4">
        @auth
            {{ auth()->user()->name }}
        @endauth
    </td>
</tr>
@endsection