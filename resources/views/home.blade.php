@extends('layouts.app', ['breadcrumbs' => []])

@section('content')
<div class="container is-fluid">
    <div class="tile is-ancestor">
        <div class="tile is-vertical is-8">
            <div class="tile">
                <div class="tile is-parent is-vertical">
                    <article class="tile is-child notification is-primary">
                        <p class="title">Dashboard</p>
                        <p class="subtitle">Report content...</p>
                    </article>
                    <article class="tile is-child notification is-warning">
                        <p class="title">Report</p>
                        <p class="subtitle">Report content...</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-info">
                        <p class="title">Chart</p>
                        <p class="subtitle">With an image</p>
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/640x480.png">
                        </figure>
                    </article>
                </div>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child notification is-danger">
                    <p class="title">Wide panel</p>
                    <p class="subtitle">Aligned with the right tile</p>
                    <div class="content">
                        <!-- Content -->
                    </div>
                </article>
            </div>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child notification is-success">
                <div class="content">
                    <p class="title">You are logged in!.</p>
                    <p class="subtitle"></p>
                    <div class="content">
                        <!-- Content -->
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection