<td class="sf_admin_text sf_admin_list_td_file_path" field="file_path" style="text-align: center;">
    <?php echo '<img align="middle" src="' . VtHelper::getUrlImagePathThumb(sfConfig::get('app_member_images'), $csdl_chude->getAnhdaidien()) . '"/>'; ?>
</td>
<td class="sf_admin_text sf_admin_list_td_tenchude"
    field="tenchude">
    <?php echo link_to(VtHelper::truncate($csdl_chude->getTenchude(), 50, '...', true),'csdl_chude_edit',$csdl_chude) ?></td>
<td class="sf_admin_text sf_admin_list_td_gioithieu"
    field="gioithieu"><?php echo VtHelper::truncate($csdl_chude->getGioithieu(), 50, '...', true) ?></td>
<td class="sf_admin_text sf_admin_list_td_thutu"
    field="thutu"><?php echo VtHelper::truncate($csdl_chude->getThutu(), 50, '...', true) ?></td>
<td class="sf_admin_boolean sf_admin_list_td_trangthai"
    field="trangthai"><?php echo get_partial('csdlChude/list_field_boolean', array('value' => VtHelper::truncate($csdl_chude->getTrangthai(), 50, '...', true))) ?></td>