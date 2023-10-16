
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2 style="text-align: center">Add Ticket</h2>
                </div>
                <div class="card-body">
                    <form id="ticket-form">
                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="eventName">Event Name</label>
                        <select name="event_id" id="event_id" class="form-control">
                            @foreach ($events as $event)
                            <option value="{{ $event->id }}">{{ $event->event_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-dark font-weight-medium" for="ticketName">Ticket Name</label>
                        <input type="text" class="form-control" name="ticket_name" id="ticketName" placeholder="Enter ticket name" aria-label="">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-dark font-weight-medium" for="price">Price</label>
                                <input type="text" class="form-control" name="price" id="price" placeholder="Enter ticket price" aria-label="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-dark font-weight-medium" for="quantityAvailable">Quantity Available</label>
                                <input type="text" class="form-control" name="quantity" id="quantityAvailable" placeholder="Enter quantity available" aria-label="">
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="text-center">
                        <button type="button" id="createTicket" class="btn btn-dark">Create Ticket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const createTicketButton = document.getElementById('createTicket');

        createTicketButton.addEventListener('click', async () => {
            const event_id = document.getElementById('event_id').value;
            const ticket_name = document.getElementById('ticketName').value;
            const price = document.getElementById('price').value;
            const quantity = document.getElementById('quantityAvailable').value;

            const data = {
                event_id: event_id,
                ticket_name: ticket_name,
                price: price,
                quantity: quantity,
            };

            try {
                const response = await fetch('/ticket-store', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(data)
                });

                if (response.ok) {
                    // Check if the response status is in the 2xx range (e.g., 200 OK)
                    toastr.success('Ticket created successfully');
                    document.getElementById('ticket-form').reset(); // Reset the form
                } else {
                    const responseData = await response.json(); // Parse the response JSON
                    if (responseData.message) {
                        toastr.error(responseData.message);
                    } else {
                        toastr.error('Failed to create the ticket');
                    }
                }
            } catch (error) {
                console.error(error);
                toastr.error('An error occurred while creating the ticket');
            }
        });
    });
</script>



