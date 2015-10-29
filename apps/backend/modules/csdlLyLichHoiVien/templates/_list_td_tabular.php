<td class="sf_admin_text sf_admin_list_td_images"
    field="images">
    <image src="<?php echo VtHelper::getUrlImagePathThumb(sfConfig::get('app_member_images'), $csdl_lylichhoivien->getImages()) ?>" />
<td class="sf_admin_text sf_admin_list_td_hodem"
    field="hodem"><?php echo VtHelper::truncate($csdl_lylichhoivien->getHodem(), 50, '...', true) ?></td>
<td class="sf_admin_text sf_admin_list_td_ten"
    field="ten"><?php echo VtHelper::truncate($csdl_lylichhoivien->getTen(), 50, '...', true) ?></td>
<td class="sf_admin_date sf_admin_list_td_ngaysinh"
    field="ngaysinh"><?php echo VtHelper::truncate($csdl_lylichhoivien->getNgaysinh(), 50, '...', true) ?></td>
<td class="sf_admin_text sf_admin_list_td_gioitinh"
    field="gioitinh">
    <?php
    if($csdl_lylichhoivien->getGioitinh()=='0'){
        echo __('Nữ');
    }else{echo __('Nam');}
    ?>
</td>