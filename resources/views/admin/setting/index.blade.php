
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<div id="wrapper">
    @extends('layouts.admin.admin')
    @section('title', 'Settings')
    @include('layouts.admin.inc.sidebar')
    
    <section id="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-with-btn">
                    <h3 class="content-title">Settings</h3>
                </div>
            </div>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
                @endif
        </div>
        <form action="{{url('admin/settings')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
            @endif
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="{{(!empty($row->logo)) ? url('assets/images/admin/'.$row->logo): url('assets/images/avtar.jpg')}}" alt="avtar" class="avtar">
                        <input type="file" name="logo">
                    </div>
                </div>
            </div>
            <div class="buttton-hp">
                <button type="submit">Update</button>
            </div>
        </form>
    </section>
</div>



