
<td class="sf_admin_text sf_admin_list_td_file_path" field="file_path" style="text-align: center;">
    <?php  echo '<img align="middle" src="' . VtHelper::getUrlImagePathThumb(sfConfig::get('app_member_images'), $csdl_thehoivien->getAnhdaidien()) . '"/>';?>
</td>

<td class="sf_admin_text sf_admin_list_td_hoivient_id"
    field="hoivient_id"><?php echo link_to(VtHelper::truncate($csdl_thehoivien->getHoivientId(), 50, '...', true),'csdl_thehoivien_edit',$csdl_thehoivien) ?></td>
<td class="sf_admin_text sf_admin_list_td_mathe"
    field="mathe"><?php echo VtHelper::truncate($csdl_thehoivien->getMathe(), 50, '...', true) ?></td>
<td class="sf_admin_date sf_admin_list_td_ngaycap"
    field="ngaycap"><?php echo VtHelper::truncate($csdl_thehoivien->getNgaycap(), 50, '...', true) ?></td>
<td class="sf_admin_boolean sf_admin_list_td_trangthai"
    field="trangthai"><?php echo get_partial('csdlTheHoiVien/list_field_boolean', array('value' => VtHelper::truncate($csdl_thehoivien->getTrangthai(), 50, '...', true))) ?></td>