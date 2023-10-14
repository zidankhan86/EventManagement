<!DOCTYPE html>
<html>
<head>
    <title>Event Promotion</title>
    <!-- Include Axios library -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2 style="text-align: center">Event Promotion</h2>
                </div>
                <div class="card-body">
                    <form id="eventPromotionForm">
                        <div class="form-group">
                            <label class="text-dark font-weight-medium" for="eventName">Select Event Name</label>
                            <select class="form-control" id="eventName">
                                @foreach ($events as $event)
                                <option value="{{ $event->id }}">{{ $event->event_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-dark font-weight-medium" for="promotionType">Promotion Type</label>
                            <select class="form-control" id="promotionType">
                                <option value="social_media">Social Media</option>
                                <option value="email">Email</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-dark font-weight-medium" for="promotionMessage">Promotion Message</label>
                            <textarea class="form-control" id="promotionMessage" rows="4" placeholder="Enter promotion message"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-dark font-weight-medium" for="promotionDate">Promotion Date</label>
                            <input type="date" class="form-control" id="promotionDate" aria-label="">
                        </div>
                        <div class="text-center">
                            <button id="promoteEvent" class="btn btn-dark">Promote Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let eventPromotionForm = document.getElementById('eventPromotionForm');
            eventPromotionForm.addEventListener('submit', async (event) => {
                event.preventDefault();

                let eventName = document.getElementById('eventName').value;
                let promotionType = document.getElementById('promotionType').value;
                let promotionMessage = document.getElementById('promotionMessage').value;
                let promotionDate = document.getElementById('promotionDate').value;

                if (!eventName || !promotionType || !promotionMessage || !promotionDate) {
                    alert('All fields are required');
                } else {
                    let data = {
                        event_id: eventName,
                        type: promotionType,
                        message: promotionMessage,
                        date: promotionDate
                    };

                    try {
                        let response = await axios.post('/event-promotion-store', data);

                        if (response.status === 201) {
                            toastr.success('Event Promotion created successfully', 'Success');
                            eventPromotionForm.reset();
                        } else {
                            toastr.error('Failed', 'Success');
                        }
                    } catch (error) {
                        console.error(error);
                        toastr.error('Failed', 'Success');
                    }
                }
            });
        });
    </script>

</body>
</html>
