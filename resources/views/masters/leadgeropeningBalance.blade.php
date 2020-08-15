@extends('layout.main')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
          <div class="page-title">
              <div class="title_left">
                <h3><strong>Supplier Master</strong></h3>
              </div>
            @include('layout.formTitleSearch')
            <!-- <div class="clearfix"></div> -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Supplier Master</h2>
                    <div class="navbar-right">
                      <button class="btn btn-info" data-toggle="modal" data-target="#addgeneralInfo"><i class="fa fa-plus"> Add General Info</i></button>
                      <button class="btn btn-info" data-toggle="modal" data-target="#addbankDetails"><i class="fa fa-plus"> Add Bank Details</i></button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Bank Name</th>
                          <th>Branch</th>
                          <th>IFSC Code</th>
                          <th>Account Number</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>State Bank of India</td>
                          <td>Lakhani</td>
                          <td>SBIN000474</td>
                          <td>07198257698</td>
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
        <div class="modal fade" id="addgeneralInfo" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2A3F54; color:#fff;text-align:center !important">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#F7F7F7 !important"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Add General Information</h4>
                    </div>
                    <div class="modal-body">
                        <form id="demo-form2" class="form-horizontal">
                          <div class="row">
                            <div class="col-sm-4 form-group">
                              <label>Name <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_name" name="txt_name" placeholder="Name" >
                            </div>
                            <div class="col-sm-4 form-group">
                              <label>Contact Person <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_contactPerson" name="txt_contactPerson" placeholder="Contact person">
                            </div>
                            <div class="col-sm-4 form-group">
                              <label>Phone(O) <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_phoneNoO" name="txt_phoneNoO" placeholder="Phone Number (O)" data-inputmask="'mask' : '(99999)999999'">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-4 form-group">
                            <label>Phone(R) <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_phoneNoR" name="txt_phoneNoR" placeholder="Phone Number (R)" data-inputmask="'mask' : '(99999)999999'">
                            </div>
                            <div class="col-sm-4 form-group">
                              <label>Mobile Number <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_mblNo" name="txt_mblNo" placeholder="mobile Number" data-inputmask="'mask' : '(99)999-99999'">
                            </div>
                            <div class="col-sm-4 form-group">
                              <label>Email ID <span class="text-danger">*</span></label>   
                              <input type="email" class="form-control" id="txt_email" name="txt_email" placeholder="Email ID">
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
                                <input type="text" class="form-control" id="txt_city" name="txt_city" placeholder="City" >
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>State <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_state" name="txt_state" placeholder="State" >
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Postal Code <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_pin" name="txt_pin" placeholder="Postal Code" data-inputmask="'mask' : '999999'">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>GST Number <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_gstNo" name="txt_gstNo" placeholder="GST Number" >
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>MVAT TIN Number <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_mvatTinNo" name="txt_mvatTinNo" placeholder="MVAT TIn Number" >
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>PAN Number <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_panNo" name="txt_panNo" placeholder="PAN Number">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6 form-group">
                                <label>CST TIN Number <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_cstTinNo" name="txt_cstTinNo" placeholder="CST TIN Number" >
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Others <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_other" name="txt_other" placeholder="Other" >
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
        <!--  add bank details model -->
        <div class="modal fade" id="addbankDetails" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2A3F54; color:#fff;text-align:center !important">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#F7F7F7 !important"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Add Bank Details</h4>
                    </div>
                    <div class="modal-body">
                    <form id="demo-form2" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Bank Name <span class="text-danger">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="txt_bankname" name="txt_bankname" required="required" class="form-control " placeholder="Bank Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Branch <span class="text-danger">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="txt_branch" name="txt_branch" required="required" class="form-control " placeholder="Branch">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">IFSC Code <span class="text-danger">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input id="txt_ifscCode" class="form-control" type="text" name="txt_ifscCode" placeholder="IFSC Code">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Number <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input id="txt_accNo" name="txt_accNo" class="date-picker form-control"  type="text" placeholder="Account Number">
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
        <!-- End bank details Model -->
        
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