<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class ExportCsvComponent extends Component
{
    public function export($data)
    {
        $this->response->download('export.csv');
        $data = $this->Tickets->find('all')->toArray();
        $_serialize = 'data';
        $this->set(compact('data', '_serialize'));
        $this->viewBuilder()->className('CsvView.Csv');
        return;
}
