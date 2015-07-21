<td class="sf_admin_text sf_admin_list_td_tendanhmuc"
    field="tendanhmuc">
    <?php echo link_to(VtHelper::truncate($csdl_dmnghenghiep->getTendanhmuc(), 50, '...', true),'csdl_dmnghenghiep_edit',$csdl_dmnghenghiep) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_gioithieu"
    field="gioithieu"><?php echo VtHelper::truncate($csdl_dmnghenghiep->getGioithieu(), 50, '...', true) ?></td>
<td class="sf_admin_text sf_admin_list_td_thutu"
    field="thutu"><?php echo VtHelper::truncate($csdl_dmnghenghiep->getThutu(), 50, '...', true) ?></td>
<td class="sf_admin_boolean sf_admin_list_td_trangthai"
    field="trangthai"><?php echo get_partial('csdlDmNgheNghiep/list_field_boolean', array('value' => VtHelper::truncate($csdl_dmnghenghiep->getTrangthai(), 50, '...', true))) ?></td>