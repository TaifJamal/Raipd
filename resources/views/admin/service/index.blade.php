@extends('admin.master')
@section('title', 'Service | ' . env('APP_NAME'))

@php
    $title = 'title_'.app()->currentLocale();
    $content = 'content_'.app()->currentLocale();
@endphp
@section('content')

    <h1>All Service</h1>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Icon</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ( $services as  $service)
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->icon }} </td>
                    <td>{{ $service->$title }} </td>
                    <td>{!! $service->$content !!} </td>
                   <td>
                        <a class="btn btn-primary" href="{{ route('admin.services.edit', $service->id) }}"><i class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop

