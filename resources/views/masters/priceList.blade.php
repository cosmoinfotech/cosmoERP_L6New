@extends('layout.main')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
          <div class="page-title">
              <div class="title_left">
                <h3><strong>Opening Stock</strong></h3>
              </div>
            @include('layout.formTitleSearch')
            <!-- <div class="clearfix"></div> -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Opening Stock</h2>
                    <div class="navbar-right">
                      <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#addcategorymaster"><i class="fa fa-plus"> Add Opning Stock</i></button> -->
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="row">
                      <div class="col-sm-3 form-group">
                        <label>Item Name <span class="text-danger">*</span></label>   
                        <input type="text" class="form-control" id="search_itemName" name="search_itemName" placeholder="Item name">
                      </div>
                      <div class="col-sm-3 form-group">
                        <label>Category <span class="text-danger">*</span></label>   
                        <select class="form-control" name="ddl_category" id="ddl_category" >
                              <option value="">------ SELECT ------</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                      </div>
                      <div class="col-sm-3 form-group">
                        <label>Company <span class="text-danger">*</span></label>   
                        <select class="form-control" name="ddl_company" id="ddl_company" >
                              <option value="">------ SELECT ------</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                      </div>
                      <div class="col-sm-3 form-group">
                      <label>&nbsp;</label> 
                      <button class="btn btn-primary col-sm-12"><i class="fa fa-search"> Search</i></button>
                      </div>
                  </div> <hr>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Item Code </th>
                          <th>Item Name</th>
                          <th>Size</th>
                          <th>MRP</th>
                          <th>Rate</th>
                          <th>Batch No</th>
                          <th>Expiry Date</th>
                          <th>Balance</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>kkk</td>
                          <td>kkkk</td>
                          <td>1</td>
                          <td>kkk</td>
                          <td>kkkk</td>
                          <td>1</td>
                          <td>kkk</td>
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
        
        <!-- Delete Confirm popup -->
            <div class="modal fade deleteModal" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                            <div class="modal-header">Are you sure want to delete this record?</div>
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