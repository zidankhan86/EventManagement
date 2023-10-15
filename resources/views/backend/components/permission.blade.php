<!DOCTYPE html>
<html>
<head>
    <title>Create Permission</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2 style="text-align: center">Add Permission</h2>
                </div>
                <div class="card-body">
                    <form id="permission-form">

                        <div class="form-group">
                            <label class="text-dark font-weight-medium" for="name">Permission Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Permission Name" aria-label="">
                        </div>

                        <div class="text-center">
                            <button type="submit" id="submit" class="btn btn-dark">Create Permission</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('submit').addEventListener('click', async () => {
                let name = document.getElementById('name').value;
                let formData = new FormData();

                formData.append('name', name);

                try {
                    let response = await axios.post('/permission-create', formData);

                    if (response.status === 201) {
                        toastr.success('Permission created successfully');
                        document.getElementById('permission-form').reset();
                    } else {
                        toastr.error('Request failed');
                    }
                } catch (error) {
                    console.error(error);
                    toastr.error('An error occurred');
                }
            });
        });
    </script>
</body>
</html>
