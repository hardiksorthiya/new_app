@extends('layouts.admin.admin')
@section('title', 'Settings')
@section('content')
    <div class="row">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif

        <div class="col-lg-12">
            <div class="heading-with-btn">
                <h3 class="content-title">@yield('title')</h3><a href="edit-setting" class="hp-border-btn">Edit Page</a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="section-ineer-main">

                <div class="row">
                    <div class="col-lg-3">
                        <div class="profile-section-edit py-4">
                            <div class="image-section-profile">
                                <img src="{{ !empty($setting->logo) ? url('assets/images/admin/' . $setting->logo) : url('assets/images/avtar.jpg') }}"
                                    alt="Avtar">
                                <label class="filelabel">
                                    <i class="fa fa-paperclip">
                                    </i>
                                    <span class="title">
                                        Change Logo
                                    </span>
                                    <input class="FileUpload1" id="FileInput" name="image" type="file" />
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="profile-section-edit py-4">
                            <div class="image-section-profile">
                                <img src="{{ !empty($setting->logo) ? url('assets/images/admin/' . $setting->logo) : url('assets/images/avtar.jpg') }}"
                                    alt="Avtar">
                                <label class="filelabel">
                                    <i class="fa fa-paperclip">
                                    </i>
                                    <span class="title">
                                        Change Fevicon
                                    </span>
                                    <input class="FileUpload1" id="FileInput" name="image" type="file" />
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row edit-form">
                            <div class="col-lg-12">
                                <label for="fullname">Phone Number</label></br>
                            </div>
                            <div class="col-lg-12">
                                <label for="fullname">Email</label></br>
                            </div>
                            <div class="col-lg-12">
                                <label for="fullname">Address</label></br>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                        <div class="row edit-form">
                            <div class="col-lg-12">
                                <h4>Social Media</h4>
                            </div>
                            <div class="col-lg-12">
                                <label for="fullname">Favebook</label></br>
                            </div>
                            <div class="col-lg-12">
                                <label for="fullname">Instagram</label></br>
                            </div>
                            
                        </div>
                    </div>


                    </form>
                </div>
            </div>
        </div>

        </form>

    </div>
@endsection
