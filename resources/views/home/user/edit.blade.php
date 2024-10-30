@extends('layouts.master');
@section('title','user');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data User</h3>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{ $user->id }}/update">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id="name"
                                        value="{{ $user->name }}"
                                        placeholder=""
                                    />
                                </div>
                                <div class="card-body">
                            <form action="/user/{{ $user->id }}/update">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        value="{{ $user->email }}"
                                        placeholder=""
                                    />
                                </div>
                                <div class="card-body">
                            <form action="/user/{{ $user->id }}/update">
                                @csrf
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="password"
                                        id="password"
                                        value="{{ $user->password }}"
                                        placeholder=""
                                    />
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection