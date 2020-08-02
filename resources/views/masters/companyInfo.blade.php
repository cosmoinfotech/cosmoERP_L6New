@extends('layout.main')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
          <div class="page-title">
              <div class="title_left">
                <h3><strong>Company Information</strong></h3>
              </div>
            @include('layout.formTitleSearch')
            <!-- <div class="clearfix"></div> -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Company Information</h2>
                    <!-- <div class="navbar-right">
                      <button class="btn btn-primary">Update Company Informaton</button>
                    </div> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal" method="" action="#">
                      <div class="row">
                          <div class="col-sm-6 form-group">
                            <label>Company Name <span class="text-danger">*</span></label>   
                            <select id="ddl_companyName" name="ddl_companyName" class="form-control" required readonly>
                              <option value="cosmo">Cosmo Infotech Pvt ltd</option>
                              <option value="cosmo">Cosmo Infotech Pvt ltd1</option>
                            </select>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label>Company Display Name </label>   
                            <input type="text" class="form-control" id="txt_compDisplayName" name="txt_compDisplayName" placeholder="Company Display Name" value="Cosmo Infotech" readonly >
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-4 form-group">
                            <label>Email ID <span class="text-danger">*</span></label>   
                            <input type="email" class="form-control" id="txt_emailID" name="txt_emailID" placeholder="Company Email ID" value="cosmoinfotech2020@gmail.com" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>Phone Number </label>   
                            <input type="text" class="form-control" id="txt_phoneNo1" name="txt_phoneNo1" placeholder="Company Phone Number" value="07182-254682" data-inputmask="'mask' : '(99999) 999999'" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>Phone Number 2 </label>   
                            <input type="text" class="form-control" id="txt_phoneNo2" name="txt_phoneNo2" placeholder="Company Phone Number 2" value="07182-254682" data-inputmask="'mask' : '(99999) 999999'" readonly >
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-4 form-group">
                            <label>Mobile Number <span class="text-danger">*</span></label>   
                            <input type="text" class="form-control" id="txt_mblNo" name="txt_mblNo" placeholder="Mobile Number" value="9923443620" data-inputmask="'mask' : '(999) 999-9999'" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>Website </label>   
                            <input type="text" class="form-control" id="txt_website" name="txt_website" placeholder="Website" value="http://www.cosmoinfotech.com/" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>PAN Number <span class="text-danger">*</span></label>   
                            <input type="text" class="form-control" id="txt_panNo" name="txt_panNo" placeholder="PAN Number" value="COWPK1856C" readonly >
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12 form-group">
                            <label>Address <span class="text-danger">*</span></label>   
                            <textarea class="form-control" id="txt_addrss" name="txt_addrss" style="resize:none;" placeholder="Type your address..." rows="2" cols="50" readonly >Falt No 03 Laxmi Nagar Lane No 3 Pimple Gurav</textarea>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-4 form-group">
                            <label>City <span class="text-danger">*</span></label>   
                            <input type="text" class="form-control" id="txt_city" name="txt_city" placeholder="City" value="Pune" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>State <span class="text-danger">*</span></label>   
                            <input type="text" class="form-control" id="txt_state" name="txt_state" placeholder="State" value="Maharashtra" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>Postal Code <span class="text-danger">*</span></label>   
                            <input type="text" class="form-control" id="txt_pin" name="txt_pin" placeholder="Postal Code" value="444444" readonly data-inputmask="'mask' : '999999'">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-4 form-group">
                            <label>CST Tin Number </label>   
                            <input type="text" class="form-control" id="txt_cstTinNo" name="txt_cstTinNo" placeholder="CST Tin Number" value="OKN458JJ" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>VAT Tin Number </label>   
                            <input type="text" class="form-control" id="txt_vatTinNo" name="txt_vatTinNo" placeholder="VAT Tin Number" value="VAT-0299" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>LBT Number </label>   
                            <input type="text" class="form-control" id="txt_lbtNo" name="txt_lbtNo" placeholder="LBT Number" value="LBT-99SS88" readonly>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-4 form-group">
                            <label>PTRC Number </label>   
                            <input type="text" class="form-control" id="txt_ptrcNo" name="txt_ptrcNo" placeholder="PTRC Number" value="PTRC-NH788" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>TAN Number </label>   
                            <input type="text" class="form-control" id="txt_tanNo" name="txt_tanNo" placeholder="TAN Number" value="TAN-0299" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>IEC Number </label>   
                            <input type="text" class="form-control" id="txt_iecNo" name="txt_iecNo" placeholder="IEC Number" value="IEC-99SS88" readonly>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-4 form-group">
                            <label>ECC Number </label>   
                            <input type="text" class="form-control" id="txt_eccNo" name="txt_eccNo" placeholder="ECC Number" value="ECC-NH788" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>Service Tax Number </label>   
                            <input type="text" class="form-control" id="txt_serviceTaxNo" name="txt_serviceTaxNo" placeholder="Service Tax Number" value="SERTAX-0299" readonly >
                          </div>
                          <div class="col-sm-4 form-group">
                            <label>GST Number </label>   
                            <input type="text" class="form-control" id="txt_gstNO" name="txt_gstNO" placeholder="GST Number" value="GST-99SS88" readonly>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12 form-group">
                            <label>Other Information <span class="text-danger">*</span></label>   
                            <textarea class="form-control" id="txt_otherInfo" name="txt_otherInfo" placeholder="Type your other information here..." rows="2" cols="50" readonly >Other Information </textarea>
                          </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                          <button type="button" class="btn btn-success col-sm-6" id="editConpanyInfo" onclick="inputToggle(event)">Edit</button>
                          <button type="button" class="btn btn-success col-sm-6" style="display:none" id="btn_updateConpanyInfo">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        

  <script>
   
    var edit = true;

    function inputToggle(e) {
      e.preventDefault();
      $(':input').prop('readonly', edit = !edit);
      $('#ddl_companyName').removeAttr('readonly');
      $('#editConpanyInfo').hide();
      document.getElementById("btn_updateConpanyInfo").style.display="block";
    }
    
  </script>
  @endsection