@extends('layouts.admin.admin')

@section('title', 'Edit Users')
@section('header-button')
<a href="create_card_companyname.php" class="btn d-inline-flex btn-sm btn-primary mx-1">
    <span class=" pe-2">
        <i class="bi bi-plus"></i>
    </span>
    <span>Back</span>
</a>
@endsection
@section('content')
<section class="background-section">
    <div class="container">
        <form action="{{url('admin/update-user/'.$user->id)}}">
            <div class="row">
                <div class="col-lg-6">
                    <label for="fullname">Full Name</label></br>
                    <input type="text" name="name" value="{{$user->name}}" class="input-field-hp">
                </div>
                <div class="col-lg-6">
                    <label for="fullname">Email</label></br>
                    <input type="email" name="email" value="{{$user->email}}" class="input-field-hp" disabled>
                </div>
                <div class="col-lg-6">
                    <label for="fullname">Mobile No.</label></br>
                    <input type="tel" name="mobile" value="{{$user->mobile}}" class="input-field-hp">
                </div>
                <div class="col-lg-6">
                    <label for="fullname">Created At</label></br>
                    <p  class="input-field-hp">{{$user->created_at}}</p>
                </div>
                <div class="col-lg-6">
                    <label for="fullname">Roll</label></br>
                    <select name="role_as" id="" class="input-field-hp">
                        <option value="1" {{$user->role_as == '1' ? 'selected':''}}>Admin</option>
                        <option value="0" {{$user->role_as == '0' ? 'selected':''}}>User</option>
                    </select>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-hp-style">Update</button>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection
