<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2 style="text-align: center">Add Organizer</h2>
            </div>
            <div class="card-body">
                <form id="organizerForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-dark font-weight-medium" for="eventName">Select Event Name</label>
                                <select class="form-control" id="eventName" name="event_id">
                                    @foreach ($events as $item)
                                    <option value="{{ $item->id }}">{{ $item->event_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-dark font-weight-medium" for="userName">Select Organiser Name</label>
                                <select class="form-control" id="userName" name="user_id">
                                    @foreach ($users as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" id="createOrganizer" class="btn btn-dark">Create Event Organizer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const createOrganizerButton = document.getElementById('createOrganizer');

        createOrganizerButton.addEventListener('click', async () => {
            const event_id = document.getElementById('eventName').value;
            const user_id = document.getElementById('userName').value;

            const data = {
                event_id: event_id,
                user_id: user_id,
            };

            try {
                const response = await fetch('/organizer-store', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(data)
                });

                if (response.ok) {
                    toastr.success('Event Organizer created successfully');
                    document.getElementById('organizerForm').reset(); // Reset the form
                } else {
                    const responseData = await response.json(); // Parse the response JSON
                    if (responseData.message) {
                        toastr.error(responseData.message);
                    } else {
                        toastr.error('Failed to create the Event Organizer');
                    }
                }
            } catch (error) {
                console.error(error);
                toastr.error('An error occurred while creating the Event Organizer');
            }
        });
    });
</script>
