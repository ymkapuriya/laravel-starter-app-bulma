@php
    $links = [        
        'designations' => 'designations.index',
        'list' => null
    ];
@endphp
@extends('layouts.app', ['breadcrumbs' => $links])

@section('content')
<div class="container is-fluid">
    <nav class="level">
        <div class="level-left">
            <h1 class="title has-text-primary">Designations</h1>
        </div>
        <div class="level-right">
            <a class="button is-primary is-outlined" href="{{ route('designations.create') }}">
                <span class="icon">
                    <i class="fas fa-plus"></i>
                </span>
                <span>Create New</span>
            </a>
        </div>
    </nav>
    <div class="box">
        <div class="table-container">
            <table class="table is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Total Staff</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th class="has-text-right has-text-link">
                            <i class="fas fa-tasks"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($designations as $record)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->type }}</td>
                        <td>{{ $record->staff_members->count() }}</td>
                        <td>{{ $record->created_at->format('d-m-Y') }}</td>
                        <td>{{ $record->updated_at->format('d-m-Y') }}</td>
                        <td>
                            <div class="field buttons are-small is-grouped is-grouped-right">
                                <div class="control">
                                    <a class="button is-info is-inverted is-borderless"
                                        href="{{ route('designations.edit', $record->id) }}">
                                        <i class="fas fa-edit is-small"></i>
                                    </a>
                                </div>
                                <div class="control">
                                    {{ Form::open(['method' => 'delete', 'route' => ['designations.destroy', $record], 'class' => 'form-confirm'])}}
                                    <button type="submit" class="button is-danger is-inverted is-borderless">
                                        <i class="fas fa-trash-alt is-small"></i>
                                    </button>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div>
        <div class="divider">Pagination</div>
        {{ $designations->links() }}
    </div>
</div>
@endsection