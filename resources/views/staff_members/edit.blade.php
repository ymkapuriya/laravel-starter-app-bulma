@php
    $links = [        
        'staff members' => 'staff_members.index',
        'edit' => null
    ];
@endphp
@extends('layouts.app', ['breadcrumbs' => $links])

@section('content')
<div class="container">
    <nav class="level">
        <div class="level-left">
            <h4 class="title is-4 has-text-primary">Update Staff Member</h1>
        </div>
        <div class="level-right">
            <a class="button is-primary" href="{{ route('staff_members.index') }}">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
    </nav>
    <article>
        {{ Form::model($staff, ['route' => ['staff_members.update', $staff->id], 'method' => 'PATCH']) }}
        <div class="card">
            <div class="card-content">
                <div class="columns">
                    <div class="column is-4">
                        {{ Form::mySelect('designation_id', $staff->designation_id, $designations) }}
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-4">
                        {{ Form::myText('first_name') }}
                    </div>
                    <div class="column is-4">
                        {{ Form::myText('middle_name') }}
                    </div>
                    <div class="column is-4">
                        {{ Form::myText('last_name') }}
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-8">
                        {{ Form::myEmail('email') }}
                    </div>
                    <div class="column is-4">
                        {{ Form::myMobile('phone', $staff->phone) }}
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-4">
                        {{ Form::myDate('birthdate', $staff->birthdate) }}
                    </div>
                    <div class="column is-4">
                        {{ Form::myText('qualification') }}
                    </div>
                    <div class="column is-4">
                        {{ Form::mySelect('gender', $staff->gender, ['M' => 'Male', 'F' => 'Female']) }}
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="card-footer-item justify-content-start">
                    {{ Form::submit('Save', ['class' => 'button is-primary']) }}
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </article>
</div>
@endsection