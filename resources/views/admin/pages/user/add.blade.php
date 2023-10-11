@extends('layouts.admin')
@section('content')

          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
            <div class="content">





		
                
<div class="row">
  <div class="col-lg-12">
    <div class="card card-default">
      <div class="card-header card-header-border-bottom">
        <h2>Basic Validation</h2>
      </div>

      <div class="card-body">
        <form >
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationServer01">First name</label>

              <input type="text" class="form-control" id="validationServer01" placeholder="First name" value="Md" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="col-md-12 mb-3">
              <label for="validationServer02">Last name</label>

              <input type="text" class="form-control" id="validationServer02" placeholder="Last name" value="Rahad" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="col-md-12 mb-3">
              <label for="validationServerUsername">Username</label>

              <input type="text" class="form-control" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>

              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationServer03">City</label>

              <input type="text" class="form-control" id="validationServer03" placeholder="City" required>

              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <label for="validationServer04">State</label>

              <input type="text" class="form-control" id="validationServer04" placeholder="State" required>

              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <label for="validationServer05">Zip</label>

              <input type="text" class="form-control" id="validationServer05" placeholder="Zip" required>

              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
          </div>

          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
      </div>
    </div>
  </div>

  
</div>
                  

		




      </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@endsection