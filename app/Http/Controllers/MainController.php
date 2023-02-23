<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Hash;

class MainController extends Controller
{
    //Dashboard
    function Dasbor(){
        $data = array(
            'menu' => 'Dashboard'
        );

        return view('Dasbor.list')->with($data);
    }

    //Master
    function Vendor(){
        $arr        = DB::select("SELECT * FROM mst_vendor WHERE status='1'");
        $data = array(
            'menu' => 'Master - Vendor',
            'arr'       => $arr,
        );

        return view('Master.vendor')->with($data);
    }

    function addvendor(Request $request){
        $name_vendor        = $request['name_vendor'];
        $npwp               = $request['npwp'];
        $address_vendor     = $request['address_vendor'];
        $cp_name            = $request['cp_name'];
        $no_tlp             = $request['no_tlp'];
        $tgl_create         = date('Y-m-d H:i:s');
        $status             = 1;

        DB::insert("INSERT INTO mst_vendor (name_vendor,npwp,address_vendor,cp_name,no_tlp,tgl_create,status) values (?,?,?,?,?,?,?)", [$name_vendor,$npwp,$address_vendor,$cp_name,$no_tlp,$tgl_create,$status]);

        return response('success');
    }

    function Customer(){
        $arr        = DB::select("SELECT * FROM mst_customer WHERE status='1'");
        $data = array(
            'menu' => 'Master - Customer',
            'arr'       => $arr,
        );

        return view('Master.customer')->with($data);
    }

    function addcustomer(Request $request){
        $name_customer      = $request['name_customer'];
        $npwp_customer      = $request['npwp_customer'];
        $address_customer   = $request['address_customer'];
        $cp_customer        = $request['cp_customer'];
        $tlp_customer       = $request['tlp_customer'];
        $tgl_create         = date('Y-m-d H:i:s');
        $status             = 1;

        DB::insert("INSERT INTO mst_customer (name_customer,npwp_customer,address_customer,cp_customer,tlp_customer,tgl_create,status) values (?,?,?,?,?,?,?)", [$name_customer,$npwp_customer,$address_customer,$cp_customer,$tlp_customer,$tgl_create,$status]);

        return response('success');
    }

    function ItemsATK(){
        $arr        = DB::select("SELECT a.*,b.name_satuan FROM brg_atk a LEFT JOIN trx_satuan b ON a.satuan=b.id_satuan");
        $satuan     = DB::select("SELECT * FROM trx_satuan");
        $data = array(
            'menu'      => 'Master - Item ATK',
            'arr'       => $arr,
            'satuan'    => $satuan,
        );

        return view('Master.itemsatk')->with($data);
    }

    function cekkode(Request $request){
        $kode       = $request['kode'];
        $count      = DB::select("SELECT * FROM brg_atk WHERE kode='$kode'");

        return response(count($count));
    }

    function additemsatk(Request $request){
        $kode           = $request['kode'];
        $name_brg       = $request['name_brg'];
        $satuan         = $request['satuan'];
        $stok_awal      = 0;
        $masuk          = 0;
        $keluar         = 0;
        $stok_akhir     = $request['jumlah'];
        $harga          = $request['harga'];
        $tgl_add        = date('Y-m-d H:i:s');
        $status         = 1;
        $id_user_add    = 1;

        DB::insert("INSERT INTO brg_atk (kode,name_brg,satuan,stok_awal,masuk,keluar,stok_akhir,harga,tgl_add,status,id_user_add) values (?,?,?,?,?,?,?,?,?,?,?)", [$kode,$name_brg,$satuan,$stok_awal,$masuk,$keluar,$stok_akhir,$harga,$tgl_add,$status,$id_user_add]);

        return response('success');
    }

    function User(){
        $arr        = DB::select("SELECT * FROM mst_users WHERE status='1'");
        $data = array(
            'menu' => 'Master - Users',
            'arr'       => $arr,
        );

        return view('Master.user')->with($data);
    }

    function adduser(Request $request){

        $name_user      = $request['name_user'];
        $username       = $request['username'];
        $password       = Hash::make($request['password']);
        $show_pass      = $request['password'];
        $level_user     = $request['level_user'];
        $tgl_create     = date('Y-m-d H:i:s');
        $foto_user      = 'default.jpg';
        $status         = 1;

        DB::insert("INSERT INTO mst_users (name_user,username,password,show_pass,level_user,tgl_create,foto_user,status) values (?,?,?,?,?,?,?,?)", [$name_user,$username,$password,$show_pass,$level_user,$tgl_create,$foto_user,$status]);

        return response('success');
    }

    //END Master

    // Inventory
    function Stock(){
        $arr        = DB::select("SELECT a.*,b.name_satuan FROM brg_atk a LEFT JOIN trx_satuan b ON a.satuan=b.id_satuan");
        $satuan     = DB::select("SELECT * FROM trx_satuan");
        $data = array(
            'menu'      => 'Inventory - Stock',
            'arr'       => $arr,
            'satuan'    => $satuan,
        );

        return view('Inventory.stock')->with($data);
    }

    function StockOpname(){
        $arr        = DB::select("SELECT a.*,b.kode,b.name_brg,c.name_satuan FROM trx_stock_opname a LEFT JOIN brg_atk b ON a.id_brg_atk=b.id LEFT JOIN trx_satuan c ON b.satuan=c.id_satuan");
        $satuan     = DB::select("SELECT * FROM trx_satuan");
        $data = array(
            'menu'      => 'Inventory - Stock Opname',
            'arr'       => $arr,
            'satuan'    => $satuan,
        );

        return view('Inventory.stockopname')->with($data);
    }

    function addopname(Request $request){
        $id_brg_atk             = $request['id_brg_atk'];
        $qty_stock_opname       = $request['qty_stock_opname'];
        $hpp_stock_opname       = $request['hpp_stock_opname'];
        $date_create            = date('Y-m-d H:i:s');
        $status                 = 1;

        DB::insert("INSERT INTO trx_stock_opname (id_brg_atk,qty_stock_opname,hpp_stock_opname,date_create,status) values (?,?,?,?,?)", [$id_brg_atk,$qty_stock_opname,$hpp_stock_opname,$date_create,$status]);

        return response('success');
    }

    function BarangMasuk(){
        $arr        = DB::select("SELECT a.*,b.name_user,c.cp_name FROM trx_po a LEFT JOIN mst_users b ON a.user_create=b.id_user LEFT JOIN mst_vendor c ON a.id_vendor=c.id_vendor ORDER BY tgl_create_po DESC");
        $vendor     = DB::select("SELECT * FROM mst_vendor");
        $data = array(
            'menu'      => 'Inventory - Good Receipt',
            'arr'       => $arr,
            'vendor'    => $vendor,
        );

        return view('Inventory.barangmasuk')->with($data);
    }

    function showdatabrgpo(Request $request){
        $id_po      = $request['id_po'];
        $arr        = showdatabrgpo($id_po);

        return response($arr);
    }

    function searchnamebrg(Request $request){
        $name_brg       = $request['name_brg'];

        $name_qry   = DB::select("SELECT * FROM brg_atk WHERE name_brg LIKE '%$name_brg%'");
        $data       = '';

        if(!empty($name_qry)){
            foreach($name_qry as $key => $row){
                $data .= '<li class="klik-dat" data-id="'.$row->id.'" data-name="'.$row->name_brg.'" data-kode="'.$row->kode.'" data-satuan="'.$row->satuan.'" data-stok="'.$row->stok_akhir.'"><p class="dropdown-item" href="#">'.$row->name_brg.'</p></li>';
            }
        }else{
            $data .= '<li class="klik-dat" data-name=""><div class="dropdown-item" href="#"><i class="bi bi-search"></i> No results</div></li>';
        }

        return response($data);
    }

    //END Inventory

    function AddPO(){
        $arr        = DB::select("SELECT * FROM mst_vendor WHERE status='1'");
        $satuan     = DB::select("SELECT * FROM trx_satuan");
        $data = array(
            'menu'      => 'Purchase Order (ATK)',
            'arr'       => $arr,
            'satuan'    => $satuan
        );

        return view('PO.add')->with($data);
    }

    function datatemppo(){
        $arr        = DB::select("SELECT a.*,b.kode,b.name_brg,c.name_satuan FROM trx_temp_po a LEFT JOIN brg_atk b ON a.id_brg=b.id LEFT JOIN trx_satuan c ON b.satuan=c.id_satuan");
        $data       = '';

        if(!empty($arr)){
            $no = 1;
            foreach($arr as $key => $row){
                $data .= '<tr class="fw-bold text-gray-700 fs-5 text-end">';
                $data .= '<td class="pt-6 text-center">'.$no++.'</td>';
                $data .= '<td class="pt-6 text-start">'.$row->kode.'</td>';
                $data .= '<td class="pt-6 text-start">'.$row->name_brg.'</td>';
                $data .= '<td class="pt-6 text-start">'.$row->name_satuan.'</td>';
                $data .= '<td class="pt-6 text-start">'.$row->qty_po.'</td>';
                $data .= '<td class="pt-6 text-center">';
                $data .= '<button class="btn btn-light-info"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></span></button>';
                $data .= '<button class="btn btn-light-danger"><span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/></svg></span></button>';
                $data .= '</td>';
                $data .= '</tr>';
            }

        }else{
            $data .= '<tr class="fw-bold text-gray-700 fs-5 text-end"></tr>';
        }

        return response($data);
    }

    function cekvendor(Request $request){
        $id_vendor  = $request['id_vendor'];
        $arr        = collect(\DB::select("SELECT * FROM mst_vendor WHERE id_vendor='$id_vendor'"))->first();
        $data       = array(
            'cp_name'       => $arr->cp_name,
            'name_vendor'   => $arr->name_vendor,
            'npwp'          => $arr->npwp,
            'no_tlp'        => $arr->no_tlp,
            'address_vendor'=> $arr->address_vendor
        );

        return response($data);
    }

    function cektemppo(Request $request){
        $id_brg     = $request['id_brg'];
        $count      = DB::select("SELECT * FROM trx_temp_po WHERE id_brg='$id_brg'");

        return response(count($count));
    }

    function addtemppo(Request $request){
        $id_brg     = $request['id_brg'];
        $qty_po     = $request['qty_po'];

        DB::insert("INSERT INTO trx_temp_po (id_brg, qty_po) values (?,?)", [$id_brg,$qty_po]);

        return response('success');
    }

    function addcreatepo(Request $request){
        $temp_po        = DB::select("SELECT * FROM trx_temp_po");
        $po_count       = DB::select("SELECT * FROM trx_po");
        $romawi_bulan   = getRomawi(date('m'));

        $id_vendor      =  $request['id_vendor'];
        $no_po          = sprintf("%04d",(count($po_count)+1))."/WNT/PO-ATK/".$romawi_bulan."/".date('Y');
        $jml_brg        = count($temp_po);
        $tgl_create_po  = date('Y-m-d H:i:s');
        $user_create    = 1;
        $status         = "ORDER";

        DB::insert("INSERT INTO trx_po (no_po, jml_brg, id_vendor, tgl_create_po, user_create, status) values (?,?,?,?,?,?)", [$no_po, $jml_brg, $id_vendor, $tgl_create_po, $user_create, $status]);

        foreach($temp_po as $key => $row){
            $id_po_brg      = count($po_count)+1;
            $id_brg_atk     = $row->id_brg;
            $qty_brg_masuk  = $row->qty_po;
            $hpp_brg_masuk  = null;
            $date_masuk     = null;
            $status         = "ORDER";
            DB::insert("INSERT INTO trx_barang_masuk (id_po_brg,id_brg_atk,qty_brg_masuk,hpp_brg_masuk,date_masuk,status) values (?,?,?,?,?,?)", [$id_po_brg,$id_brg_atk,$qty_brg_masuk,$hpp_brg_masuk,$date_masuk,$status]);
        }

        DB::table('trx_temp_po')->truncate();

        return response('success');

    }

    // function ATKHistoryPO(){
    //     $data = array(
    //         'menu' => 'ATK - History PO'
    //     );

    //     return view('ATK.historypo')->with($data);
    // }

}
