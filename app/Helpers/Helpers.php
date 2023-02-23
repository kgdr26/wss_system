<?php

function getRomawi($bln){

    switch ($bln){
        case 1:
            return "I";
            break;
        case 2:
            return "II";
            break;
        case 3:
            return "III";
            break;
        case 4:
            return "IV";
            break;
        case 5:
            return "V";
            break;
        case 6:
            return "VI";
            break;
        case 7:
            return "VII";
            break;
        case 8:
            return "VIII";
            break;
        case 9:
            return "IX";
            break;
        case 10:
            return "X";
            break;
        case 11:
            return "XI";
            break;
        case 12:
            return "XII";
            break;
    }

}

function showdatabrgpo($id_po){
    $arr                = collect(\DB::select("SELECT a.*,b.* FROM trx_po a LEFT JOIN mst_vendor b ON a.id_vendor=b.id_vendor WHERE id_po='$id_po'"))->first();
    $brg                = DB::select("SELECT a.*,b.name_brg,b.kode,c.name_satuan FROM trx_barang_masuk a LEFT JOIN brg_atk b ON a.id_brg_atk=b.id LEFT JOIN trx_satuan c ON b.satuan=c.id_satuan WHERE id_po_brg='$id_po'");
    $show_brg           = '';
    $no                 = 1;
    $hpp                = 1;
    foreach($brg as $key => $val){
        $show_brg .= '<tr class="fw-bold text-gray-700 fs-5 text-end">';
        $show_brg .= '<td class="pt-6 text-center">'.$no++.'</td>';
        $show_brg .= '<td class="pt-6 text-start">'.$val->kode.'</td>';
        $show_brg .= '<td class="pt-6 text-start">'.$val->name_brg.'</td>';
        $show_brg .= '<td class="pt-6 text-start">'.$val->name_satuan.'</td>';
        $show_brg .= '<td class="pt-6 text-start">'.$val->qty_brg_masuk.'</td>';
        $show_brg .= '<td class="pt-6 text-start"><input type="text" class="form-control" data-name="hpp'.$hpp++.'" id="hpp"></td>';
        $show_brg .= '<td class="pt-6 text-start">';
        $show_brg .= '<select class="form-select" data-control="select2" name="" id="status_brg_po">';
        if($val->status == "ORDER"){
            $show_brg .= '<option selected value="ORDER">ORDER</option>';
            $show_brg .= '<option value="DITERIMA">DITERIMA</option>';
        }else{
            $show_brg .= '<option value="ORDER">ORDER</option>';
            $show_brg .= '<option selected value="DITERIMA">DITERIMA</option>';
        }
        $show_brg .= '</select>';
        $show_brg .= '</td>';
        $show_brg .= '</tr>';
    }

    $data['vendor']      = $arr;
    $data['showbrg']     = $show_brg;

    return $data;
}