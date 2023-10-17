@extends('backend\auth\master')
@section('content')
<br><br><div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <a href="{{ route('login') }}" class="btn btn-warning">Login</a>
        </div>
        <div class="col-md-9 register-right">
            <!-- Add your tab content and registration form here -->
            <h3 class="register-heading">Register</h3>
            <div class="row register-form">
                <div class="col-md-6">
                    <form id="registration-form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Your Address" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control" name="role" id="role">
                            <option value="">Select an Option</option>
                            <option value="attendee">Attendee</option>
                            <option value="organizer">OrganiZer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" />
                    </div>
                </form>
                    <input type="button" class="btnRegister" value="Register" id="registerButton" />
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let registerButton = document.getElementById('registerButton');

        registerButton.addEventListener('click', async () => {
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let phone = document.getElementById('phone').value;
            let address = document.getElementById('address').value;
            let role = document.getElementById('role').value;
            let password = document.getElementById('password').value;
            let password_confirmation = document.getElementById('password_confirmation').value;

            if (!name || !email || !phone || !address || !role || !password || !password_confirmation) {
                alert('All fields are required');
            } else {
                let data = {
                    name: name,
                    email: email,
                    phone: phone,
                    address: address,
                    role: role,
                    password: password,
                    password_confirmation: password_confirmation
                };

                try {
                    let response = await fetch('/register', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(data)
                    });

                    if (response.status === 200) {
                        // Registration successful, redirect or display a success message
                        toastr.success('Registration successful');
                        document.getElementById('registration-form').reset();
                        window.location.href = '/';
                    } else {
                        // Handle registration errors (e.g., validation errors)
                        toastr.error('Registration failed');
                    }
                } catch (error) {
                    console.error(error);
                    toastr.error('Registration failed');
                }
            }
        });
    });
</script>


@endsection

