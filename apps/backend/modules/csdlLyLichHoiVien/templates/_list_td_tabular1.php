<td class="sf_admin_text sf_admin_list_td_hodem"
    field="hodem"><?php echo VtHelper::truncate($csdl_lylichhoivien->getHodem(), 50, '...', true) ?></td>
<td class="sf_admin_text sf_admin_list_td_ten"
    field="ten"><?php echo VtHelper::truncate($csdl_lylichhoivien->getTen(), 50, '...', true) ?></td>
<td class="sf_admin_date sf_admin_list_td_ngaysinh"
    field="ngaysinh"><?php echo VtHelper::truncate($csdl_lylichhoivien->getNgaysinh(), 10, '', true) ?></td>
<td class="sf_admin_text sf_admin_list_td_gioitinh"
    field="gioitinh">
    <?php
        if($csdl_lylichhoivien->getGioitinh()==0){
            echo __("Nữ");
        }else{
            echo __("Nam");
        }
    ?>
</td>
<!--<td class="sf_admin_text sf_admin_list_td_diachi"-->
<!--    field="diachi">--><?php //echo VtHelper::truncate($csdl_lylichhoivien->getDiachi(), 50, '...', true) ?><!--</td>-->
<!--<td class="sf_admin_text sf_admin_list_td_maquan"-->
<!--    field="maquan">--><?php //echo VtHelper::truncate(csdl_areaTable::getName($csdl_lylichhoivien->getMatinh(),$csdl_lylichhoivien->getMaquan()), 50, '...', true) ?><!--</td>-->
<!--<td class="sf_admin_text sf_admin_list_td_matinh"-->
<!--    field="matinh">--><?php //echo VtHelper::truncate(csdl_areaTable::getName($csdl_lylichhoivien->getMatinh(),""), 50, '...', true) ?><!--</td>-->