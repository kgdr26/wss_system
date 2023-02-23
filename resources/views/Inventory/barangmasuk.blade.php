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
                    Inventory - Good Receipt
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
                    <li class="breadcrumb-item text-muted">Inventory </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Good Receipt</li>
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
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg width="24"
                                    height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                        height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                        fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon--> 
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Filter-->
                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24"
                                        viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                Filter
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->

                                <!--begin::Separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Separator-->

                                <!--begin::Content-->
                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-semibold">VENDOR :</label>
                                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                            <option></option>
                                            @foreach ($vendor as $key => $val)
                                                <option value="{{$val->cp_name}}">{{$val->cp_name}}</option>    
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                        <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Filter-->
                        </div>
                        <!--end::Toolbar-->

                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body py-4">

                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="table_barangmasuk">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-50px pe-2 text-center">NO</th>
                                <th class="min-w-125px">TGL CREATE PO</th>
                                <th class="min-w-125px">USER CREATE</th>
                                <th class="min-w-125px">NO PO</th>
                                <th class="min-w-125px">VENDOR</th>
                                <th class="min-w-125px">JUMLAH BARANG</th>
                                <th class="min-w-125px">STATUS</th>
                                <th class="min-w-125px text-center">Action</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-semibold">
                            <!--begin::Table row-->
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($arr as $key => $row)
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td class="text-center">{{$no++}}</td>
                                    <td>{{$row->tgl_create_po}}</td>
                                    <td>{{$row->name_user}} </td>
                                    <td>{{$row->no_po}} </td>
                                    <td>{{$row->cp_name}}</td>
                                    <td>{{$row->jml_brg}}</td>
                                    <td>
                                        @if ($row->status == "ORDER")
                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">ORDER</span>
                                        @else
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">CLOSE</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-light-info" type="button" data-name="show_brg_po" data-id-po="{{$row->id_po}}">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
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
                                    <!--end::Action--->
                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->

<div class="modal fade" tabindex="-1" id="rinci_barang_po">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" style="max-width: 70% !important">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SHOW BARANG ORDER</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <h2 data-name="no_po"></h2>
                <div class="row mb-10">
                    <div class="col-4">
                        <div class="row mt-5">
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
                    </div>

                    <div class="col-4">
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
                    </div>
                    <div class="col-4">
                        <div class="row mt-5">
                            <label class="col-12 fs-4 fw-semibold text-muted">ALAMAT</label>
                            <div class="col-12">                    
                                <span class="fw-bold fs-6 text-gray-800" data-name="address_vendor">... ... ...</span>                
                            </div>
                        </div>
                        <div class="row mt-5">
                            <label class="col-12 fs-4 fw-semibold text-muted">TANGGAL CREATE</label>
                            <div class="col-12">                    
                                <span class="fw-bold fs-6 text-gray-800" data-name="tgl_create_po">... ... ...</span>                
                            </div>
                        </div>
                    </div>
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
                                    <th class="min-w-175px text-start pb-2">HPP</th>
                                    <th class="min-w-175px text-start pb-2">STATUS</th>
                                </tr>
                            </thead>
    
                            <tbody data-name="table_po">
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on("click", "[data-name='show_brg_po']", function (e) {
        $('.preloader').show();
        var id_po        = $(this).attr("data-id-po");
        
        $.ajax({
            type: "POST",
            url: "{{ route('showdatabrgpo') }}",
            data: {id_po:id_po},
            cache: false,
            success: function(result) {
                $('.preloader').hide();
                
                $("[data-name='cp_name']").text(result.vendor['cp_name']);
                $("[data-name='name_vendor']").text(result.vendor['name_vendor']);
                $("[data-name='npwp']").text(result.vendor['npwp']);
                $("[data-name='no_tlp']").text(result.vendor['no_tlp']);
                $("[data-name='address_vendor']").text(result.vendor['address_vendor']);
                $("[data-name='tgl_create_po']").text(result.vendor['tgl_create_po']);
                $("[data-name='no_po']").text('NO PO : '+result.vendor['no_po']);
                $('[data-name="table_po"]').html(result.showbrg);

                $('#rinci_barang_po').modal('show');

                // console.log(result.showbrg);
            },            
            error: function (result) {
                $('.preloader').hide();
                Swal.fire({
                    position:'center',
                    title: 'Add Data Not Valid!',
                    icon: 'warning',
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {

                })
            }
        });
    });
</script>

<script type="text/javascript">

    function convertToRupiah(angka){
		var rupiah = '';		
		var angkarev = angka.toString().split('').reverse().join('');
		for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
		return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
	}
	
	function convertToAngka(rupiah){
		return parseInt(rupiah.replace(/,.*|[^0-9]/g, ''), 10);
	}

    $(document).on('keyup','#hpp',function(e){
        // console.log();
        var hppname     = $(this).attr("data-name");
        $('[data-name="'+hppname+'"]').val(formatRupiah(this.value, 'Rp. '));
    });


    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }


</script>

@stop