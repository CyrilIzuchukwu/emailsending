@extends('layouts.app')
@section('content')

<div class="container-fluid mh-auto">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header justify-content-between border-0">
                    <h2 class="heading mb-0">Registered Emails</h2>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('add_mail') }}" class="btn btn-primary">Add New
                            <svg class="ms-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 3C7.05 3 3 7.05 3 12C3 16.95 7.05 21 12 21C16.95 21 21 16.95 21 12C21 7.05 16.95 3 12 3ZM12 19.125C8.1 19.125 4.875 15.9 4.875 12C4.875 8.1 8.1 4.875 12 4.875C15.9 4.875 19.125 8.1 19.125 12C19.125 15.9 15.9 19.125 12 19.125Z" fill="white"></path>
                                <path d="M16.3503 11.0253H12.9753V7.65029C12.9753 7.12529 12.5253 6.67529 12.0003 6.67529C11.4753 6.67529 11.0253 7.12529 11.0253 7.65029V11.0253H7.65029C7.12529 11.0253 6.67529 11.4753 6.67529 12.0003C6.67529 12.5253 7.12529 12.9753 7.65029 12.9753H11.0253V16.3503C11.0253 16.8753 11.4753 17.3253 12.0003 17.3253C12.5253 17.3253 12.9753 16.8753 12.9753 16.3503V12.9753H16.3503C16.8753 12.9753 17.3253 12.5253 17.3253 12.0003C17.3253 11.4753 16.8753 11.0253 16.3503 11.0253Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>


                </div>
                <div class="card-body" style="border-top: 1px solid #ccc;">

                    @if($registeredMails->isEmpty())
                    <p class="text-danger">No registered emails found.</p>
                    @else
                    <div class="table-responsive">
                        <table class="table table-sm mb-0 table-striped student-tbl">
                            <thead>

                                <tr>
                                    <th>
                                        <div class="media-body">
                                            <h6 class=" fs--1">Name</h6>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="media-body">
                                            <h6 class=" fs--1">Email</h6>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="media-body">
                                            <h6 class=" fs--1">Phone Number</h6>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="media-body">
                                            <h6 class=" fs--1">Date Created</h6>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="media-body">
                                            <h6 class=" fs--1">Action</h6>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="customers">

                                @foreach($registeredMails as $mail)
                                <tr class="btn-reveal-trigger">
                                    <td class="py-4">
                                        <a href="#">
                                            <div class="media d-flex align-items-center">

                                                <div class="media-body">
                                                    <h6 class="mb-0 fs--1">{{ $mail->firstname }} {{ $mail->lastname }}</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="py-2"><a href="mailto:{{ $mail->email }}">{{ $mail->email }}</a></td>
                                    <td class="py-2"> <a href="tel:{{ $mail->phone }}">{{ $mail->phone }}</a></td>
                                    <td class="py-2">{{ $mail->created_at->format('M d, Y g:ia') }}</td>
                                    <td class="py-2 text-end">
                                        <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-bs-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                        </g>
                                                    </svg></span></button>

                                            <div class="dropdown-menu dropdown-menu-end border py-0">
                                                <div class="py-2">
                                                    <a class="dropdown-item text-warning" href="{{ route('registered-mails.edit', $mail->id) }}">
                                                        <i class="fa-solid fa-pen-to-square me-2" style="color: #FDC16A;"></i>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item text-success" href="{{ route('registered-mails.sendEmail', $mail->id ) }}">
                                                        <i class="fa-solid fa-envelope me-2" style="color: #22CA80;"></i>
                                                        Send Email
                                                    </a>
                                                    <a class="dropdown-item text-danger" href="#!" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $mail->id }}').submit();">
                                                        <i class="fa-solid fa-trash me-2" style="color: #FF4F70;"></i>
                                                        Delete
                                                    </a>

                                                    <form id="delete-form-{{ $mail->id }}" action="{{ route('registered-mails.destroy', $mail->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
