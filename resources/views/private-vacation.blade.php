<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bighit Music Private Vacation Form</title>
    <link rel="stylesheet" href="{{ asset('xhtml/css/vacation.css') }}">
</head>

<body>
    <div class="container">
        <header>
            <h1>BTS</h1>
        </header>

        <main>
            <h2>Bighit Music Private Vacation Form</h2>
            <p>Welcome to Bighit Music’s Private Vacation Form. Please provide your details to tailor your vacation experience.</p>



            <form action="{{ route('vacation.submit') }}" method="POST">

                @csrf

                <div class="form-input">
                    <label for="email">Email <span>*</span></label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Please enter your email address.">
                    @error('email') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
                </div>

                <div class="form-input">
                    <label for="firstName">First Name <span>*</span> </label>
                    <input type="text" id="firstName" name="first_name" value="{{ old('first_name') }}" placeholder="Please enter your first name.">
                    @error('first_name') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
                </div>


                <div class="form-input">
                    <label for="lastName">Last Name <span>*</span></label>
                    <input type="text" id="lastName" name="last_name" value="{{ old('last_name') }}" placeholder="Please enter your last name.">
                    @error('last_name') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
                </div>

                <div class="form-input">
                    <label>Select Gender <span>*</span></label>
                    <div class="radio-group">
                        <input type="radio" name="gender" value="Male" id="male" {{ old('gender') == 'Male' ? 'checked' : '' }}>
                        <label for="male">Male</label>

                        <input type="radio" name="gender" value="Female" id="female" {{ old('gender') == 'Female' ? 'checked' : '' }}>
                        <label for="female">Female</label>

                        <input type="radio" name="gender" value="Other" id="other" {{ old('gender') == 'Other' ? 'checked' : '' }}>
                        <label for="other">Other</label>


                    </div>
                    @error('gender')
                    <span style="display: block" class="error-message">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-input">
                    <label for="dob">Date of Birth <span>*</span></label>
                    <input type="date" name="date_of_birth" id="dob" value="{{ old('date_of_birth') }}">
                    @error('date_of_birth') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
                </div>

                <div class="form-input">
                    <label for="maritalStatus">Marital Status <span>*</span></label>
                    <select id="maritalStatus" name="marital_status">
                        <option value="">Please select your current marital status from the options below:</option>
                        <option value="single" {{ old('marital_status') == 'single' ? 'selected' : '' }}>Single</option>
                        <option value="married" {{ old('marital_status') == 'married' ? 'selected' : '' }}>Married</option>
                        <option value="divorced" {{ old('marital_status') == 'divorced' ? 'selected' : '' }}>Divorced</option>
                        <option value="widowed" {{ old('marital_status') == 'widowed' ? 'selected' : '' }}>Widowed</option>
                        <option value="separated" {{ old('marital_status') == 'separated' ? 'selected' : '' }}>Separated</option>
                        <option value="prefer_not_to_say" {{ old('marital_status') == 'prefer_not_to_say' ? 'selected' : '' }}>Prefer not to say</option>
                    </select>
                    @error('marital_status')
                    <span style="display: block" class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-input">
                    <label for="country">Country <span>*</span></label>
                    <input type="text" id="country" name="country" placeholder="Country of residence" value="{{ old('country') }}">
                    @error('country') <span class="error-message">{{ $message }}</span> @enderror
                </div>

                <div class="form-input">
                    <label for="airport">Closest Airport <span>*</span></label>
                    <input type="text" id="airport" name="airport" placeholder="Airport (e.g. New York - JFK, London - LHR)" value="{{ old('airport') }}">
                    @error('airport') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
                </div>

                <div class="form-input">
                    <label for="meetingPoint">Preferred meeting point with the celebrity <span>*</span></label>
                    <input type="text" id="meetingPoint" name="meeting_point" placeholder="Enter desired meeting point" value="{{ old('meeting_point') }}">
                    @error('meeting_point') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
                </div>

                <div class="form-input">
                    <label for="vacationDate">Preferred vacation date (When will you want to travel) <span>*</span></label>
                    <input type="date" id="vacationDate" name="vacation_date" value="{{ old('vacation_date') }}">
                    @error('vacation_date') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
                </div>

                <div class="form-input">
                    <label for="mobileNumber">Mobile Number <span>*</span></label>
                    <input type="tel" id="mobileNumber" name="mobile_number" placeholder="Your answer" value="{{ old('mobile_number') }}">
                    @error('mobile_number') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
                </div>

                <div class="form-input">
                    <label for="address">Address <span>*</span></label>
                    <input type="text" id="address" name="address" placeholder="Your answer" value="{{ old('address') }}">
                    @error('address') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
                </div>

                <div class="form-input">
                    <label for="employer">Current Employer <span>*</span></label>
                    <input type="text" id="employer" name="employer" placeholder="Enter the name of your current employer (if self-employed, write 'Self-Employed')" value="{{ old('employer') }}">
                    @error('employer') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
                </div>

                <div class="form-input">
                    <label for="occupation">Occupation <span>*</span></label>
                    <input type="text" id="occupation" name="occupation" placeholder="Enter your occupation or job title (if self-employed, specify your role)" value="{{ old('occupation') }}">
                    @error('occupation') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
                </div>

                <p class="notice">Notice: There is a monetary obligation attached to this vacation.</p>

                <button type="submit">Submit</button>
            </form>
        </main>
    </div>

    <!-- sweet alert  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('message'))
    <script>
        swal("Successful!", "{{ session('message') }}!", "success");
    </script>
    @endif
    @if (session('error'))
    <script>
        swal("Error!", "{{ session('error') }}!", "warning");
    </script>
    @endif
    @if (Session::has('success'))
    <script>
        swal("Successful!", "{{ Session::get('success') }}!", "success");
    </script>
    @endif

    @if (Session::has('error'))
    <script>
        swal("Warning!", "{{ Session::get('error') }}!", "warning");
    </script>
    @endif
</body>

</html>
