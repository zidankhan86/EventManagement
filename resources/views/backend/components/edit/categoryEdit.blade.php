@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom">
          <h2 style="text-align: center">Edit Category</h2>
        </div>
        <div class="card-body">
            <form id="category" data-category-id="{{ $edit->id }}">
          <div class="form-group">
            <label class="text-dark font-weight-medium" for="eventName">Category Name</label>
            <input type="text" class="form-control" value="{{ $edit->category_name }}" name="category_name" id="category_name" placeholder="Enter Category Name" aria-label="">
          </div>

          <div class="text-center">
            <button id="submit" type="submit" class="btn btn-dark">Save Category</button>
          </div>
            </form>
        </div>
      </div>
    </div>
  </div>


  <script>
   document.addEventListener('DOMContentLoaded', function () {
    let categoryForm = document.getElementById('category');
    categoryForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        let category_name = document.getElementById('category_name').value;
        let categoryId = categoryForm.getAttribute('data-category-id');

        if (category_name.length === 0) {
            alert('Name field is required');
        } else {
            let formData = new FormData();
            formData.append('category_name', category_name);

            let URL = "/eventCategory/"+ categoryId;

            try {
                let response = await axios.post(URL, formData);

                if (response.status === 201) {
                    toastr.success('Category updates successfully', 'Success');
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

@endsection()
