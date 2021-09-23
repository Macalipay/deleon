{{-- MODAL --}}
<div class="modal fade" id="rushfeeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Rush Fee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
                <form id="modal-form" action="{{url('rushfee/save')}}" method="post">
                    @csrf
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Customer</label>
                    <select class="form-control" id="customer_id"  name="customer_id">
                        <option selected disabled>Select a Customer</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo date('Y-m-d'); ?>">
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