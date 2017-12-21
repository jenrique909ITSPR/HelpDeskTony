<?php

namespace App\Controller\Component;

use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Controller\Component;
use Cake\I18n\Time;


class MessagesComponent extends Component{

  public function loadUserEndMessages()
  {
    $Userendmessages = TableRegistry::get('Userendmessages');
    $messages = $Userendmessages->find('all')
    ->where(['startdate <=' => Time::now() , 'endingdate >=' => Time::now()]);
    /*->where(function ($exp, $q) {
      return $exp->between('endingdate','2017/12/01','2017/12/02' );
  });*/


    return $messages;
  }


}
