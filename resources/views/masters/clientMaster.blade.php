@extends('layout.main')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
          <div class="page-title">
              <div class="title_left">
                <h3><strong>Client / Customer Master</strong></h3>
              </div>
            @include('layout.formTitleSearch')
            <!-- <div class="clearfix"></div> -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Client / Customer Master</h2>
                    <div class="navbar-right">
                      <button class="btn btn-info" data-toggle="modal" data-target="#addclientmaster"><i class="fa fa-plus"> Add Client</i></button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Column One</th>
                          <th>Column Two</th>
                          <th>Column Three</th>
                          <th>Column Four</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>One</td>
                          <td>Two</td>
                          <td>Three</td>
                          <td>Four</td>
                          <td class="text-center align-middle" style="width:150px;">
                            <div class="btn-group btn-group-sm">
                                <a href="javascript:void(0)" class="btn btn-info" style="margin-right: 3px;"><i class="fa fa-eye"></i></a>
                                <a href="javascript:void(0)" class="btn btn-primary" style="margin-right: 3px;"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" data-href="folderName/deleteCodefileNsme.php?id=$id" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!--  add general information model -->
        <div class="modal fade" id="addclientmaster" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2A3F54; color:#fff;text-align:center !important">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#F7F7F7 !important"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Add Client / Customer Details</h4>
                    </div>
                    <div class="modal-body">
                        <form id="demo-form2" class="form-horizontal">
                          <div class="row">
                            <div class="col-sm-4 form-group">
                              <label>Account Name <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_Accname" name="txt_Accname" placeholder="Account Name" >
                            </div>
                            <div class="col-sm-4 form-group">
                              <label>Contact Person <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_contactPerson" name="txt_contactPerson" placeholder="Contact person">
                            </div>
                            <div class="col-sm-4 form-group">
                              <label>Referred By <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_referredBy" name="txt_referredBy" placeholder="Referred By">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-4 form-group">
                              <label>Phone(O) <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_phoneNoO" name="txt_phoneNoO" placeholder="Phone Number (O)" data-inputmask="'mask' : '(99999)999999'">
                            </div>
                            <div class="col-sm-4 form-group">
                            <label>Phone(R) <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_phoneNoR" name="txt_phoneNoR" placeholder="Phone Number (R)" data-inputmask="'mask' : '(99999)999999'">
                            </div>
                            <div class="col-sm-4 form-group">
                              <label>Mobile Number <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_mblNo" name="txt_mblNo" placeholder="Mobile Number" data-inputmask="'mask' : '(99)999-99999'">
                            </div>
                            
                            
                          </div>
                          <div class="row">
                              <div class="col-sm-12 form-group">
                                <label>Address <span class="text-danger">*</span></label>   
                                <textarea class="form-control" id="txt_addrss" name="txt_addrss" placeholder="Type your address here..." rows="2" cols="50" style="resize:none;"></textarea>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>City <span class="text-danger">*</span></label>   
                                <select class="form-control" name="ddl_city" id="ddl_city" >
                                    <option value="1">Pune</option>
                                    <option value="2">Nagpur</option>
                                    <option value="3">Mumbai</option>
                                </select>
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>State <span class="text-danger">*</span></label>   
                                <select class="form-control" name="ddl_state" id="ddl_state" >
                                    <option value="1">Maharashtra</option>
                                    <option value="2">Gujrat</option>
                                    <option value="3">Karnataka</option>
                                </select>
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Postal Code <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_pin" name="txt_pin" placeholder="Postal Code" data-inputmask="'mask' : '999999'">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>Email ID <span class="text-danger">*</span></label>   
                                <input type="email" class="form-control" id="txt_email" name="txt_email" placeholder="Email ID">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Website <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_website" name="txt_website" placeholder="Website">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>GST Number <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_gstNo" name="txt_gstNo" placeholder="GST Number" >
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>Registration Type <span class="text-danger">*</span></label>   
                                <select class="form-control" name="ddl_regType" id="ddl_regType" >
                                    <option value="1">Reg 1</option>
                                    <option value="2">Reg 2</option>
                                    <option value="3">Reg 3</option>
                                </select>
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>PAN Number <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_panNo" name="txt_panNo" placeholder="PAN Number">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>CST TIN Number <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_cstTinNo" name="txt_cstTinNo" placeholder="CST TIN Number" >
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>ECC Number <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_eccNo" name="txt_eccNo" placeholder="ECC Number">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Credit Limit <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_creditLimit" name="txt_creditLimit" placeholder="Credit Limit">
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Other Information <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_otherInfo" name="txt_otherInfo" placeholder="Other Information" >
                              </div>
                          </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End general information Model -->        
        <!-- Delete Confirm popup -->
            <div class="modal fade deleteModal" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                            <div class="modal-header">
                            Are you sure want to delete this record?
                            </div>
                    
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary btn-sm btn-ok">Delete</a>
                            </div>
                    </div>
                </div>
            </div>
    <!-- Delete Confirm popup end -->

  <script>
  $('#confirm-delete').on('show.bs.modal', function(e) {
         $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
      })
//    $('#ddl_group').editableSelect();
// modal first field focus
//    $('#addLedgermaster').on('shown.bs.modal', function () {
//         $('#txt_name').focus();
//     });
  </script>
  @endsection