@extends('layouts.app')
@section('content')


<div class="container-fluid">
    <!-- row -->
    <div class="row">
        <div class="col-sm-6 mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" value="{{ $feedback->email }}" readonly>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" value="{{ $feedback->first_name }} {{ $feedback->last_name }}" readonly>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="text" class="form-control" value="{{ $feedback->mobile_number }}" readonly>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Gender</label>
            <input type="text" class="form-control" value="{{ $feedback->gender }}" readonly>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="text" class="form-control"
                value="{{ \Carbon\Carbon::parse($feedback->date_of_birth)->format('d F Y') }}" readonly>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Marital Status</label>
            <input type="text" class="form-control" value="{{ $feedback->marital_status }}" readonly>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Country</label>
            <input type="text" class="form-control" value="{{ $feedback->country }}" readonly>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Airport</label>
            <input type="text" class="form-control" value="{{ $feedback->airport }}" readonly>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Meeting Point</label>
            <input type="text" class="form-control" value="{{ $feedback->meeting_point }}" readonly>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Vacation Date</label>
            <input type="text" class="form-control"
                value="{{ \Carbon\Carbon::parse($feedback->vacation_date)->format('d F Y') }}" readonly>
        </div>


        <div class="col-sm-6 mb-3">
            <label class="form-label">Employer</label>
            <input type="text" class="form-control" value="{{ $feedback->employer }}" readonly>
        </div>
        <div class="col-sm-6 mb-3">
            <label class="form-label">Occupation</label>
            <input type="text" class="form-control" value="{{ $feedback->occupation }}" readonly>
        </div>
        <div class="col-sm-12 mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" value="{{ $feedback->address }}" readonly>
        </div>
    </div>

</div>

@endsection
