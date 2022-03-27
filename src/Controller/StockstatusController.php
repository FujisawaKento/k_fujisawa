<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class StockstatusController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
     public function index()
     {
        $this->set('stocks', $this->Stockstatus->find('all'));
    }

    public function view($id)
    {
        $stock = $this->Stockstatus->get($id);
        $this->set(compact('stock'));
    }

    public function add()
    {
        $stock = $this->Stockstatus->newEntity();
        if ($this->request->is('post')) {
            $stock = $this->Stockstatus->patchEntity($stock, $this->request->getData());
            //商品金額(amount)を登録
            $amount = $this->Stockstatus->find()->where(['item' => $stock['item']])->first();
            $stock['amount'] = $amount['amount'];
            if ($this->Stockstatus->save($stock)) {
                $this->Flash->success(__('The stock has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
    }
    public function edit($id)
        {
        $stock = $this->Stockstatus->findById($id)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Stockstatus->patchEntity($stock, $this->request->getData());
            if ($this->Stockstatus->save($stock)) {
                    $this->Flash->success(__('Your stock has been updated.'));
                    return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your stock.'));
        }
        $this->set('stock', $stock);
    }
}
