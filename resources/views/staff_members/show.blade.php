@php
    $links = [        
        'staff members' => 'staff_members.index',
        'detail' => null
    ];
@endphp
@extends('layouts.app', ['breadcrumbs' => $links])

@section('content')
<div class="container">
    <nav class="level">
        <div class="level-left">
            <h4 class="title is-4 has-text-primary">Staff Detail</h1>
        </div>
        <div class="level-right">
            <div class="field is-grouped">                
                <p class="control">
                    <a class="button is-info" href="{{ route('staff_members.edit', $staff->id) }}">
                        <i class="fas fa-edit"></i>
                    </a>
                </p>
                <p class="control">
                    <a class="button is-primary" href="{{ route('staff_members.index') }}">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </p>
            </div>            
        </div>
    </nav>
    <article>        
        <div class="box">
            <div class="level mb-0">
                <div class="level-left">
                    <div class="level-item">
                        <p class="title has-text-info">
                            {{ $staff->full_name }}
                        </p>
                    </div>
                </div>    
                <div class="level-right">                               
                    <div class="level-item">            
                        <span class="tag is-info is-medium">#{{ $staff->id }}</span>
                    </div>
                </div>    
            </div>
            <div class="divider">detail</div>
            <div class="columns">                
                <div class="column is-4">
                    @include('components.view.info', [
                    'label' => 'Designation',
                    'content' => $staff->designation->name,
                    ])
                </div>
            </div>
            <div class="columns">
                <div class="column is-8">
                    @include('components.view.info', [
                    'label' => 'Email Address',
                    'content' => $staff->email,
                    'classes' => 'text-secondary'
                    ])
                </div>
                <div class="column is-4">
                    @include('components.view.info', [
                    'label' => 'Phone',
                    'content' => $staff->phone,
                    ])
                </div>
            </div>
            <div class="columns">
                <div class="column is-4">
                    @include('components.view.info', [
                    'label' => 'Birthdate',
                    'content' => $staff->formatted_birthdate,
                    ])
                </div>
                <div class="column is-4">
                    @include('components.view.info', [
                    'label' => 'Qualification',
                    'content' => $staff->qualification,
                    ])
                </div>
                <div class="column is-4">
                    @include('components.view.info', [
                    'label' => 'Gender',
                    'content' => $staff->full_gender,
                    ])
                </div>
            </div>
        </div>
    </article>
    <div class="columns">
        <div class="column is-8">
            <div class="card">
                <div class="card-body">

                </div>
                <div class="card-footer">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection