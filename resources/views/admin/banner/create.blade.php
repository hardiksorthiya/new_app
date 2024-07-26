@extends('layouts.admin.admin')
@section('title', 'Add New Banner')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="heading-with-btn">
                <h3 class="content-title">Add Banner</h3>
            </div>
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <div class="col-lg-12">
            <div class="section-ineer-main page-design">
                <form action="/admin/banner" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="right-side-create-page">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="title">Title</label></br>
                                            <input type="text" name="title" class="input-field-hp edit-field-hp">
                                            @error('title')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="small_text">Small Text</label></br>
                                            <input type="text" name="small_text" class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="description">Description</label></br>
                                            <input type="text" name="description" class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="oneimage">Image One</label></br>
                                                <div class="avatar-upload inner-page-image one-image-page-sol">
                                                    <div class="imageWrapper">
                                                        <img class="image" src="http://via.placeholder.com/700x500">
                                                        <button class="file-upload ">
                                                            <input type="file" name="imageone" class="file-input">Choose
                                                            File
                                                        </button>
                                                    </div>

                                                    <div class="size-suggation"><small>(size: 2000*20000 px)</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="imagesecond">Image Second</label></br>
                                                <div class="avatar-upload inner-page-image one-image-page-sol">
                                                    <div class="imageWrapper">
                                                        <img class="image2" src="http://via.placeholder.com/700x500">
                                                        <button class="file-upload">
                                                            <input type="file" class="file-input2" name="imagesecond"
                                                                id="imageUpload2" accept=".png, .jpg, .jpeg, .webp, .svg"
                                                                class="file-input">Choose File
                                                        </button>
                                                    </div>

                                                    <div class="size-suggation"><small>(size: 2000*20000 px)</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-hp-style">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
      
        $('.file-input2').change(function() {
            var curElement = $('.image2');
            console.log(curElement);
            var reader = new FileReader();

            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                curElement.attr('src', e.target.result);
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $('.file-input').change(function() {
            var curElement = $('.image');
            console.log(curElement);
            var reader = new FileReader();

            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                curElement.attr('src', e.target.result);
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });



        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });




        $(document).ready(function() {
            // Maximum number of groups can be added
            var maxGroup = 10;

            // Add more group of input fields
            $(".addMore").click(function() {
                if ($('body').find('.fieldGroup').length < maxGroup) {
                    var fieldHTML = '<div class="form-group fieldGroup">' + $(".fieldGroupCopy").html() +
                        '</div>';
                    $('body').find('.fieldGroup:last').after(fieldHTML);
                } else {
                    alert('Maximum ' + maxGroup + ' groups are allowed.');
                }
            });

            // Remove fields group
            $("body").on("click", ".remove", function() {
                $(this).parents(".fieldGroup").remove();
            });
        });

        $(document).ready(function() {
            $(".sd-CustomSelect").multipleSelect({
                selectAll: false,
                onOptgroupClick: function(view) {
                    $(view).parents("label").addClass("selected-optgroup");
                }
            });
        });
    </script>
@endsection
