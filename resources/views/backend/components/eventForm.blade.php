<div class="row">
    <div class="col-lg-12">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom">
          <h2 style="text-align: center">Add Event </h2>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label class="text-dark font-weight-medium" for="eventDescription">Event Name</label>
                <input type="text" class="form-control" id="eventName" placeholder="Enter event Name" aria-label="">
              </div>


              <div class="form-group">
                <label class="text-dark font-weight-medium" for="eventDescription">Event Description</label>
                <input type="text" class="form-control" id="eventDescription" placeholder="Enter event description" aria-label="" style="height: 80px;">
              </div>


          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="text-dark font-weight-medium" for="startDate">Start Date</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="mdi mdi-calendar-range"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" data-mask="00/00/0000" id="startDate" placeholder="" aria-label="">
                </div>
                <p style="font-size: 90%">ex. 99/99/9999</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="text-dark font-weight-medium" for="endDate">End Date</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="mdi mdi-calendar-range"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" data-mask="00/00/0000" id="endDate" placeholder="" aria-label="">
                </div>
                <p style="font-size: 90%">ex. 99/99/9999</p>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="text-dark font-weight-medium" for="location">Location</label>
            <input type="text" class="form-control" id="location" placeholder="Enter event location" aria-label="">
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="text-dark font-weight-medium" for="registrationDeadline">Registration Deadline</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="mdi mdi-calendar-range"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" data-mask="00/00/0000" id="registrationDeadline" placeholder="" aria-label="">
                </div>
                <p style="font-size: 90%">ex. 99/99/9999</p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-check form-check-inline mt-4">
                <input class="form-check-input" type="checkbox" id="isPublished" value="1">
                <label class="form-check-label" for="isPublished">Is Published</label>
              </div>

              <div class="text-center">
                <a href="" class="btn btn-dark">Create Event</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
