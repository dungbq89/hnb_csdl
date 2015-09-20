<?php

/**
 * sfCalendar form base class.
 *
 * @method sfCalendar getObject() Returns the current form's model object
 *
 * @package    Vt_Portals
 * @subpackage form
 * @author     ngoctv1
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfCalendarForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'subject'          => new sfWidgetFormTextarea(),
      'location'         => new sfWidgetFormInputText(),
      'description'      => new sfWidgetFormTextarea(),
      'start_time'       => new sfWidgetFormDateTime(),
      'end_time'         => new sfWidgetFormDateTime(),
      'is_all_day_event' => new sfWidgetFormInputCheckbox(),
      'color'            => new sfWidgetFormInputText(),
      'recurring_rule'   => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'subject'          => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'location'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'      => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'start_time'       => new sfValidatorDateTime(array('required' => false)),
      'end_time'         => new sfValidatorDateTime(array('required' => false)),
      'is_all_day_event' => new sfValidatorBoolean(array('required' => false)),
      'color'            => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'recurring_rule'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sf_calendar[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfCalendar';
  }

}
