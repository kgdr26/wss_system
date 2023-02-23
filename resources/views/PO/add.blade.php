@extends('main')
@section('content')

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">

    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Purchase Order (ATK)
                </h1>
                <!--end::Title-->

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('dasbor')}}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Purchase Order (ATK) </li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">

            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">VENDOR INFORMATION</h3>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="mb-10">
                                <label for="" class="form-label">PILIH VENDOR</label>
                                <!--begin::Select2-->
                                <select class="form-select" data-control="select2" name="" id="" data-name="select_vendor">
                                    <option>-- SELECT VENDOR --</option>
                                    @foreach ($arr as $key => $val)
                                        <option value="{{$val->id_vendor}}">{{$val->cp_name}}</option>
                                    @endforeach
                                </select>
                                <!--end::Select2-->
                            </div>

                            <div class="row mt-10">
                                <label class="col-12 fs-4 fw-semibold text-muted">CP NAME</label>
                                <div class="col-12">                    
                                    <span class="fw-bold fs-6 text-gray-800" data-name="cp_name">... ... ...</span>                
                                </div>
                            </div>

                            <div class="row mt-5">
                                <label class="col-12 fs-4 fw-semibold text-muted">VENDOR NAME</label>
                                <div class="col-12">                    
                                    <span class="fw-bold fs-6 text-gray-800" data-name="name_vendor">... ... ...</span>                
                                </div>
                            </div>

                            <div class="row mt-5">
                                <label class="col-12 fs-4 fw-semibold text-muted">NPWP</label>
                                <div class="col-12">                    
                                    <span class="fw-bold fs-6 text-gray-800" data-name="npwp">... ... ...</span>                
                                </div>
                            </div>

                            <div class="row mt-5">
                                <label class="col-12 fs-4 fw-semibold text-muted">NO TLP/ HP</label>
                                <div class="col-12">                    
                                    <span class="fw-bold fs-6 text-gray-800" data-name="no_tlp">... ... ...</span>                
                                </div>
                            </div>

                            <div class="row mt-5 mb-10">
                                <label class="col-12 fs-4 fw-semibold text-muted">ALAMAT</label>
                                <div class="col-12">                    
                                    <span class="fw-bold fs-6 text-gray-800" data-name="address_vendor">... ... ...</span>                
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mb-10">
                                <button class="btn btn-secondary me-3" data-bs-toggle="modal" data-bs-target="#">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    BATAL CREATE PO
                                </button>

                                <button type="button" class="btn btn-light-primary" data-name="save_create_po">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    Create PO
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">BARANG INFORMATION</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-end mb-10">
                                <button class="btn btn-light-success me-3" data-bs-toggle="modal" data-bs-target="#add_brg_po">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                                            <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    Add BARANG
                                </button>
                            </div>

                            <div class="flex-grow-1">
                                <div class="table-responsive border-bottom mb-9">
                                    <table class="table">
                                        <thead>
                                            <tr class="border-bottom fs-6 fw-bold text-muted">
                                                <th class="min-w-70px text-center pb-2">NO</th>
                                                <th class="min-w-175px text-start pb-2">KODE</th>
                                                <th class="min-w-175px text-start pb-2">NAMA BARANG</th>
                                                <th class="min-w-70px text-start pb-2">SATUAN</th>
                                                <th class="min-w-70px text-start pb-2">QTY</th>
                                                <th class="min-w-80px text-center pb-2">ACTION</th>
                                            </tr>
                                        </thead>
                
                                        <tbody data-name="table_po">
                                            {{-- <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                <td class="pt-6 text-center">1</td>
                                                <td class="pt-6 text-start">AT-001000</td>
                                                <td class="pt-6 text-start">AMPLOP COKLAT</td>
                                                <td class="pt-6 text-start">LEMBAR</td>
                                                <td class="pt-6 text-start">1000</td>
                                                <td class="pt-6 text-center">
                                                    <button class="btn btn-light-info">
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                            </svg>
                                                        </span>
                                                    </button>
            
                                                    <button class="btn btn-light-danger">
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
<div class="modal fade" tabindex="-1" id="add_brg_po">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">ADD Barang PO</h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </span>
                </div>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <label for="" class="form-label">Nama Barang</label>
                    <div class="dropdown">
                        <input type="text" class="form-control" name="" value="" id="name_brg" />
                        <ul class="dropdown-menu">
                            <li><div class="dropdown-item" href="#"><i class="bi bi-search"></i> No results</div></li>
                        </ul>
                    </div>
                    <input type="hidden" id="id_brg_atk" data-name="id_brg">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_brg"  disabled>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Satuan</label>
                    <!--begin::Select2-->
                    <select class="form-select" name="" id="satuan_brg" disabled>
                        <option></option>
                        @foreach ($satuan as $key => $val)
                            <option value="{{$val->id_satuan}}">{{$val->name_satuan}}</option>
                        @endforeach
                    </select>
                    <!--end::Select2-->
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">STOCK</label>
                    <input type="number" class="form-control" id="stok_akhir" disabled>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">QTY</label>
                    <input type="number" class="form-control" id="qty_po" data-name="qty_po">
                </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-name="add_save_po_brg">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        datatemppo();
    });

    function datatemppo() {
        $.ajax({
            type: 'GET',
            url: "{{ route('datatemppo') }}",
            cache: false,
            success: function(data) {
                $('[data-name="table_po"]').html(data);
            }
        });
     }

</script>

<script>
    $("[data-name='select_vendor']").on('change', function(e) {
        $('.preloader').show();
        var id_vendor   = $(this).val();
        $.ajax({
            type: "POST",
            url: "{{ route('cekvendor') }}",
            data: {id_vendor:id_vendor},
            cache: false,
            success: function(response) {
                $('.preloader').hide();

                $("[data-name='cp_name']").text(response.cp_name);
                $("[data-name='name_vendor']").text(response.name_vendor);
                $("[data-name='npwp']").text(response.npwp);
                $("[data-name='no_tlp']").text(response.no_tlp);
                $("[data-name='address_vendor']").text(response.address_vendor);

            }
        });
    });
</script>

<script>
    $(document).on('keyup','#name_brg',function(){
        // $(".dropdown-menu").addClass("show");
        // alert('ok');
        var name_brg   = $('#name_brg').val();
        $.ajax({
            type: "POST",
            url: "{{ route('searchnamebrg') }}",
            data: {name_brg:name_brg},
            cache: false,
            success: function(response) {
                // console.log(response);
                if(name_brg !== ''){
                    $(".dropdown-menu").addClass("show");
                }else{
                    $(".dropdown-menu").removeClass("show");        
                }
                
                $('.dropdown-menu').html(response);
            }
        });

        if(name_brg == ''){
            $(".dropdown-menu").removeClass("show");
        }

    });

    $(document).on('keydown','#name_brg',function(){
        $(".dropdown-menu").removeClass("show");
    });

    $(document).on("click", ".klik-dat", function (e) {
        var name_brg        = $(this).attr("data-name");
        var kode_brg        = $(this).attr("data-kode");
        var satuan_brg      = $(this).attr("data-satuan");
        var id              = $(this).attr("data-id");
        var stok_akhir      = $(this).attr("data-stok");


        if(name_brg != ''){
            $('#id_brg_atk').val(id);
            $('#name_brg').val(name_brg);
            $('#kode_brg').val(kode_brg);
            $("#satuan_brg").val(satuan_brg).change();
            $('#stok_akhir').val(stok_akhir);
        }

        $(".dropdown-menu").removeClass("show");  
    });
</script>

<script>
    $(document).on("click", "[data-name='add_save_po_brg']", function (e) {
        $('.preloader').show();
        var id_brg = $('[data-name="id_brg"]').val();
        var qty_po = $('[data-name="qty_po"]').val();

        if(qty_po == ''){
            Swal.fire({
                position:'center',
                title: 'Data cannot be empty !',
                icon: 'warning',
                showConfirmButton: true,
            });
        }else{
            $.ajax({
                type: "POST",
                url: "{{ route('cektemppo') }}",
                data: {id_brg:id_brg},
                cache: false,
                success: function(response) {
                    if(response < 1){
                        
                        $.ajax({
                            type: "POST",
                            url: "{{ route('addtemppo') }}",
                            data: {id_brg:id_brg,qty_po:qty_po},
                            cache: false,
                            success: function(result) {
                                $('.preloader').hide();
                                Swal.fire({
                                    position:'center',
                                    title: 'Success!',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    $('#id_brg_atk').val('');
                                    $('#name_brg').val('');
                                    $('#kode_brg').val('');
                                    $("#satuan_brg").val('').change();
                                    $('#stok_akhir').val('');
                                    $('#qty_po').val('');
                                    $('#add_brg_po').modal('hide');
                                    datatemppo();
                                })
                            },            
                            error: function (result) {
                                Swal.fire({
                                    position:'center',
                                    title: 'Add Data Not Valid!',
                                    icon: 'warning',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then((result) => {
                                    $('#id_brg_atk').val('');
                                    $('#name_brg').val('');
                                    $('#kode_brg').val('');
                                    $("#satuan_brg").val('').change();
                                    $('#stok_akhir').val('');
                                    $('#qty_po').val('');
                                    $('#add_brg_po').modal('hide');
                                })
                            }
                        });
                        
                    }else{
                        $('.preloader').hide();
                        Swal.fire({
                            position:'center',
                            title: 'The code has been registered !',
                            icon: 'warning',
                            showConfirmButton: true,
                        });
                    }
                }
            });
        }
    });  
</script>

<script>
    $(document).on("click", "[data-name='save_create_po']", function (e) {
        $('.preloader').show();
        var id_vendor   = $('[data-name="select_vendor"]').val();

        if(id_vendor == ''){
            $('.preloader').hide();
            Swal.fire({
                position:'center',
                title: 'Data cannot be empty !',
                icon: 'warning',
                showConfirmButton: true,
            });
        }else{
            $.ajax({
                type: "POST",
                url: "{{ route('addcreatepo') }}",
                data: {id_vendor:id_vendor},
                cache: false,
                success: function(result) {
                    $('.preloader').hide();
                    Swal.fire({
                        position:'center',
                        title: 'Success!',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        window.location.href = "{{route('barangmasuk')}}";
                    })
                },            
                error: function (result) {
                    Swal.fire({
                        position:'center',
                        title: 'Add Data Not Valid!',
                        icon: 'warning',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        // location.reload();
                    })
                }
            });
        }

    });
</script>



@stop