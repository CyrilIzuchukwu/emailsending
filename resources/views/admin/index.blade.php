@extends('layouts.app')
@section('content')
<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6">
                    <div class="swiper">
                        <div class="swiper-wrapper " aria-live="polite">
                            <div class="swiper-slide " role="group" style="width: 100%; margin-right: 30px;">
                                <div class="card coin-card bg-secondary">
                                    <div class="back-image">
                                        <svg width="121" height="221" viewBox="0 0 121 221" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="135.5" cy="84.5" r="40" stroke="#BE7CFF"></circle>
                                            <circle cx="136" cy="85" r="135.5" stroke="#BE7CFF"></circle>
                                            <circle cx="136" cy="85" r="109.5" stroke="#BE7CFF"></circle>
                                            <circle cx="136" cy="85" r="86.5" stroke="#BE7CFF"></circle>
                                            <circle cx="136" cy="85" r="64.5" stroke="#BE7CFF"></circle>
                                        </svg>
                                    </div>
                                    <div class="card-body p-4 ">
                                        <div class="title">
                                            <h4>Registered Mails</h4>
                                        </div>
                                        <div class="chart-num">
                                            <h2>{{ $mailCount }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /row -->
                </div>

                <div class="col-md-6">
                    <div class="swiper">
                        <div class="swiper-wrapper " aria-live="polite">
                            <div class="swiper-slide " role="group" style="width: 100%; margin-right: 30px;">
                                <div class="card coin-card bg-secondary">
                                    <div class="back-image">
                                        <svg width="121" height="221" viewBox="0 0 121 221" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="135.5" cy="84.5" r="40" stroke="#BE7CFF"></circle>
                                            <circle cx="136" cy="85" r="135.5" stroke="#BE7CFF"></circle>
                                            <circle cx="136" cy="85" r="109.5" stroke="#BE7CFF"></circle>
                                            <circle cx="136" cy="85" r="86.5" stroke="#BE7CFF"></circle>
                                            <circle cx="136" cy="85" r="64.5" stroke="#BE7CFF"></circle>
                                        </svg>
                                    </div>
                                    <div class="card-body p-4 ">
                                        <div class="title">
                                            <h4>Number of Feedbacks</h4>
                                        </div>
                                        <div class="chart-num">
                                            <h2>{{ $feedBackCount }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <!-- /row -->
                </div>



            </div>

            @php
            $hour = now()->format('H');
            if ($hour < 12 ) {
                $greeting='Good morning' ;
                } elseif ($hour < 16) {
                $greeting='Good afternoon' ;
                } else {
                $greeting='Good evening' ;
                }
                @endphp

                <div class="row">
                <div class="col-xl-12">
                    <div class="card bubles">
                        <div class="card-body">
                            <div class="buy-coin  bubles-down">
                                <div>
                                    <h2>{{ ucfirst($greeting) }}, {{ ucfirst(Auth::user()->name) }}!</h2>

                                    <a href="{{ route('add_mail') }}" class="btn btn-primary mt-3">Add Mail</a>
                                </div>
                                <div class="coin-img">
                                    <img src="images/coin.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Feedbacks</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive recentOrderTable">
                                <table class="table verticle-middle table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th scope="col">Email</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Marital Status</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Occupation</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lastestFeedbacks as $feedback)
                                        <tr>
                                            <td>{{ $feedback->email }}</td>
                                            <td>{{ $feedback->first_name }} {{ $feedback->last_name }}</td>
                                            <td>{{ $feedback->gender }}</td>
                                            <td>{{ $feedback->marital_status }}</td>
                                            <td>{{ $feedback->mobile_number }}</td>
                                            <td>{{ $feedback->occupation }}</td>
                                            <td class="text-end">
                                                <div class="dropdown custom-dropdown mb-0">
                                                    <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                                        <a class="dropdown-item" href="{{ route('feedback_details', $feedback->id) }}">View</a>
                                                        <a class="dropdown-item text-danger" href="{{ route('delete_feedback', $feedback->id) }}">Delete</a>
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
</div>

</div>
@endsection
