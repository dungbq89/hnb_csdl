<?php

require_once dirname(__FILE__) . '/../lib/csdlChudeGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/csdlChudeGeneratorHelper.class.php';

/**
 * csdlChude actions.
 *
 * @package    Vt_Portals
 * @subpackage csdlChude
 * @author     ngoctv1
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class csdlChudeActions extends autoCsdlChudeActions
{
    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

        if ($this->getRoute()->getObject()->delete()) {
            $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
        }

        $this->redirect('@csdl_chude');
    }

    protected function executeBatchDelete(sfWebRequest $request)
    {
        $ids = $request->getParameter('ids');

        $records = Doctrine_Query::create()
            ->from('csdl_chude')
            ->whereIn('id', $ids)
            ->execute();

        foreach ($records as $record) {
            $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $record)));

            $record->delete();
        }

        $this->getUser()->setFlash('notice', 'The selected items have been deleted successfully.');
        $this->redirect('@csdl_chude');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $check = $form->getObject()->isNew() ? 'CREATE':"UPDATE";
            $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

            try {
                $csdl_chude = $form->save();
                $user = sfContext::getInstance()->getUser();
                VtHelper::writeLog($user->getGuardUser()->getId(),$check,$check,"Quản lý chủ đề",date('Y-m-d H:i:s'));

            } catch (Doctrine_Validator_Exception $e) {

                $errorStack = $form->getObject()->getErrorStack();

                $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ? 's' : null) . " with validation errors: ";
                foreach ($errorStack as $field => $errors) {
                    $message .= "$field (" . implode(", ", $errors) . "), ";
                }
                $message = trim($message, ', ');

                $this->getUser()->setFlash('error', $message);
                return sfView::SUCCESS;
            }

            $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('form' => $form, 'object' => $csdl_chude)));

            if ($request->hasParameter('_save_and_exit')) {
                $this->getUser()->setFlash('success', $notice);
                $this->redirect('@csdl_chude');
            } elseif ($request->hasParameter('_save_and_add')) {
                $this->getUser()->setFlash('success', $notice . ' You can add another one below.');

                $this->redirect('@csdl_chude_new');
            } else {
                $this->getUser()->setFlash('success', $notice);

                $this->redirect(array('sf_route' => 'csdl_chude_edit', 'sf_subject' => $csdl_chude));
            }
        } else {
            $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
        }
    }
}
