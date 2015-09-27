  
  <td class="sf_admin_text sf_admin_list_td_hoivien_id" field="hoivien_id">
      <?php echo  VtHelper::truncate(csdl_lylichhoivienTable::hotenHoivien($csdl_nhatky->getHoivienId()), 50, '...', true)  ?></td>
  <td class="sf_admin_text sf_admin_list_td_tieude" field="tieude"><?php echo  VtHelper::truncate($csdl_nhatky->getTieude(), 50, '...', true)  ?></td>      
  <td class="sf_admin_text sf_admin_list_td_machucnang" field="machucnang"><?php echo  VtHelper::truncate($csdl_nhatky->getMachucnang(), 50, '...', true)  ?></td>      
  <td class="sf_admin_text sf_admin_list_td_module" field="module"><?php echo  VtHelper::truncate($csdl_nhatky->getModule(), 50, '...', true)  ?></td>      
  <td class="sf_admin_date sf_admin_list_td_ngaytao" field="ngaytao"><?php echo  VtHelper::truncate($csdl_nhatky->getNgaytao(), 50, '...', true)  ?></td>      
  <td class="sf_admin_text sf_admin_list_td_ip" field="ip"><?php echo  VtHelper::truncate($csdl_nhatky->getIp(), 50, '...', true)  ?></td>    