<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2 style="text-align: center">Attendee Information</h2>
                </div>
                <div class="card-body">
                    <form id="attendee-form">
                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="selectEvent">Select Permission</label>
                        <select class="form-control" id="selectEvent" name="event_id">
                            @foreach ($permissions as $event)
                            <option value="{{ $event->id }}">{{ $event->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="userId">Select User Name</label>
                        <select class="form-control" id="userId" name="user_id">
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div
                    </form>
                    <div class="text-center">
                        <button type="button" id="registerAttendee" class="btn btn-dark">Register Attendee</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const registerAttendeeButton = document.getElementById('registerAttendee');

        registerAttendeeButton.addEventListener('click', async () => {
            const permission_id = document.getElementById('selectEvent').value;
            const user_id = document.getElementById('userId').value;
           

            const data = {
                permission_id: permission_id,
                user_id: user_id,
               
            };

            try {
                const response = await fetch('/user-role-store', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(data)
                });

                if (response.ok) {
                    toastr.success('Attendee created successfully');
                    document.getElementById('attendee-form').reset(); // Reset the form
                } else {
                    const responseData = await response.json(); // Parse the response JSON
                    if (responseData.message) {
                        toastr.error(responseData.message);
                    } else {
                        toastr.error('Failed to create the attendee');
                    }
                }
            } catch (error) {
                console.error(error);
                toastr.error('An error occurred while creating the attendee');
            }
        });
    });
</script>
