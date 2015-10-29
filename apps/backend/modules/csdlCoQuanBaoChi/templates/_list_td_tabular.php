  
  <td class="sf_admin_text sf_admin_list_td_tendonvi" field="tendonvi"><?php echo  VtHelper::truncate($csdl_coquanbaochi->getTendonvi(), 50, '...', true)  ?></td>      
  <td class="sf_admin_text sf_admin_list_td_gioithieu" field="gioithieu"><?php echo  VtHelper::truncate($csdl_coquanbaochi->getGioithieu(), 50, '...', true)  ?></td>      
  <td class="sf_admin_text sf_admin_list_td_nguoidaidien" field="nguoidaidien"><?php echo  VtHelper::truncate($csdl_coquanbaochi->getNguoidaidien(), 50, '...', true)  ?></td>      
  <td class="sf_admin_text sf_admin_list_td_thutu" field="thutu"><?php echo  VtHelper::truncate($csdl_coquanbaochi->getThutu(), 50, '...', true)  ?></td>      
  <td class="sf_admin_boolean sf_admin_list_td_trangthai" field="trangthai"><?php echo get_partial('csdlCoQuanBaoChi/list_field_boolean', array('value' =>  VtHelper::truncate($csdl_coquanbaochi->getTrangthai(), 50, '...', true) )) ?></td>    