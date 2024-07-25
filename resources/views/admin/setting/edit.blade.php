@extends('layouts.admin.admin')
@section('title', 'Edit Settings')
@section('content')
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="https://bsite.net/savrajdutta/cdn/multi-select.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-with-btn">
                <h3 class="content-title">Edit Settings</h3>
            </div>
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <div class="col-lg-12">
            <div class="section-ineer-main page-design">
                <form action="edit-setting" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                       <div class="col-12">
                        <div class="row edit-form">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="oneimage">Logo</label></br>
                                    <div class="avatar-upload inner-page-image">
                                        <div class="avatar-edit">
                                            <input type='file' name="imageone" id="imageUploadone"/>
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="#imagePreviewone"
                                                style="background-image: url({{ asset('assets/images/frontend/otherpages/breadcumb-bg.jpg') }});">
                                            </div>
                                        </div>
                                        <div class="size-suggation"><small>(size: 2000*20000 px)</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="oneimage">Fevicon</label></br>
                                    <div class="avatar-upload inner-page-image">
                                        <div class="avatar-edit">
                                            <input type='file' name="imageone" id="imageUploadone"/>
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="#imagePreviewone"
                                                style="background-image: url({{ asset('assets/images/frontend/otherpages/breadcumb-bg.jpg') }});">
                                            </div>
                                        </div>
                                        <div class="size-suggation"><small>(size: 2000*20000 px)</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="phonenumber">Phone Number</label></br>
                                    <input type="tel" name="phone" placeholder="{{$setting->facebook}}" value="{{$setting->facebook}}"  class="input-field-hp edit-field-hp">
                                </div>

                                <div class="form-group">
                                    <label for="phonenumber">Email</label></br>
                                    <input type="email" name="email" placeholder="" value=""  class="input-field-hp edit-field-hp">
                                </div>

                                <div class="form-group">
                                    <label for="phonenumber">Address</label></br>
                                    <textarea name="address" rows="3"  class="input-field-hp edit-field-hp"></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr>
                                <h4>Social Media</h4>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label></br>
                                    <input type="text" name="facebook" value=""  class="input-field-hp edit-field-hp">
                                </div>
                                <div class="form-group">
                                    <label for="Instagram">Instagram</label></br>
                                    <input type="text" name="instagram" value=""  class="input-field-hp edit-field-hp">
                                </div>
                                <div class="form-group">
                                    <label for="Twitter">Twitter</label></br>
                                    <input type="text" name="twitter" value=""  class="input-field-hp edit-field-hp">
                                </div>
                                <div class="form-group">
                                    <label for="youtube">Youtube</label></br>
                                    <input type="text" name="youtube" value=""  class="input-field-hp edit-field-hp">
                                </div>

                                
                            </div>
                        </div>
                       </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-hp-style">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script>

$('.file-input').change(function(){
    var curElement = $('.image');
    console.log(curElement);
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        curElement.attr('src', e.target.result);
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});

</script>
@endsection
