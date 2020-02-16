<div class="modal fade" id="incomeModal" tabindex="-1" role="dialog" aria-labelledby="incomeModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Income</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ action('IncomeController@store') }}">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Salary</label>
                    <input type="text" name="salary" class="form-control" placeholder="Salary">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Salary Received</label>
                
                    <input class="date form-control" type="text" name="salary_received" placeholder="Salary Received">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
      </div>
    </div>
</div>