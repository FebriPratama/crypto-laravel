<div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Edit Profile</h4>
        </div>
        
        <div class="modal-body">  
            <div id="modal-alert" class="alert alert-dismissable">
              <h4><i class="icon fa  fa-exclamation"></i> <span id="title"></span></h4>
              Message : <span id="reason"></span>
            </div>      
              <form id="profileedit">
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" name="name" value="{{ $user->user_fullname }}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" name="phone" value="{{ $user->user_phone_number }}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="address" value="{{ $user->user_address }}" class="form-control">
                </div>
                <div class="form-group">
                  <label>BirthDay</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="birthdate" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="" value="{{ $user->user_birthdate }}">
                  </div>
                </div>
                <div class="form-group">
                  <label>ZIP</label>
                  <input type="text" name="zip" value="{{ $user->user_zip }}" class="form-control">
                </div>
              </form>       
        </div>
        
        <div class="modal-footer">
                <button type="button" class="btn pull-left btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning" onclick="securityThis('{{ $user->user_id }}')">Update</button>
        </div> 
        
  </div>
  <script type="text/javascript">
        $('#modal-alert').slideUp();

        $("[data-mask]").inputmask();

          function securityThis(c){

                $('.alert').slideUp();

                    $.ajax({

                          type: "POST",

                          url: '{{ URL::to('api/user') }}/'+c+'/security',

                          data: $("#profileedit").serialize(), 

                          dataType : 'json',

                          cache : false,

                          success : function(hasil){                    
                             

                                $.each(hasil, function(i,e) {

                                  if(e.status === '1'){  

                                     $('#modal-general').modal('hide');

                                    $("#formcust").trigger("reset");
                                    $('.alert').removeClass('alert-danger').addClass(e.alert).slideDown().find('#title').html('Operation Success');
                                    $('.alert').find('#reason').html(e.message); 
                                    
                                  }else{

                                    $('#modal-alert').removeClass('alert-success').addClass('alert-danger').slideDown().find('#title').html('Operation Failed');
                                    $('#modal-alert').find('#reason').html(e); 
                                  }

                                });
                          
                          }
                        
                    });

          }

  </script>
</div>