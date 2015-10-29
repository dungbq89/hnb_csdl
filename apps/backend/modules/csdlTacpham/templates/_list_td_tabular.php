  
  <td class="sf_admin_text sf_admin_list_td_anhdaidien" field="anhdaidien">
      <img align="middle" src="<?php echo VtHelper::getUrlImagePathThumb(sfConfig::get('app_document_images'), $csdl_tacpham->getAnhdaidien()) ?>" />
  </td>
  <td class="sf_admin_text sf_admin_list_td_tentacpham" field="tentacpham"><?php echo  VtHelper::truncate($csdl_tacpham->getTentacpham(), 50, '...', true)  ?></td>      
  <td class="sf_admin_text sf_admin_list_td_tacgia_id" field="tacgia_id"><?php echo  VtHelper::truncate($csdl_tacpham->getTacgia(), 50, '...', true)  ?></td>
  <td class="sf_admin_text sf_admin_list_td_chude_id" field="chude_id"><?php echo  VtHelper::truncate($csdl_tacpham->getChudeId(), 50, '...', true)  ?></td>      
  <td class="sf_admin_date sf_admin_list_td_ngayxuatban" field="ngayxuatban">
      <?php echo  VtHelper::truncate($csdl_tacpham->getNgayxuatban(), 10, '', true)  ?></td>