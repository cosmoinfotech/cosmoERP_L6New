@extends('layout.main')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
          <div class="page-title">
              <div class="title_left">
                <h3><strong>Item Master</strong></h3>
              </div>
            @include('layout.formTitleSearch')
            <!-- <div class="clearfix"></div> -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Item Master</h2>
                    <div class="navbar-right">
                      <button class="btn btn-primary" data-toggle="modal" data-target="#addItemMaster"><i class="fa fa-plus"> Add Item</i></button>
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
                        <select class="form-control" name="search_category" id="search_category" >
                              <option value="">------ SELECT ------</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                      </div>
                      <div class="col-sm-3 form-group">
                        <label>Comapny <span class="text-danger">*</span></label>   
                        <select class="form-control" name="search_company" id="search_company" >
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
                          <th>Item Code</th>
                          <th>Item Name</th>
                          <th>HSN/SAC</th>
                          <th>Pack Size</th>
                          <th>Units</th>
                          <th>MRP</th>
                          <th>GST %</th>
                          <th>Product Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                          <td>7</td>
                          <td>8</td>
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
        <!--  add item master model -->
        <div class="modal fade" id="addItemMaster" data-easein="flipXIn" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2A3F54; color:#fff;text-align:center !important">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#F7F7F7 !important"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Add Item Information</h4>
                    </div>
                    <div class="modal-body">
                        <form id="demo-form2" class="form-horizontal">
                          <div class="row">
                            <div class="col-sm-4 form-group">
                              <label>Item Code <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_item_code" name="txt_item_code" placeholder="item Code" >
                            </div>
                            <div class="col-sm-4 form-group">
                              <label>HSN / SAC <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_hsn_sac" name="txt_hsn_sac" placeholder="HSN / SAC">
                            </div>
                            <div class="col-sm-4 form-group">
                              <label>Item Name <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_item_name" name="txt_item_name" placeholder="Item Name">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-4 form-group">
                            <label>Company <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_company" name="txt_company" placeholder="Comaony">
                            </div>
                            <div class="col-sm-4 form-group">
                              <label>Product Category <span class="text-danger">*</span></label>   
                              <input type="text" class="form-control" id="txt_product_category" name="txt_product_category" placeholder="Product Category">
                            </div>
                            <div class="form-group col-sm-4">
                              <label class="control-label" for="last-name">Unit <span class="text-danger">*</span></label>
                                <select class="form-control" name="ddl_unit" id="ddl_unit" >
                                    <option value="">------ SELECT ------</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-sm-4">
                                <label class="control-label" for="last-name">Pack Size <span class="text-danger">*</span></label>
                                  <select class="form-control" name="ddl_packsize" id="ddl_packsize" >
                                      <option value="">------ SELECT ------</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                  </select>
                              </div>
                              <div class="col-sm-4 form-group">
                                <label> MRP <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_mrp" name="txt_mrp" placeholder="MRP" >
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Minimum <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_minimum" name="txt_minimum" placeholder="Minimum">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>Type of Supply <span class="text-danger">*</span></label>   
                                <select class="form-control" name="ddl_type_of_supply" id="ddl_type_of_supply" >
                                      <option value="">------ SELECT ------</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                  </select>
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Taxability <span class="text-danger">*</span></label>   
                                <select class="form-control" name="ddl_taxability" id="ddl_taxability" >
                                      <option value="">------ SELECT ------</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                  </select>
                              </div>
                              <div class="col-sm-4 form-group">
                                <label>Tax per <span class="text-danger">*</span></label>   
                                <select class="form-control" name="ddl_taxper" id="ddl_taxper" >
                                      <option value="">------ SELECT ------</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                  </select>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-4 form-group">
                                <label>Central GST % <span class="text-danger">*</span></label>   
                                <input type="text" class="form-control" id="txt_central_gst" name="txt_central_gst" placeholder="Central GST %" >
                              </div>
                              <div class="col-sm-6 form-group">
                                <label>Deactive <span class="text-danger">*</span></label>   
                                <div class="checkbox">
                                <label>
                                  <input type="checkbox" class="flat" name="chkbox_deactive" id="chkbox_deactive"> Deactive
                                </label>
                              </div>
                              </div>
                          </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-primary">Update</button>
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