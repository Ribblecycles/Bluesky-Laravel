@extends('layouts.app')

@section('page_title')
    {{ "Registered Users" }}
@endsection

@section('content')
    <div class="content">
        <form action="/users/update/{{ $selectedUser->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-2 offset-5">
                    <div class="row">
                        <h1>Edit User</h1>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-form-label">{{ __('Name') }}</label>
                        <input
                            id="name"
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') ?? $selectedUser->name}}"
                            autocomplete="name"
                            autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-form-label">{{ __('Username') }}</label>
                        <input
                            id="username"
                            type="text"
                            class="form-control @error('username') is-invalid @enderror"
                            name="username" value="{{ old('username') ?? $selectedUser->username}}"
                            autocomplete="username"
                            autofocus>
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-form-label">{{ __('Email') }}</label>
                        <input
                            id="email"
                            type="text"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') ?? $selectedUser->email}}"
                            autocomplete="email"
                            autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="department" class="col-form-label">{{ __('Department') }}</label>
                        <input
                            id="department"
                            type="text"
                            class="form-control @error('department') is-invalid @enderror"
                            name="department" value="{{ old('department') ?? $selectedUser->department}}"
                            autocomplete="department"
                            autofocus>
                        @error('department')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-form-label">{{ __('Role(s)') }}</label>
                        <select multiple="multiple" name="role[]" id="role" class="form-control">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}"
                                        @if($selectedUser->roles->contains('name', $role->name))selected="selected"@endif>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('role')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="home" class="col-form-label">{{ __('Home') }}</label>
                        <input
                            id="home"
                            type="text"
                            class="form-control @error('home') is-invalid @enderror"
                            name="home" value="{{ old('home') ?? $selectedUser->home}}"
                            autocomplete="role"
                            autofocus>
                        @error('role')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <a href="/users" class='btn btn-primary mr-3'>Cancel</a>
                        <button class="btn btn-success">Update User</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
