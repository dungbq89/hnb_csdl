<?php
/**
 * Created by PhpStorm.
 * User: Ta Van Ngoc
 * Date: 9/27/15
 * Time: 12:23 AM
 */
class QuatrinhcongtacForm extends Basecsdl_quatrinhcongtacForm
{
    public function configure()
    {
        $years = range(date('Y'), date('Y') - 40);
        unset($this['created_by'],$this['updated_by'],$this['created_at'],$this['updated_at'],$this['hoivien_id']);
        $this->setWidgets(array(
            'id'         => new sfWidgetFormInputHidden(),

            'thoigian'   => new sfWidgetFormInputText(),
//            'batdau'     => new sfWidgetFormDateTime(array(
//                    'date' => array(
//                        'format' => '%day%/%month%/%year%',
//                        'can_be_empty' => false,
//                        'years' => array_combine($years, $years)
//                    ),
//                    'format' => '%date%',
//                    'default' => date('Y/m/d H:i', time())
//                )),
//            'ketthuc'    => new sfWidgetFormDateTime(array(
//                    'date' => array(
//                        'format' => '%day%/%month%/%year%',
//                        'can_be_empty' => false,
//                        'years' => array_combine($years, $years)
//                    ),
//                    'format' => '%date%',
//                    'default' => date('Y/m/d H:i', time())
//                )),
            'chucvu'     => new sfWidgetFormInputText(),
            'mota'       => new sfWidgetFormTextarea(),
            'noicongtac' => new sfWidgetFormInputText(),

        ));

        $this->setValidators(array(
            'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),

            'thoigian'   => new sfValidatorInteger(array('required' => true)),
//            'batdau'     => new sfValidatorDateTime(array('required' => true)),
//            'ketthuc'    => new sfValidatorDateTime(array('required' => true)),
            'chucvu'     => new sfValidatorString(array('max_length' => 255, 'required' => true)),
            'mota'       => new sfValidatorString(array('max_length' => 500, 'required' => true)),
            'noicongtac' => new sfValidatorString(array('max_length' => 255, 'required' => false)),

        ));

        $this->widgetSchema['hoivien_id'] = new sfWidgetFormChoice(array(
            'choices' => $this->dsHoivien(),
            'multiple' => false,
            'expanded' => false));
        $this->validatorSchema['hoivien_id'] = new sfValidatorChoice(array(
            'required' => false,
            'choices' => array_keys($this->dsHoivien()),));

        $this->widgetSchema['donvi_id'] = new sfWidgetFormChoice(array(
            'choices' => $this->getDonVi(),
            'multiple' => false,
            'expanded' => false));
        $this->validatorSchema['donvi_id'] = new sfValidatorChoice(array(
            'required' => false,
            'choices' => array_keys($this->getDonVi()),));

        $this->widgetSchema->setNameFormat('csdl_quatrinhcongtac[%s]');
    }

    protected function dsHoivien(){
        $arrHoivien = array(''=>'----- Chọn Hội viên -----');
        $hoivien = csdl_lylichhoivienTable::dsHoivienForThe();

        if(count($hoivien)>0){
            foreach($hoivien as $value){
                $arrHoivien[$value['hoivien_id']] = $value['hodem'] ;
            }
        }
        return $arrHoivien;
    }


    protected function getDonVi(){
        $arrDonvi = array(''=>'----- Chọn đơn vị -----');
        $donvi = csdl_coquanbaochiTable::dsCoquan()->fetchArray();
        if(count($donvi)>0){
            foreach($donvi as $value){
                $arrDonvi[$value['id']] = $value['tendonvi'];
            }
        }
        return $arrDonvi;
    }
}