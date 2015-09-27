  
  <td class="sf_admin_text sf_admin_list_td_anhdaidien" field="anhdaidien">
      <?php  echo '<img align="middle" src="' . VtHelper::getUrlImagePathThumb(sfConfig::get('app_member_images'), $csdl_thehoivien->getAnhdaidien()) . '"/>';?>
  </td>
  <td class="sf_admin_text sf_admin_list_td_hoivien_id" field="hoivien_id">
      <?php echo  VtHelper::truncate(csdl_lylichhoivienTable::hotenHoivien($csdl_thehoivien->getHoivienId()), 50, '...', true)  ?></td>
  <td class="sf_admin_text sf_admin_list_td_mathe" field="mathe">
      <?php echo  VtHelper::truncate($csdl_thehoivien->getMathe(), 50, '...', true)  ?></td>
  <td class="sf_admin_date sf_admin_list_td_ngaycap" field="ngaycap">
      <?php echo  VtHelper::truncate($csdl_thehoivien->getNgaycap(), 10, '', true)  ?></td>
  <td class="sf_admin_date sf_admin_list_td_ngayhethan" field="ngayhethan">
      <?php echo  VtHelper::truncate($csdl_thehoivien->getNgayhethan(), 10, '', true)  ?></td>
  <td class="sf_admin_text sf_admin_list_td_nguoiky" field="nguoiky">
      <?php echo  VtHelper::truncate($csdl_thehoivien->getNguoiky(), 50, '...', true)  ?></td>
  <td class="sf_admin_date sf_admin_list_td_ngayky" field="ngayky">
      <?php echo  VtHelper::truncate($csdl_thehoivien->getNgayky(), 10, '', true)  ?></td>
  <td class="sf_admin_boolean sf_admin_list_td_trangthai" field="trangthai">
      <?php echo get_partial('csdlTheHoiVien/list_field_boolean', array('value' =>  VtHelper::truncate($csdl_thehoivien->getTrangthai(), 50, '...', true) )) ?></td>