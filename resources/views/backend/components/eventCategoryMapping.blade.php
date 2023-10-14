<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2 style="text-align: center">Add Mapping</h2>
            </div>

            <form id="categoryMapping">

                <div class="card-body">
                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="event_id">Select Event</label>
                        <select name="event_id" id="event_id" class="form-control">
                            @foreach ($events as $event)
                                <option value="{{ $event->id }}">{{ $event->event_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="category_id">Select Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-dark">Create Mapping</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        let categoryForm = document.getElementById('categoryMapping');
        categoryForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            let event_id = document.getElementById('event_id').value;
            let category_id = document.getElementById('category_id').value;

            // Check if any of the fields are empty
            if (!event_id || !category_id) {
                alert('All fields are required');
            } else {
                let formData = new FormData(categoryForm);
                let URL = "/eventCategory/mapping/store"; // Update with your actual endpoint

                try {
                    let response = await axios.post(URL, formData);

                    if (response.status === 201) {
                        toastr.success('Category Mapping created successfully', 'Success');
                        categoryForm.reset();
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
