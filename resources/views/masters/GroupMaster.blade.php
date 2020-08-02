@extends('layout.main')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
          <div class="page-title">
              <div class="title_left">
                <h3><strong>Group Master</strong></h3>
              </div>
            @include('layout.formTitleSearch')
            <!-- <div class="clearfix"></div> -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Group Master</h2>
                    <div class="navbar-right">
                      <button class="btn btn-primary" data-toggle="modal" data-target="#addgroupmaster"><i class="fa fa-plus"> Add Group</i></button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Group Name</th>
                          <th>Nature of Group</th>
                          <th>Under</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>Kundan</td>
                          <td>Csah</td>
                          <td>GST-19</td>
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
        <!--  add ledger model -->
        <div class="modal fade" id="addgroupmaster" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2A3F54; color:#fff;text-align:center !important">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#F7F7F7 !important"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Add Group Master</h4>
                    </div>
                    <div class="modal-body">
                        <form id="demo-form2" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Group Name <span class="text-danger">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" id="txt_groupname" name="txt_groupname" required="required" class="form-control" placeholder="Group Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nature of Group <span class="text-danger">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select id="ddl_natureofgroup" class="form-control" name="ddl_natureofgroup">
                                    <option value="">One</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Under <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select id="ddl_under" name="ddl_under" class="form-control">
                                    <option value="">One</option>
                                </select>
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
        <!-- End ledger Model -->
        
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