@extends('layouts.admin.admin')
@section('title', 'Edit User')
@section('content')
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <div class="row">
            <div class="col-lg-12">
                <div class="heading-with-btn">
                    <h3 class="content-title">@yield('title')</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="section-ineer-main">
                    <form action="{{url('admin/user/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="row">
                        <div class="col-lg-3">
                                <div class="profile-section-edit py-4">
                                    <div class="image-section-profile">
                                        <img src="{{(!empty($user->image)) ? url('assets/images/admin/'.$user->image): url('assets/images/avtar.jpg')}}" alt="Avtar">
                                        <label class="filelabel">
                                            <i class="fa fa-paperclip">
                                            </i>
                                            <span class="title">
                                                Change Profile Image
                                            </span>
                                            <input class="FileUpload1" id="FileInput" name="image" type="file"/>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row edit-form">
                                    <div class="col-lg-12">
                                        <label for="fullname">Full Name</label></br>
                                        <input type="text" name="name" value="{{$user->name}}" class="input-field-hp edit-field-hp">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="fullname">Email</label></br>
                                        <input type="email" name="email" value="{{$user->email}}" class="input-field-hp edit-field-hp" disabled>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="fullname">Mobile No.</label></br>
                                        <input type="tel" name="mobile" value="{{$user->mobile}}" class="input-field-hp edit-field-hp">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="fullname">Password</label></br>
                                        <input type="password" name="password" value="{{$user->password}}" class="input-field-hp edit-field-hp">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="fullname">Roll</label></br>
                                        <select name="role_as" id="" class="input-field-hp edit-field-hp">
                                            <option value="1" {{$user->role_as == '1' ? 'selected':''}}>Admin</option>
                                            <option value="0" {{$user->role_as == '0' ? 'selected':''}}>User</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-hp-style">Update</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</div>
@endsection

