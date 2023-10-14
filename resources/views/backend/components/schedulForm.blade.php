<!DOCTYPE html>
<html>
<head>
    <title>Add Schedule</title>


</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2 style="text-align: center">Add Schedule</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-dark font-weight-medium" for="eventName">Select Event Name</label>
                                <select class="form-control" id="event_id">
                                    @foreach ($events as $event)
                                    <option value="{{ $event->id }}">{{ $event->event_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-dark font-weight-medium" for="scheduleTitle">Schedule Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter schedule title" aria-label="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="scheduleDescription">Schedule Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Enter schedule description" style="height: 80px" aria-label="">
                    </div>
                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="scheduleDate">Schedule Date</label>
                        <input type="date" class="form-control" id="date" placeholder="Enter schedule date" aria-label="">
                    </div>
                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="scheduleTime">Schedule Time</label>
                        <input type="time" class="form-control" id="time" placeholder="Enter schedule time" aria-label="">
                    </div>
                    <div class="text-center">
                        <button id="createSchedule" class="btn btn-dark">Create Schedule</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let createScheduleButton = document.getElementById('createSchedule');
            createScheduleButton.addEventListener('click', async () => {
                let event_id = document.getElementById('event_id').value;
                let title = document.getElementById('title').value;
                let description = document.getElementById('description').value;
                let date = document.getElementById('date').value;
                let time = document.getElementById('time').value;

                if (!event_id || !title || !description || !date || !time) {
                    toastr.error('All fields are required');
                } else {
                    let data = {
                        event_id: event_id,
                        title: title,
                        description: description,
                        date: date,
                        time: time,
                    };

                    try {
                        let response = await axios.post('/schedule-create', data);

                        if (response.status === 201) {
                            toastr.success('Schedule created successfully');
                            document.getElementById('title').value = '';
                            document.getElementById('description').value = '';
                            document.getElementById('date').value = '';
                            document.getElementById('time').value = '';
                        } else {
                            toastr.error('Request failed');
                        }
                    } catch (error) {
                        console.error(error);
                        toastr.error('An error occurred');
                    }
                }
            });
        });
    </script>
</body>
</html>
