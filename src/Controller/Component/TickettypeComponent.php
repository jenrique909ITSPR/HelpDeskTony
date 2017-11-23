<?php 

namespace App\Controller\Component;

use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Controller\Component;
/**
* 
*/
class TickettypeComponent extends Component
{
      


public function getTotal($typeFilter = null)
{
 $queryStringdDefault = 'select count(t.tickettype_id)as total,t.tickettype_id,tt.name,tt.rank,tt.color
            from tickets t inner join tickettypes tt on t.tickettype_id = tt.id INNER join ticketstatuses ts
            on ts.id = t.ticket_status_id
            where t.user_id ='.
            $this->request->session()->read('Auth.User.id')
            .' and ts.value_order = 1
            GROUP by t.tickettype_id
            union
            select 0 as total,id,name,rank,color from tickettypes where id not in(
            select t.tickettype_id from tickets t,ticketstatuses ts where t.user_id = '.
            $this->request->session()->read('Auth.User.id')
            .' and ts.value_order=1 and ts.id = t.ticket_status_id
            )GROUP by id  order by rank ASC;';

 $queryStringGroup = 'select count(t.tickettype_id)as total,t.tickettype_id,tt.name,tt.rank,tt.color
            from tickets t inner join tickettypes tt on t.tickettype_id = tt.id INNER join ticketstatuses ts
            on ts.id = t.ticket_status_id
            where (t.user_id = '.
             $this->request->session()->read('Auth.User.id')
            .' or  t.group_id = '.
             $this->request->session()->read('Auth.User.group_id')
            .') 
            and ts.value_order = 1 
            GROUP by t.tickettype_id
            union
            select 0 as total,id,name,rank,color from tickettypes where id not in(
            select t.tickettype_id from tickets t,ticketstatuses ts where (t.user_id = '.
             $this->request->session()->read('Auth.User.id')
            .' or  t.group_id = '.
            $this->request->session()->read('Auth.User.group_id')
            .')
            and ts.value_order=1 and ts.id = t.ticket_status_id 
            )GROUP by id  order by rank ASC;';

 $queryStringAll = 'select count(t.tickettype_id)as total,t.tickettype_id,tt.name,tt.rank,tt.color
            from tickets t inner join tickettypes tt on t.tickettype_id = tt.id INNER join ticketstatuses ts
            on ts.id = t.ticket_status_id
            where  ts.value_order = 1
            GROUP by t.tickettype_id
            union
            select 0 as total,id,name,rank,color from tickettypes where id not in(
            select t.tickettype_id from tickets t,ticketstatuses ts where ts.value_order=1 and ts.id = t.ticket_status_id
            )GROUP by id  order by rank ASC;';

            $connection = ConnectionManager::get('default');
            
            switch ($typeFilter) {
                  case 'all':
                        $results = $connection->execute($queryStringAll)->fetchAll('assoc');
                        
                        break;
                  case 'group':
                        $results = $connection->execute($queryStringGroup)->fetchAll('assoc');
                        
                        break;
                  default:
                        $results = $connection->execute($queryStringdDefault)->fetchAll('assoc');
                        
                        break;
            }         
            
       return $results;
      }
}