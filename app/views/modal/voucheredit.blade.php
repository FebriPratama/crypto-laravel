<div class="modal-dialog">
  <div class="modal-content">
      
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Edit Voucher</h4>
        </div>
        
        <div class="modal-body">  
            <div id="modal-alert" class="alert alert-dismissable">
              <h4><i class="icon fa  fa-exclamation"></i> <span id="title"></span></h4>
              Message : <span id="reason"></span>
            </div>      
            <form id="profileedit">
                <div class="form-group">
                  <label>Code</label>
                  <input type="text" name="code" class="form-control" value="{{ $voucher->voucher_code }}" required>
                </div>
                <div class="form-group">
                  <label>EXP Date</label>
                  <input type="text" name="duration" class="form-control" value="{{ $voucher->voucher_exp_duration }}" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                </div>      
            </form>  
        </div>
        
        <div class="modal-footer">
                <button type="button" class="btn pull-left btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning" onclick="updateThis('{{ $voucher->voucher_id }}')">Update</button>
        </div> 
       
  </div>
  <script type="text/javascript">
        $('#modal-alert').slideUp();
        $("[data-mask]").inputmask();
        
        function updateThis(c){

                $('.alert').slideUp();

                $.ajax({

                      type: "POST",

                      url: '{{ URL::to('api/admin/voucher') }}/'+c+'/update',

                      data: $('#profileedit').serialize(), 

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

          }

  </script>
</div>