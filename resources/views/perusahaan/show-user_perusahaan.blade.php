@extends('sb-perusahaan/app')
@section('title', 'User')
    
@section('content')
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Show - Data Perusahaan</h1>
     <fieldset class="clearfix collapsible" id="id_moodle">
		<div class="fcontainer clearfix" id="yui_3_17_2_1_1678856982002_517">
		<div id="fitem_id_firstname" class="form-group row  fitem   ">
     <div class="col-md-3 col-form-label d-flex pb-0 pr-md-0">
        <label class="d-inline word-break " for="id_NamaPerusahaan">
            Nama Perusahaan
        </label>

<div class="form-label-addon d-flex align-items-center align-self-start">
        <div class="text-danger" title="Required">
        <i class="icon fa slicon-exclamation text-danger fa-fw " title="Required" aria-label="Required"></i>
        </div>
    
</div>
</div>
<div class="col-md-9 form-inline align-items-start felement" data-fieldtype="text">
<input type="text" class="form-control " name="Nama Perusahaan" id="id_NamaPerusahan" value="PT.Sumber Sari" size="30" maxlength="100" autocomplete="Industry-name">
<div class="form-control-feedback invalid-feedback" id="id_error_Nama Perusahaan">
    
</div>
</div>

</div><div id="fitem_id_lastname" class="form-group row  fitem">
    <div class="col-md-3 col-form-label d-flex pb-0 pr-md-0">
        
                <label class="d-inline word-break " for="id_IDPerusahaan">
                    ID Perusahaan
                </label>
        
        <div class="form-label-addon d-flex align-items-center align-self-start">
                <div class="text-danger" title="Required">
                <i class="icon fa slicon-exclamation text-danger fa-fw " title="Required" aria-label="Required"></i>
                </div>
            
        </div>
    </div>
    <div class="col-md-9 form-inline align-items-start felement" data-fieldtype="text">
        <input type="text" class="form-control " name="IDPerusahaan" id="id_IDPerusahaan" value="08782761827" size="30" maxlength="100" autocomplete="Industry-name">
        <div class="form-control-feedback invalid-feedback" id="id_error_IDPerusahaan">
            
        </div>
    </div>
</div>
</div><div id="fitem_id_email" class="form-group row  fitem   ">
    <div class="col-md-3 col-form-label d-flex pb-0 pr-md-0">
        
                <label class="d-inline word-break " for="id_email">
                    Email Perusahaan
                </label>
        
        <div class="form-label-addon d-flex align-items-center align-self-start">
                <div class="text-danger" title="Required">
                <i class="icon fa slicon-exclamation text-danger fa-fw " title="Required" aria-label="Required"></i>
                </div>  
        </div>
    </div>
<div class="col-md-9 form-inline align-items-start felement" data-fieldtype="text">
        <input type="text" class="form-control " name="email" id="id_email" value="PT.S@gmail.com" size="30" maxlength="100" autocomplete="email">
        <div class="form-control-feedback invalid-feedback" id="id_error_email">
            
        </div>
    </div>
</div>
</div><div id="fitem_id_lastname" class="form-group row  fitem   ">
    <div class="col-md-3 col-form-label d-flex pb-0 pr-md-0">
        
                <label class="d-inline word-break " for="id_Alamat">
                    Alamat Perusahaan
                </label>
        
        <div class="form-label-addon d-flex align-items-center align-self-start">
                <div class="text-danger" title="Required">
                <i class="icon fa slicon-exclamation text-danger fa-fw " title="Required" aria-label="Required"></i>
                </div>
            
        </div>
    </div>
    <div class="col-md-9 form-inline align-items-start felement" data-fieldtype="text">
        <input type="text" class="form-control " name="Alamat" id="id_Alamat" value="Beverly Garden Blok A NO 41" size="30" maxlength="100" autocomplete="Address-name">
        <div class="form-control-feedback invalid-feedback" id="id_error_Alamat">
            
        </div>
    </div>
</div><div id="fitem_id_lastname" class="form-group row  fitem   ">
    <div class="col-md-3 col-form-label d-flex pb-0 pr-md-0">
        
                <label class="d-inline word-break " for="id_NO.Telp">
                    NO.Telp Perusahaan
                </label>
        
        <div class="form-label-addon d-flex align-items-center align-self-start">
                <div class="text-danger" title="Required">
                <i class="icon fa slicon-exclamation text-danger fa-fw " title="Required" aria-label="Required"></i>
                </div>
            
        </div>
    </div>
    <div class="col-md-9 form-inline align-items-start felement" data-fieldtype="text">
        <input type="text" class="form-control " name="NO.Telp" id="id_NO.Telp" value="+62 8**-****-****" size="30" maxlength="100" autocomplete="Address-name">
        <div class="form-control-feedback invalid-feedback" id="id_error_Alamat">
            
        </div>
    </div>

@endsection