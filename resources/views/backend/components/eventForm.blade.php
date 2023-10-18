<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2 style="text-align: center">Add Event</h2>
            </div>
            <div class="card-body">
                <form id="event">
                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="event_name">Event Name</label>
                        <input type="text" class="form-control" name="event_name" id="event_name" placeholder="Enter event Name" aria-label="">
                    </div>

                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="category_id">Select Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="description">Event Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter event description" aria-label="" style="height: 80px;"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-dark font-weight-medium" for="start_date">Start Date</label>
                                <input type="date" class="form-control" name="start_date" id="start_date" aria-label="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-dark font-weight-medium" for="end_date">End Date</label>
                                <input type="date" class="form-control" name="end_date" id="end_date" aria-label="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="image">Choose Image</label>
                        <input type="file" class="form-control" name="image" id="image" aria-label="">
                    </div>


                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="location">Location</label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="Enter event location" aria-label="">
                    </div>

                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="registration_deadline">Registration Deadline</label>
                        <input type="date" class="form-control" name="registration_deadline" id="registration_deadline" aria-label="">
                    </div>

                    <div class="form-group">
                        <label for="is_published"><strong style="color: black">Is Published</strong></label>
                        <select name="is_published" id="is_published" class="form-control">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-dark">Create Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let eventForm = document.getElementById('event');
        eventForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            let event_name = document.getElementById('event_name').value;
            let description = document.getElementById('description').value;
            let start_date = document.getElementById('start_date').value;
            let end_date = document.getElementById('end_date').value;
            let location = document.getElementById('location').value;
            let registration_deadline = document.getElementById('registration_deadline').value;
            let is_published = document.getElementById('is_published').value;
            let category_id = document.getElementById('category_id').value;

            // Get the image input
            let imageInput = document.getElementById('image');
            let image = imageInput.files[0];

            // Check if any of the fields are empty
            if (!event_name || !description || !start_date || !end_date || !location || !registration_deadline || !is_published || !category_id || !image) {
                alert('All fields are required');
            } else {
                let formData = new FormData(eventForm);
                let URL = "/event-create"; // Update with your actual endpoint

                try {
                    formData.append('image', image); // Append the image file to the form data
                    let response = await axios.post(URL, formData);

                    if (response.status === 201) {
                        toastr.success('Event created successfully', 'Success');
                        eventForm.reset();
                    } else {
                        toastr.error('Request failed', 'Error');
                    }
                } catch (error) {
                    console.error(error);
                    toastr.error('An error occurred', 'Error');
                }
            }
        });
    });
</script>

