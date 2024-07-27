@extends('layouts.admin.admin')
@section('title', 'Edit Faq')
@section('content')
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-with-btn">
                <h3 class="content-title">Edit Faq</h3>
            </div>
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif

        <div class="col-lg-12">
            <div class="section-ineer-main page-design">
                <form action="{{url('admin/edit-faq/'. $solution_id )}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="right-side-create-page">
                                    <div class="col-lg-12"><h3>{{$solution_page_name}}</h3></div>
                                    @if(count($page)>0)
                                    @foreach($page as $data)
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="description">Question</label></br>
                                            <textarea name="question[]" class="input-field-hp edit-field-hp" rows="3">{{$data['question']}}</textarea>

                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="{{url('admin/faq/delete/'. $data['id'])}}">Delete</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="description">Answer</label></br>
                                            <textarea name="answer[]" class="input-field-hp edit-field-hp" rows="3">{{$data['answer']}}</textarea>

                                            
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class='mt-4'>No FAQ!!!!</div>
                                    @endif
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

    
<!-- <script>
  
 
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



</script> -->
@endsection
