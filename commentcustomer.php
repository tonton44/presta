<?php
class CustomerCommentscommentcustomerModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
      $this->setTemplate("commentForm.tpl");
      parent::initContent();

      if (Tools::isSubmit("nom")){
        $comment= new customercommentmodel;
        $comment->comment=Tools::getValue('commentaire');
        $comment->score=Tools::getValue('score');
        $comment->id_customer=$this->context->customer->id;
        $comment->add();
      }
    }
}
