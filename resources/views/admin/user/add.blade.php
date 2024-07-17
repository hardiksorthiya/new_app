@extends('layouts.admin.admin')
@section('title', 'Add User')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-with-btn">
                <h3 class="content-title">@yield('title')</h3>
            </div>
        </div>
    </div>

    <section class="background-section">
        <div class="container">
            <form action="{{ url('admin/user/add') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <label for="fullname">Full Name</label></br>
                        <input type="text" name="name" class="input-field-hp">
                    </div>
                    <div class="col-lg-6">
                        <label for="fullname">Email</label></br>
                        <input type="email" name="email" class="input-field-hp">
                    </div>
                    <div class="col-lg-6">
                        <label for="fullname">Mobile No.</label></br>
                        <input type="tel" name="mobile" class="input-field-hp">
                    </div>

                    <div class="col-lg-6">
                        <label for="image profile">Password</label></br>
                        <input type="text" name="password" class="input-field-hp">
                    </div>
                    <div class="col-lg-6">
                        <label for="image profile">Profile Image</label></br>
                        <input type="file" name="image" class="input-field-hp">
                    </div>
                    <div class="col-lg-6">
                        <label for="fullname">Roll</label></br>
                        <select name="role_as" id="" class="input-field-hp">
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-hp-style">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
