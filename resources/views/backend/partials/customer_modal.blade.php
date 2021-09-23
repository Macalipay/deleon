{{-- MODAL --}}
<div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
                <form id="modal-form" action="{{url('customer/save')}}" method="post">
                    @csrf
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Customer Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Customer Name">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Contact</label>
                    <input type="number" class="form-control" id="contact" name="contact" placeholder="Contact">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPassword4">FB Link</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="FB Link">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary submit-button">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>