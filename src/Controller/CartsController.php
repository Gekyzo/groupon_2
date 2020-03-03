<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Carts Controller
 *
 *
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CartsController extends AppController
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $session;

    /**
     * Called before the controller action. You can use this method to configure and customize components
     * or perform logic that needs to happen before each controller action.
     *
     * @param \Cake\Event\EventInterface $event An Event instance
     * @return \Cake\Http\Response|null|void
     * @link https://book.cakephp.org/4/en/controllers.html#request-life-cycle-callbacks
     */
    public function beforeFilter(EventInterface $event)
    {
        $this->session = $this->request->getSession();
        $this->loadModel('Promotions');
    }

    /**
     * Añade un artículo al carrito.
     *
     * @param string $productID
     * @return \Cake\Http\Response
     */
    public function add($productID = null)
    {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $allProducts = $this->session->read('cart');
            if (null != $allProducts) {
                if (array_key_exists($productID, $allProducts)) {
                    $allProducts[$productID]++;
                } else {
                    $allProducts[$productID] = 1;
                }
            } else {
                $allProducts[$productID] = 1;
            }
            $this->session->write('cart', $allProducts);
        }

        $count = $this->getCount();
        $productPrice = $this->Promotions->get($productID)->price_discount;

        $response = $this->response;
        $response = $response->withType('application/json')
            ->withStringBody(json_encode(['count' => $count, 'price' => $productPrice]));

        return $response;
    }

    /**
     * Devuelve el número de productos en el carrito.
     *
     * @return int
     */
    public function getCount(): int
    {
        $allProducts = $this->session->read('cart') ?? [];

        if (count($allProducts) < 1) {
            return 0;
        }

        $count = 0;

        foreach ($allProducts as $product) {
            $count = $count + $product;
        }

        return $count;
    }
}
