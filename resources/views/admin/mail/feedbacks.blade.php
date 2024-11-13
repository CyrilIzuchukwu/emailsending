@extends('layouts.app')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead class="text-white bg-primary">
                                <tr>
                                    <th class="align-middle">Name</th>
                                    <th class="align-middle">Email</th>
                                    <th class="align-middle">Phone No</th>
                                    <th class="align-middle">Gender</th>
                                    <th class="align-middle">Country</th>
                                    <th class="align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody id="orders">
                                @foreach($feedbacks as $feedback)
                                <tr class="btn-reveal-trigger">
                                    <td class="py-2">
                                        {{ $feedback->first_name }} {{ $feedback->last_name }}
                                    </td>
                                    <td class="py-2">{{ $feedback->email }}</td>
                                    <td class="py-2">{{ $feedback->mobile_number }}
                                    </td>

                                    <td class="py-2">{{ $feedback->gender }}
                                    </td>

                                    <td class="py-2">{{ $feedback->country }}
                                    </td>

                                    <td class="py-2 text-end">
                                        <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                        </g>
                                                    </svg></span></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-0" style="">
                                                <div class="py-2">
                                                    <a class="dropdown-item" href="{{ route('feedback_details', $feedback->id) }}">View
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="{{ route('delete_feedback', $feedback->id) }}">Delete

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
