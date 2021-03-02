@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <a href="user/create" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Create User</a>
                    <a href="user/display" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Show Users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
