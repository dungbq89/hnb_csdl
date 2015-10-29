<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/20/15
 * Time: 10:00 PM
 */
class TacphamForms extends Basecsdl_tacphamForm
{
    public function configure()
    {
        unset($this['created_by'],$this['updated_by'],$this['created_at'],$this['updated_at'],$this['hoivien_id']);

        $this->setWidgets(array(
            'id'           => new sfWidgetFormInputHidden(),
            'tentacpham'   => new sfWidgetFormInputText(),
            'gioithieu'    => new sfWidgetFormTextarea(),
            'tacgia'          => new sfWidgetFormInputText(),
            'tacphamtieubieu' => new sfWidgetFormInputCheckbox(),
        ));

        $this->setValidators(array(
            'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'tentacpham'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'gioithieu'    => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
            'tacgia'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
            'tacphamtieubieu' => new sfValidatorBoolean(array('required' => false)),

        ));

        //ngoctv sua image_path
        $this->widgetSchema['anhdaidien'] = new sfWidgetFormInputFileEditable(array(
            'label' => ' ',
            'file_src' => VtHelper::getUrlImagePathThumb(sfConfig::get('app_document_images'), $this->getObject()->getAnhdaidien()),
            'is_image' => true,
            'edit_mode' => !$this->isNew(),
            'template' => '<div>%file%<br />%input%</div>',
        ));
        $this->validatorSchema['anhdaidien'] = new sfValidatorFileViettel(
            array(
                'validated_file_class' => 'sfResizeMediumThumbnailImage',
                'max_size' => sfConfig::get('app_image_maxsize', 999999),
                'mime_types' => array('image/jpeg','image/jpg', 'image/png', 'image/gif'),
                'path' => sfConfig::get("sf_upload_dir") . '/' . sfConfig::get('app_document_images'),
                'required' => $this->isNew(),
            ),
            array(
                'mime_types' =>('Dữ liệu không hợp lệ hoặc định dạng không đúng.'),
                'max_size' =>('Tập tin tải lên không vượt quá 5MB')
            )
        );

        $showFile = "";
        $filePath=$this->getObject()->getFiledownload();
        if ($filePath == "" || is_null($filePath)) {
            $showFile = "style='display:none'";
        }
        $this->setWidget('filedownload', new sfWidgetFormInputFileEditable(
            array('edit_mode' => !$this->isNew(),
                'with_delete' => true,
                'file_src' =>sfConfig::get('app_upload_media_file') . '/video' . $this->getObject()->getFiledownload(),
                'template' => '<div class="player"><br />%input% <br /><span ' . $showFile . ">" . $this->getObject()->getFiledownload() ." </span></div>"
            )
        ));
        $this->validatorSchema['filedownload'] = new sfValidatorFileViettel(
            array('required' => $this->isNew(),
                'max_size' => sfConfig::get('app_upload_video_max_size',99999999),
                'upload_path'=>sfConfig::get("sf_upload_dir") . '/' . sfConfig::get('app_document'),
                'path' => sfConfig::get("sf_upload_dir") . '/' . sfConfig::get('app_document'),
                'mime_types' => array('application/pdf','image/jpeg','image/jpg', 'image/png', 'image/gif',
                    'flv' => 'video/x-flv','mp4' =>'video/mp4',
                    'application/octet-stream',
                    'application/msword',
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    'application/vnd.ms-word',
                    'application/vnd.ms-excel',
                    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    'application/vnd.ms-powerpoint',
                    'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                    'application/x-rar',
                    'application/zip',
                    'application/x-msword',
                    'application/msword')),
            array('max_size' =>('File upload dung lượng không quá 50MB.'),
                'mime_types' =>('File attach phải là các file tài liệu.'),
                'required' => ('Phải chọn file đính kèm để tải lên'))
        );

        $this->widgetSchema['ngayxuatban'] = new sfWidgetFormVnDatePicker(array(),array('readonly'=>true));
        $this->validatorSchema['ngayxuatban'] = new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d H:i:s'));

        $this->widgetSchema['hoivien_id'] = new sfWidgetFormChoice(array(
            'choices' => $this->dsHoiVien(),
            'multiple' => false,
            'expanded' => false));
        $this->validatorSchema['hoivien_id'] = new sfValidatorChoice(array(
            'required' => true,
            'choices' => array_keys($this->dsHoiVien()),));

        $this->widgetSchema['chude_id'] = new sfWidgetFormChoice(array(
            'choices' => $this->dsChude(),
            'multiple' => false,
            'expanded' => false));
        $this->validatorSchema['chude_id'] = new sfValidatorChoice(array(
            'required' => false,
            'choices' => array_keys($this->dsChude()),));
        $status=array('0'=>'Bản nháp','1'=>'Gửi duyệt','2'=>'Phê duyệt');
        $this->widgetSchema['status'] = new sfWidgetFormChoice(array(
            'choices' => $status,
            'multiple' => false,
            'expanded' => false));
        $this->validatorSchema['status'] = new sfValidatorChoice(array(
            'required' => false,
            'choices' => array_keys($status),));

        $this->widgetSchema->setNameFormat('csdl_tacpham[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
    }

    protected function dsTacgia(){
        $arrJobs = array(''=>'----- Chọn Tác giả -----');
        $jobs = csdl_tacgiaTable::dsTacgia();
        if(count($jobs)>0){
            foreach($jobs as $value){
                $arrJobs[$value['id']] = $value['hoten'];
            }
        }
        return $arrJobs;
    }

    protected function dsChude(){
        $arrJobs = array(''=>'----- Chọn Chủ đề -----');
        $jobs = csdl_chudeTable::dsChude();
        if(count($jobs)>0){
            foreach($jobs as $value){
                $arrJobs[$value['id']] = $value['tenchude'];
            }
        }
        return $arrJobs;
    }

    //lay danh sach hoi vien
    protected function dsHoiVien(){
        $arrHoiviens = array(''=>'----- Chọn hội viên -----');
        $hoiviens = csdl_lylichhoivienTable::dsHoivienForThe();
        if(count($hoiviens)>0){
            foreach($hoiviens as $value){
                $arrHoiviens[$value['hoivien_id']] = $value['hodem'];
            }
        }
        return $arrHoiviens;
    }
//    protected function doBind(array $values) {
//        $user = sfContext::getInstance()->getUser();
//        $values['hoivien_id'] =$user->getGuardUser()->getId();
//        parent::doBind($values);
//    }
}