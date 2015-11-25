<div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Delete Voucher</h4>
        </div>

        <div class="modal-body">
            <h3>Are you sure want to delete {{ $voucher->voucher_code }} ?</h3>                 
        </div>
        <div class="modal-footer">
                <button type="button" class="btn pull-left btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" onclick="deleteThis('{{ $voucher->voucher_id }}')">Proceed</button>
        </div>  

  </div>
</div>