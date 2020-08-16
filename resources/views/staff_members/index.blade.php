@extends('layouts.app')

@section('content')
<div class="container is-fluid">
    <nav class="level">
        <div class="level-left">
            <h1 class="title has-text-primary">Staff List</h1>
        </div>
        <div class="level-right">
            <a class="button is-primary is-outlined" href="{{ route('staff_members.create') }}">
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
                        <th>Designation</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Birthdate</th>
                        <th class="has-text-right has-text-link">
                            <i class="fas fa-tasks"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staffMembers as $record)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $record->full_name }}</td>
                        <td>{{ $record->designation->name }}</td>
                        <td>{{ $record->gender }}</td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->phone }}</td>
                        <td>{{ $record->formatted_birthdate }}</td>
                        <td>
                            <div class="field buttons are-small is-grouped is-grouped-right">
                                <div class="control">
                                    <a class="button is-link is-inverted is-borderless"
                                        href="{{ route('staff_members.show', $record->id) }}">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                </div>
                                <div class="control">
                                    <a class="button is-info is-inverted is-borderless"
                                        href="{{ route('staff_members.edit', $record->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>                                
                                <div class="control">
                                    {{ Form::open(['method' => 'delete', 'route' => ['staff_members.destroy', $record], 'class' => 'form-confirm'])}}
                                    <button type="submit" class="button is-danger is-inverted is-borderless is-small">
                                        <i class="fas fa-trash-alt"></i>
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
        {{ $staffMembers->links() }}
    </div>
</div>
@endsection