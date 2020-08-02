@extends('layout.main')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
          <div class="page-title">
              <div class="title_left">
                <h3><strong>Ledger Opening Balance</strong></h3>
              </div>
            @include('layout.formTitleSearch')
            <!-- <div class="clearfix"></div> -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ledger Opening Balance</h2>
                    <!-- <div class="navbar-right">
                      <button class="btn btn-info" data-toggle="modal" data-target="#addclientmaster"><i class="fa fa-plus"> Add Client</i></button>
                    </div> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="row">
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">Select Group <span class="text-danger">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select id="ddl_natureofgroup" class="form-control" name="ddl_natureofgroup">
                                <option value="">One</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary col-sm-2 col-ms-2" id="search" name="search">Search by Group </button>
                    </div>
                  </div><hr/>
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