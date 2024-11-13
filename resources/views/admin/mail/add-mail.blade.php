@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <!-- row -->
    <div class="row">

        <div class="col-xl-12 col-lg-12">
            <div class="card profile-card card-bx m-b30">
                <div class="card-header">
                    <h6 class="title">Add Mail</h6>
                </div>
                <form class="profile-form" action="{{ route('register-mail') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="{{ old('firstname') }}">
                                @error('firstname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="{{ old('lastname') }}">
                                @error('lastname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">SUBMIT</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>


@endsection
