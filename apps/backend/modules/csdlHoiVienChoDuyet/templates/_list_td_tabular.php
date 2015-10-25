<td class="sf_admin_text sf_admin_list_td_anhdaidien" field="anhdaidien">
    <?php  echo '<img align="middle" src="' . VtHelper::getUrlImagePathThumb(sfConfig::get('app_member_images'), $csdl_lylichhoivien->getImages()) . '"/>';?>
</td>
<td style="color: #0000cc;" class="sf_admin_text sf_admin_list_td_title" field="title" title="<?php echo  $csdl_lylichhoivien->getHodem()  ?>">
    <?php echo link_to(VtHelper::truncate($csdl_lylichhoivien->getHodem() . ' '. $csdl_lylichhoivien->getTen(), 50, '...', true), 'csdl_lylichhoivien_edit', $csdl_lylichhoivien, array('style'=>'color: #0088cc;')) ?>
</td>
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
<td class="sf_admin_text sf_admin_list_td_diachi"
    field="diachi"><?php echo VtHelper::truncate($csdl_lylichhoivien->getDiachi(), 50, '...', true) ?></td>
