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
                        <label class="text-dark font-weight-medium" for="selectEvent">Select Event</label>
                        <select class="form-control" id="selectEvent" name="event_id">
                            @foreach ($events as $event)
                            <option value="{{ $event->id }}">{{ $event->event_name }}</option>
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
                    </div>
                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="registrationDate">Registration Date</label>
                        <input type="date" class="form-control" value="{{ $attendee->date }}" name="date" id="registrationDate" placeholder="Enter registration date" aria-label="">
                    </div>
                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="registrationStatus">Registration Status</label>
                        <select class="form-control" value="{{ $attendee->status }}" name="status" id="registrationStatus">
                            <option value="registered">Registered</option>
                            <option value="canceled">Canceled</option>
                            <option value="checked-in">Checked-In</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" id="registerAttendee" class="btn btn-dark">Save Attendee</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const registerAttendeeButton = document.getElementById('registerAttendee');

        registerAttendeeButton.addEventListener('click', async () => {
            const event_id = document.getElementById('selectEvent').value;
            const user_id = document.getElementById('userId').value;
            const date = document.getElementById('registrationDate').value;
            const status = document.getElementById('registrationStatus').value;

            const data = {
                event_id: event_id,
                user_id: user_id,
                date: date,
                status: status,
            };

            try {
                const response = await fetch('/attendee-store', {
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
