<div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Warning !</h4>
        </div>

        <div class="modal-body">

          <div class="alert alert-warning alert-dismissable">
            This item has been deleted, refreshing data in 2 seconds ...
          </div>

        </div>

  </div>
  <script type="text/javascript">


      setTimeout(function() {

          reloadTable(oTable);
          $('#modal-general').modal('hide');
          
      }, 2000);

  </script>
</div>