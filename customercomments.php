<?php
require_once ("models\customercommentmodel.php");

class customercomments extends Module
{
  public function __construct()
  {
      $this->name = 'customercomments';
      $this->version = '1.0.0';
      $this->author = 'anthony';
      $this->displayName = $this->l('customercomments');
      $this->description = $this->l('Global comment on the site, which will be displayed to all clients.');

      parent::__construct();
  }

  public function install()
  {
    return parent::install()
    && $this->registerHook('displaycustomeraccount')
    ;
    Db::getInstance()->execute(
      'Create Table if not exists '._DB_PREFIX_.'customer_comment(
        id_customer_comment INT(6) AUTO_INCREMENT PRIMARY KEY,
        score INT,
        id_customer INT(6),
        comment TEXT,
        date_add DATETIME)'
    );

}
public function hookDisplayCustomerAccount()
{
  return $this->display(__FILE__, 'customer-account.tpl');
}

}
?>
