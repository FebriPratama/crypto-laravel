<div class="modal-dialog">
  <div class="modal-content">
      <form id="profileedit">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">New Voucher</h4>
        </div>
        
        <div class="modal-body">  
            <div id="modal-alert" class="alert alert-dismissable">
              <h4><i class="icon fa  fa-exclamation"></i> <span id="title"></span></h4>
              Message : <span id="reason"></span>
            </div>      
                <div class="form-group">
                  <label>Code</label>
                  <input type="text" name="code" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>EXP Date</label>
                  <input type="text" name="duration" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                </div>      
        </div>
        
        <div class="modal-footer">
                <button type="button" class="btn pull-left btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Submit</button>
        </div> 
      
      </form>   
  </div>
  <script type="text/javascript">
        $('#modal-alert').slideUp();
        $("[data-mask]").inputmask();
        $('#profileedit').submit(function(){

                $('.alert').slideUp();

                $.ajax({

                      type: "POST",

                      url: '{{ URL::to('api/admin/voucher') }}',

                      data: $(this).serialize(), 

                      dataType : 'json',

                      cache : false,

                      success : function(hasil){                    
                         

                            $.each(hasil, function(i,e) {

                              if(e.status === '1'){  

                                 $('#modal-general').modal('hide');

                                $("#formcust").trigger("reset");
                                $('.alert').removeClass('alert-danger').addClass(e.alert).slideDown().find('#title').html('Operation Success');
                                $('.alert').find('#reason').html(e.message); 
                                reloadTable(oTable); 

                              }else{

                                $('#modal-alert').removeClass('alert-success').addClass('alert-danger').slideDown().find('#title').html('Operation Failed');
                                $('#modal-alert').find('#reason').html(e); 

                              }

                            });
                      
                      }
                    
                });
              
              return false;

          });

  </script>
</div>