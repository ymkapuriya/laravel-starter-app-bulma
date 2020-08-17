@php
    $links = [        
        'designations' => 'designations.index',
        'edit' => null
    ];
@endphp
@extends('layouts.app', ['breadcrumbs' => $links])

@section('content')
<div class="container">
    <nav class="level">
        <div class="level-left">
            <h4 class="title is-4 has-text-primary">Update Designation</h1>
        </div>
        <div class="level-right">
            <a class="button is-primary" href="{{ route('designations.index') }}">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
    </nav>
    <article>
        {{ Form::model($designation, ['route' => ['designations.update', $designation->id], 'method' => 'PATCH']) }}
        <div class="card">
            <div class="card-content">
                <div class="columns">
                    <div class="column is-6">
                        {{ Form::myText('name') }}
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-6">
                        @php
                            $options = Config::get('constants.DESIGNATION_TYPE');
                        @endphp
                        {{ Form::mySelect('type', $designation->type, $options) }}
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