@php use App\Models\User; @endphp
@extends('admin::admin.admin')


@section('content_header')
    @parent
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{trans('Users')}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.users.edit') }}" class="btn btn-sm btn-outline-success">{{trans('New User')}}</a>
            </div>
        </div>
    </div>

@endsection

@section('content_body')
    @parent
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">{{ trans('ID') }}</th>
                <th scope="col">{{ trans('Name') }}</th>
                <th scope="col">{{ trans('Email') }}</th>
                <th scope="col">{{ trans('Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @php /** @var User $user */ @endphp
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}" class="btn btn-sm btn-outline-success" id="edit"><i class="fas fa-pencil"></i></a>
                        <a href="{{ route('admin.users.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-outline-danger" id="delete"><i class="fas fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
