@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-0 h-auto">
                <div class="card-body">
                    <div class="row gx-0">

                        <div class="col-lg-12 col-xl-12">
                            <div class="email-right-box ms-0 ">
                                <div class="compose-wrapper " id="compose-content">

                                    <div class="compose-content">
                                        <form action="{{ route('sendEmailProcess2') }}" method="POST">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" placeholder="Email Address" class="form-control" name="email" id="email" value="{{ old('email') }}">
                                                @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div class="mb-3">
                                                <label for="email_type" class="form-label">Select Email Type</label>
                                                <select name="email_type" id="email_type" class="form-control">
                                                    <option selected disabled>Select Email Type</option>
                                                    <option value="plain" {{ old('email_type') == 'plain' ? 'selected' : '' }}>Plain Text Email</option>
                                                    <option value="form" {{ old('email_type') == 'form' ? 'selected' : '' }}>Form Link Email</option>
                                                </select>
                                                @error('email_type')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="subject" class="form-label">Subject</label>
                                                <input type="text" value="{{ old('subject') }}" class="form-control" name="subject" id="subject" placeholder="Enter subject">
                                                @error('subject')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Message</label>
                                                <textarea id="email-compose-editor" name="message" class="textarea_editor form-control bg-transparent" rows="5" placeholder="Enter text ...">{{ old('message') }}</textarea>
                                                @error('message')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="text-start mt-4 mb-3">
                                                <button class="btn btn-primary btn-sl-sm me-2" type="submit"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Send Email</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
