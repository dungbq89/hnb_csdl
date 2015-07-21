<td class="sf_admin_text sf_admin_list_td_file_path" field="file_path" style="text-align: center;">
    <?php echo '<img align="middle" src="' . VtHelper::getUrlImagePathThumb(sfConfig::get('app_member_images'), $csdl_dantoc->getAnhdaidien()) . '"/>'; ?>
</td>
<td class="sf_admin_text sf_admin_list_td_madantoc"
    field="madantoc">
    <?php echo link_to(VtHelper::truncate($csdl_dantoc->getMadantoc(), 50, '...', true),'csdl_dantoc_edit',$csdl_dantoc) ?></td>
<td class="sf_admin_text sf_admin_list_td_tendantoc"
    field="tendantoc">
<?php echo link_to(VtHelper::truncate($csdl_dantoc->getTendantoc(), 50, '...', true),'csdl_dantoc_edit',$csdl_dantoc) ?></td>
<td class="sf_admin_text sf_admin_list_td_gioithieu"
    field="gioithieu"><?php echo VtHelper::truncate($csdl_dantoc->getGioithieu(), 50, '...', true) ?></td>