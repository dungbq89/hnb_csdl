  
  <td class="sf_admin_text sf_admin_list_td_hoivien_id" field="hoivien_id">
      <?php echo  VtHelper::truncate(csdl_lylichhoivienTable::hotenHoivien($csdl_quatrinhcongtac->getHoivienId()), 50, '...', true)  ?></td>
<!--  <td class="sf_admin_text sf_admin_list_td_donvi_id" field="donvi_id">-->
<!--      --><?php //echo  VtHelper::truncate(csdl_coquanbaochiTable::tenDonvi($csdl_quatrinhcongtac->getDonviId()), 50, '...', true)  ?><!--</td>-->
  <td class="sf_admin_text sf_admin_list_td_thoigian" field="thoigian"><?php echo  VtHelper::truncate($csdl_quatrinhcongtac->getThoigian(), 50, '...', true)  ?></td>      
  <td class="sf_admin_date sf_admin_list_td_batdau" field="batdau">
      <?php echo  VtHelper::truncate($csdl_quatrinhcongtac->getBatdau(), 10, '', true)  ?></td>
  <td class="sf_admin_date sf_admin_list_td_ketthuc" field="ketthuc">
      <?php echo  VtHelper::truncate($csdl_quatrinhcongtac->getKetthuc(), 10, '', true)  ?></td>
  <td class="sf_admin_text sf_admin_list_td_chucvu" field="chucvu"><?php echo  VtHelper::truncate($csdl_quatrinhcongtac->getChucvu(), 50, '...', true)  ?></td>