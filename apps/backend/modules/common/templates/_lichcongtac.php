<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/20/15
 * Time: 3:16 PM
 */

?>
<div class="box-news">
    <h3 class="title-main"><span class="label">LỊCH CÔNG TÁC </span></h3>
    <div class="calendar">
        <p align="center">
            <b ><span style="font-size: 16pt; ">
            LỊCH CÔNG TÁC TUẦN THỨ <?php echo $weekNumber = date("W"); ?></span></b>
        </p>
        <p align="center">
            <i ><span >(Tuần từ ngày <strong><?php echo $mon ?></strong>
            đến ngày <strong><?php echo $sun ?></strong>)</span></i></p>
    <table width="100%" cellspacing="0" cellpadding="3" class="bordered" border="1" style="BORDER-COLLAPSE: collapse; border-color: #ccc;">
        <tbody>
        <tr class="header">
            <td>Ngày</td>
            <td>Giờ</td>
            <td>Nội dung</td>
            <td>Địa điểm</td>
            <td>Thành phần</td>
            <td>Chuẩn bị</td>
            <td>Chủ trì</td>
        </tr>
        <tr>
            <td width="80" rowspan="<?php echo isset($rowmon)?$rowmon:$rowcount; ?>" ><span class="text-normal"><strong>Thứ hai</strong><br> <?php echo $mon ?></span></td>
            <?php echo  html_entity_decode(isset($tdmon)?$tdmon:$tdDefault); ?>
        </tr>
        <?php echo  html_entity_decode(isset($trmon)?$trmon:$trValue); ?>

        <tr>
            <td width="80" rowspan="<?php echo isset($rowtue)?$rowmon:$rowcount; ?>"><span class="text-normal"><strong>Thứ ba</strong><br> <?php echo $tue ?></span></td>
            <?php echo  html_entity_decode(isset($tdtue)?$tdtue:$tdDefault); ?>
        </tr>
        <?php echo  html_entity_decode(isset($trtue)?$trtue:$trValue); ?>

        <tr>
            <td width="80" rowspan="<?php echo isset($rowwed)?$rowwed:$rowcount; ?>"><span class="text-normal"><strong>Thứ tư</strong><br> <?php echo $wed ?></span></td>
            <?php echo  html_entity_decode(isset($tdwed)?$tdwed:$tdDefault); ?>
        </tr>
        <?php echo  html_entity_decode(isset($trwed)?$trwed:$trValue); ?>

        <tr>
            <td width="80" rowspan="<?php echo isset($rowthu)?$rowthu:$rowcount; ?>"><span class="text-normal"><strong>Thứ năm</strong><br> <?php echo $thu ?></span></td>
            <?php echo  html_entity_decode(isset($tdthu)?$tdthu:$tdDefault); ?>
        </tr>
        <?php echo  html_entity_decode(isset($trthu)?$trthu:$trValue); ?>

        <tr>
            <td width="80" rowspan="<?php echo isset($rowfri)?$rowfri:$rowcount; ?>"><span class="text-normal"><strong>Thứ sáu</strong><br> <?php echo $fri ?></span></td>
            <?php echo  html_entity_decode(isset($tdfri)?$tdfri:$tdDefault); ?>
        </tr>
        <?php echo  html_entity_decode(isset($trfri)?$trfri:$trValue); ?>

        <tr>
            <td width="80" rowspan="<?php echo isset($rowsat)?$rowsat:$rowcount; ?>"><span class="text-normal"><strong>Thứ bảy</strong><br> <?php echo $sat ?></span></td>
            <?php echo  html_entity_decode(isset($tdsat)?$tdsat:$tdDefault); ?>
        </tr>
        <?php echo  html_entity_decode(isset($trsat)?$trsat:$trValue); ?>

        <tr>
            <td width="80" rowspan="<?php echo isset($rowsun)?$rowsun:$rowcount; ?>"><span class="text-normal"><strong>Chủ nhật</strong><br> <?php echo $sun ?></span></td>
            <?php echo  html_entity_decode(isset($tdsun)?$tdsun:$tdDefault); ?>
        </tr>
        <?php echo  html_entity_decode(isset($trsun)?$trsun:$trValue); ?>

        </tbody>
    </table>
    </div>
    <div class="clear"></div>
</div>