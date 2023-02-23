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
                    Inventory - Stock Opname
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
                    <li class="breadcrumb-item text-muted">Stock Opname</li>
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
                                        <label class="form-label fs-6 fw-semibold">Satuan :</label>
                                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                            <option></option>
                                            @foreach ($satuan as $key => $val)
                                                <option value="{{$val->name_satuan}}">{{$val->name_satuan}}</option>    
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

                        <button class="btn btn-light-success" data-bs-toggle="modal" data-bs-target="#add_op_name">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill-add" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0ZM8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1Z"/>
                                    <path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12.31 12.31 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7Zm6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.552 4.552 0 0 1 .23-2.002Zm-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.507 4.507 0 0 1-1.3-1.905Z"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            Add
                        </button>

                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body py-4">

                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="table_stockopname">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-50px pe-2 text-center">NO</th>
                                <th class="min-w-125px">TANGGAL</th>
                                <th class="min-w-125px">KODE BARANG</th>
                                <th class="min-w-125px">NAMA BARANG</th>
                                <th class="min-w-125px">SATUAN</th>
                                <th class="min-w-125px">QTY</th>
                                <th class="min-w-125px">HPP</th>
                                <th class="min-w-125px">JUMLAH HPP</th>
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
                                    <td class="fw-bold">{{$row->date_create}}</td>
                                    <td>{{$row->kode}} </td>
                                    <td>{{$row->name_brg}} </td>
                                    <td>{{$row->name_satuan}}</td>
                                    <td>{{$row->qty_stock_opname}}</td>
                                    <td>@currency($row->hpp_stock_opname)</td>
                                    <td>@currency($row->hpp_stock_opname * $row->qty_stock_opname)</td>
                                    <td class="text-center">
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

<div class="modal fade" tabindex="-1" id="add_op_name">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">ADD STOCK OPNAME</h3>
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
                    <label for="" class="form-label">Tanggal</label>
                    <input type="text" class="form-control" id="" value="{{date('Y-m-d H:m:s')}}" disabled>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nama Barang</label>
                    <!--begin::Input-->
                    <div class="dropdown">
                        <input type="text" class="form-control" name="" value="" id="name_brg" />
                        <ul class="dropdown-menu">
                            <li><div class="dropdown-item" href="#"><i class="bi bi-search"></i> No results</div></li>
                        </ul>
                    </div>
                    <!--end::Input-->
                    <input type="hidden" id="id_brg_atk" data-name="id_brg_atk">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_brg"  disabled>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Satuan</label>
                    <!--begin::Select2-->
                    <select class="form-select" data-control="select2" name="" id="satuan_brg">
                        <option></option>
                        @foreach ($satuan as $key => $val)
                            <option value="{{$val->id_satuan}}">{{$val->name_satuan}}</option>
                        @endforeach
                    </select>
                    <!--end::Select2-->
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">QTY</label>
                    <input type="number" class="form-control" id="qty" value="" data-name="qty_stock_opname">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">HPP</label>
                    <input type="text" class="form-control" id="hpp" value="">
                    <input type="hidden" id="hpp_stock_opname" data-name="hpp_stock_opname">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Jumlah HPP</label>
                    <input type="text" class="form-control" id="jml_hpp" value="" disabled>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-name="save_opname">Save</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on("click", "[data-name='save_opname']", function (e) {
        var id_brg_atk = $('[data-name="id_brg_atk"]').val()
        var qty_stock_opname = $('[data-name="qty_stock_opname"]').val()
        var hpp_stock_opname = $('[data-name="hpp_stock_opname"]').val()

        $.ajax({
            type: "POST",
            url: "{{ route('addopname') }}",
            data: {id_brg_atk:id_brg_atk,qty_stock_opname:qty_stock_opname,hpp_stock_opname:hpp_stock_opname},
            cache: false,
            success: function(result) {
                Swal.fire({
                    position:'center',
                    title: 'Success!',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {
                    location.reload();
                })
            },            
            error: function (result) {

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
        var name_brg = $(this).attr("data-name");
        var kode_brg = $(this).attr("data-kode");
        var satuan_brg = $(this).attr("data-satuan");
        var id = $(this).attr("data-id");


        if(name_brg != ''){
            $('#id_brg_atk').val(id);
            $('#name_brg').val(name_brg);
            $('#kode_brg').val(kode_brg);
            $("#satuan_brg").val(satuan_brg).change();

            $('#satuan_brg').attr('disabled','disabled');
            $('#stok_brg').attr('disabled','disabled');
        }

        $(".dropdown-menu").removeClass("show");  
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

    $(document).on('keyup','#hpp',function(){
        var hpp = $('#hpp').val();
        var qty = $('#qty').val();
        $('#hpp_stock_opname').val(parseInt(hpp.replace(/,.*|[^0-9]/g, ''), 10));
        $('#jml_hpp').val(convertToRupiah(parseInt(hpp.replace(/,.*|[^0-9]/g, ''), 10)*qty));
    });
		
    var rupiah1 = document.getElementById('hpp');
    rupiah1.addEventListener('keyup', function(e){
        rupiah1.value = formatRupiah(this.value, 'Rp. ');
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