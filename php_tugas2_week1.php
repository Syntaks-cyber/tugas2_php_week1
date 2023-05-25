<?php

class User
{
    private $id;
    private $name;
    private $email;
    
    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
}

class Product
{
    private $id;
    private $name;
    private $price;
    
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getPrice()
    {
        return $this->price;
    }
}

class ShoppingCart
{
    private $items;
    
    public function __construct()
    {
        $this->items = [];
    }
    
    public function addItem($product, $quantity)
    {
        $this->items[] = [
            'product' => $product,
            'quantity' => $quantity
        ];
    }
    
    public function getTotalPrice()
    {
        $totalPrice = 0;
        
        foreach ($this->items as $item) {
            $totalPrice += $item['product']->getPrice() * $item['quantity'];
        }
        
        return $totalPrice;
    }
    
    public function getItems()
    {
        return $this->items;
    }
}

class Order
{
    private $id;
    private $user;
    private $shoppingCart;
    
    public function __construct($id, $user, $shoppingCart)
    {
        $this->id = $id;
        $this->user = $user;
        $this->shoppingCart = $shoppingCart;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getUser()
    {
        return $this->user;
    }
    
    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }
    
    public function getTotalPrice()
    {
        return $this->shoppingCart->getTotalPrice();
    }
}

class OrderManager
{
    private $orders;
    
    public function __construct()
    {
        $this->orders = [];
    }
    
    public function placeOrder($order)
    {
        $this->orders[] = $order;
    }
    
    public function getOrders()
    {
        return $this->orders;
    }
}

$user = new User(1, "Mochamad Iqbal Faiz", "miqbal.faiz@neuronworks.co.id");
$product1 = new Product(1, "Product 1", 10.99);
$product2 = new Product(2, "Product 2", 5.99);
$cart = new ShoppingCart();
$cart->addItem($product1, 2);
$cart->addItem($product2, 1);
$order = new Order(1, $user, $cart);

$orderManager = new OrderManager();
$orderManager->placeOrder($order);

$orders = $orderManager->getOrders();

foreach ($orders as $order) {
    echo "Order ID: " . $order->getId() . "\n";
    echo "User: " . $order->getUser()->getName() . "\n";
    }

echo "<br>Berikut ini User Neuron hingga selesai:<br>";
echo "Order ID: 2 User: Neuron 1 <br>";
echo "Order ID: 3 User: Neuron 2 <br>";
echo "Order ID: 4 User: Neuron 3 <br>";
echo "Order ID: 5 User: Neuron 4 <br>";
echo "Order ID: 6 User: Neuron 5 <br>";
echo "Order ID: 7 User: Neuron 6 <br>";
echo "Order ID: 8 User: Neuron 7 <br>";
echo "Order ID: 9 User: Neuron 8 <br>";
echo "Order ID: 10 User: Neuron 9 <br>";
echo "Order ID: 11 User: Neuron 10 <br>";
echo "Order ID: 12 User: Neuron 11 <br>";
echo "Order ID: 13 User: Neuron 12 <br>";
echo "Order ID: 14 User: Neuron 13 <br>";
echo "Order ID: 15 User: Neuron 14 <br>";
echo "Order ID: 16 User: Neuron 15 <br>";
echo "Order ID: 17 User: Neuron 16 <br>";
echo "Order ID: 18 User: Neuron 17 <br>";
echo "Order ID: 19 User: Neuron 18 <br>";
echo "Order ID: 20 User: Neuron 19 <br>";
echo "Order ID: 21 User: Neuron 20 <br>";
echo "Order ID: 22 User: Neuron 21 <br>";
echo "Order ID: 23 User: Neuron 22 <br>";
echo "Order ID: 24 User: Neuron 23 <br>";
echo "Order ID: 25 User: Neuron 24 <br>";
echo "Order ID: 26 User: Neuron 25 <br>";
echo "Order ID: 27 User: Neuron 26 <br>";
echo "Order ID: 28 User: Neuron 27 <br>";
echo "Order ID: 29 User: Neuron 28 <br>";
echo "Order ID: 30 User: Neuron 29 <br>";
echo "Order ID: 31 User: Neuron 30 <br>";
echo "Order ID: 32 User: Neuron 31 <br>";
echo "Order ID: 33 User: Neuron 32 <br>";
echo "Order ID: 34 User: Neuron 33 <br>";
echo "Order ID: 35 User: Neuron 34 <br>";
echo "Order ID: 36 User: Neuron 35 <br>";
echo "Order ID: 37 User: Neuron 36 <br>";
echo "Order ID: 38 User: Neuron 37 <br>";
echo "Order ID: 39 User: Neuron 38 <br>";
echo "Order ID: 40 User: Neuron 39 <br>";
echo "Order ID: 41 User: Neuron 40 <br>";
echo "Order ID: 42 User: Neuron 41 <br>";
echo "Order ID: 43 User: Neuron 42 <br>";
echo "Order ID: 44 User: Neuron 43 <br>";
echo "Order ID: 45 User: Neuron 44 <br>";
echo "Order ID: 46 User: Neuron 45 <br>";
echo "Order ID: 47 User: Neuron 46 <br>";
echo "Order ID: 48 User: Neuron 47 <br>";
echo "Order ID: 49 User: Neuron 48 <br>";
echo "Order ID: 50 User: Neuron 49 <br>";
echo "Order ID: 51 User: Neuron 50 <br>";
echo "Order ID: 52 User: Neuron 51 <br>";
echo "Order ID: 53 User: Neuron 52 <br>";
echo "Order ID: 54 User: Neuron 53 <br>";
echo "Order ID: 55 User: Neuron 54 <br>";
echo "Order ID: 56 User: Neuron 55 <br>";
echo "Order ID: 57 User: Neuron 56 <br>";
echo "Order ID: 58 User: Neuron 57 <br>";
echo "Order ID: 59 User: Neuron 58 <br>";
echo "Order ID: 60 User: Neuron 59 <br>";
echo "Order ID: 61 User: Neuron 60 <br>";
echo "Order ID: 62 User: Neuron 61 <br>";
echo "Order ID: 63 User: Neuron 62 <br>";
echo "Order ID: 64 User: Neuron 63 <br>";
echo "Order ID: 65 User: Neuron 64 <br>";
echo "Order ID: 66 User: Neuron 65 <br>";
echo "Order ID: 67 User: Neuron 66 <br>";
echo "Order ID: 68 User: Neuron 67 <br>";
echo "Order ID: 69 User: Neuron 68 <br>";
echo "Order ID: 70 User: Neuron 69 <br>";
echo "Order ID: 71 User: Neuron 70 <br>";
echo "Order ID: 72 User: Neuron 71 <br>";
echo "Order ID: 73 User: Neuron 72 <br>";
echo "Order ID: 74 User: Neuron 73 <br>";
echo "Order ID: 75 User: Neuron 74 <br>";
echo "Order ID: 76 User: Neuron 75 <br>";
echo "Order ID: 77 User: Neuron 76 <br>";
echo "Order ID: 78 User: Neuron 77 <br>";
echo "Order ID: 79 User: Neuron 78 <br>";
echo "Order ID: 80 User: Neuron 79 <br>";
echo "Order ID: 81 User: Neuron 80 <br>";
echo "Order ID: 82 User: Neuron 81 <br>";
echo "Order ID: 83 User: Neuron 82 <br>";
echo "Order ID: 84 User: Neuron 83 <br>";
echo "Order ID: 85 User: Neuron 84 <br>";
echo "Order ID: 86 User: Neuron 85 <br>";
echo "Order ID: 87 User: Neuron 86 <br>";
echo "Order ID: 88 User: Neuron 87 <br>";
echo "Order ID: 89 User: Neuron 88 <br>";
echo "Order ID: 90 User: Neuron 89 <br>";
echo "Order ID: 91 User: Neuron 90 <br>";
echo "Order ID: 92 User: Neuron 91 <br>";
echo "Order ID: 93 User: Neuron 92 <br>";
echo "Order ID: 94 User: Neuron 93 <br>";
echo "Order ID: 95 User: Neuron 94 <br>";
echo "Order ID: 96 User: Neuron 95 <br>";
echo "Order ID: 97 User: Neuron 96 <br>";
echo "Order ID: 98 User: Neuron 97 <br>";
echo "Order ID: 99 User: Neuron 98 <br>";
echo "Order ID: 100 User: Neuron 99 <br>";
echo "Order ID: 101 User: Neuron 100 <br>";
echo "Order ID: 102 User: Neuron 101 <br>";
echo "Order ID: 103 User: Neuron 102 <br>";
echo "Order ID: 104 User: Neuron 103 <br>";
echo "Order ID: 105 User: Neuron 104 <br>";
echo "Order ID: 106 User: Neuron 105 <br>";
echo "Order ID: 107 User: Neuron 106 <br>";
echo "Order ID: 108 User: Neuron 107 <br>";
echo "Order ID: 109 User: Neuron 108 <br>";
echo "Order ID: 110 User: Neuron 109 <br>";
echo "Order ID: 111 User: Neuron 110 <br>";
echo "Order ID: 112 User: Neuron 111 <br>";
echo "Order ID: 113 User: Neuron 112 <br>";
echo "Order ID: 114 User: Neuron 113 <br>";
echo "Order ID: 115 User: Neuron 114 <br>";
echo "Order ID: 116 User: Neuron 115 <br>";
echo "Order ID: 117 User: Neuron 116 <br>";
echo "Order ID: 118 User: Neuron 117 <br>";
echo "Order ID: 119 User: Neuron 118 <br>";
echo "Order ID: 120 User: Neuron 119 <br>";
echo "Order ID: 121 User: Neuron 120 <br>";
echo "Order ID: 122 User: Neuron 121 <br>";
echo "Order ID: 123 User: Neuron 122 <br>";
echo "Order ID: 124 User: Neuron 123 <br>";
echo "Order ID: 125 User: Neuron 124 <br>";
echo "Order ID: 126 User: Neuron 125 <br>";
echo "Order ID: 127 User: Neuron 126 <br>";

class ClassSatu
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class ClassDua
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class ClassTiga
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class ClassEmpat
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class ClassLima
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

$objectSatu = new ClassSatu("Order ID: 128 User: Neuron 127");
echo $objectSatu->getData() . "<br>";

$objectDua = new ClassDua("Order ID: 129 User: Neuron 128");
echo $objectDua->getData() . "<br>";

$objectTiga = new ClassTiga("Order ID: 130 User: Neuron 129");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new ClassEmpat("Order ID: 131 User: Neuron 130");
echo $objectEmpat->getData() . "<br>";

$objectLima = new ClassLima("Order ID: 132 User: Neuron 131");
echo $objectLima->getData() . "<br>";

class Class6
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class7
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class8
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class9
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class10
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class11
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class12
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class13
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class14
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class15
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class16
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class17
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class18
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class19
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class20
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class21
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class22
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class23
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class24
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class25
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class26
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class27
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class28
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class29
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class30
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class31
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class32
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class33
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class34
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class35
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class36
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class37
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class38
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class39
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class40
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class41
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class42
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class43
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class44
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class45
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class46
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class47
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class48
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class49
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class50
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class51
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class52
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class53
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class54
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class55
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class56
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class57
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class58
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class59
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class60
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class61
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class62
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class63
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class64
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class65
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class66
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class67
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class68
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class69
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class70
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class71
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class72
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class73
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class74
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class75
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class76
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class77
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class78
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class79
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class80
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class81
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class82
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class83
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class84
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class85
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class86
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class87
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class88
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class89
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class90
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class91
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class92
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class93
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class94
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class95
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class96
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class97
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class98
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class99
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class100
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class101
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class102
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class103
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class104
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class105
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class106
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class107
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class108
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class109
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class110
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class111
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class112
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class113
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class114
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Class115
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

$objectSatu = new Class6("Order ID: 133 User: Neuron 132");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class7("Order ID: 134 User: Neuron 133");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class8("Order ID: 135 User: Neuron 134");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class9("Order ID: 136 User: Neuron 135");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class10("Order ID: 137 User: Neuron 136");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class11("Order ID: 138 User: Neuron 137");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class12("Order ID: 139 User: Neuron 138");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class13("Order ID: 140 User: Neuron 139");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class14("Order ID: 141 User: Neuron 140");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class15("Order ID: 142 User: Neuron 141");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class16("Order ID: 143 User: Neuron 142");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class17("Order ID: 144 User: Neuron 143");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class18("Order ID: 145 User: Neuron 144");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class19("Order ID: 146 User: Neuron 145");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class20("Order ID: 147 User: Neuron 146");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class21("Order ID: 148 User: Neuron 147");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class22("Order ID: 149 User: Neuron 148");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class23("Order ID: 150 User: Neuron 149");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class24("Order ID: 151 User: Neuron 150");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class25("Order ID: 152 User: Neuron 151");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class26("Order ID: 153 User: Neuron 152");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class27("Order ID: 154 User: Neuron 153");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class28("Order ID: 155 User: Neuron 154");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class29("Order ID: 156 User: Neuron 155");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class30("Order ID: 157 User: Neuron 156");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class31("Order ID: 158 User: Neuron 157");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class32("Order ID: 159 User: Neuron 158");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class33("Order ID: 160 User: Neuron 159");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class34("Order ID: 161 User: Neuron 160");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class35("Order ID: 162 User: Neuron 161");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class36("Order ID: 163 User: Neuron 162");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class37("Order ID: 164 User: Neuron 163");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class38("Order ID: 165 User: Neuron 164");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class39("Order ID: 166 User: Neuron 165");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class40("Order ID: 167 User: Neuron 166");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class41("Order ID: 168 User: Neuron 167");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class42("Order ID: 169 User: Neuron 168");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class43("Order ID: 170 User: Neuron 169");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class44("Order ID: 171 User: Neuron 170");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class45("Order ID: 172 User: Neuron 171");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class46("Order ID: 173 User: Neuron 172");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class47("Order ID: 174 User: Neuron 173");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class48("Order ID: 175 User: Neuron 174");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class49("Order ID: 176 User: Neuron 175");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class50("Order ID: 177 User: Neuron 176");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class51("Order ID: 178 User: Neuron 177");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class52("Order ID: 179 User: Neuron 178");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class53("Order ID: 180 User: Neuron 179");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class54("Order ID: 181 User: Neuron 180");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class55("Order ID: 182 User: Neuron 181");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class56("Order ID: 183 User: Neuron 182");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class57("Order ID: 184 User: Neuron 183");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class58("Order ID: 185 User: Neuron 184");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class59("Order ID: 186 User: Neuron 185");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class60("Order ID: 187 User: Neuron 186");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class61("Order ID: 188 User: Neuron 187");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class62("Order ID: 189 User: Neuron 188");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class63("Order ID: 190 User: Neuron 189");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class64("Order ID: 191 User: Neuron 190");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class65("Order ID: 192 User: Neuron 191");
echo $objectLima->getData() . "<br>";

$objectLima = new Class76("Order ID: 197 User: Neuron 196");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class77("Order ID: 198 User: Neuron 197");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class78("Order ID: 199 User: Neuron 198");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class79("Order ID: 200 User: Neuron 199");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class80("Order ID: 201 User: Neuron 200");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class81("Order ID: 202 User: Neuron 201");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class82("Order ID: 203 User: Neuron 202");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class83("Order ID: 204 User: Neuron 203");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class84("Order ID: 205 User: Neuron 204");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class85("Order ID: 206 User: Neuron 205");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class86("Order ID: 207 User: Neuron 206");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class87("Order ID: 208 User: Neuron 207");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class88("Order ID: 209 User: Neuron 208");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class89("Order ID: 210 User: Neuron 209");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class90("Order ID: 211 User: Neuron 210");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class91("Order ID: 212 User: Neuron 211");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class92("Order ID: 213 User: Neuron 212");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class93("Order ID: 214 User: Neuron 213");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class94("Order ID: 215 User: Neuron 214");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class95("Order ID: 216 User: Neuron 215");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class96("Order ID: 217 User: Neuron 216");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class97("Order ID: 218 User: Neuron 217");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class98("Order ID: 219 User: Neuron 218");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class99("Order ID: 220 User: Neuron 219");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class100("Order ID: 221 User: Neuron 220");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class101("Order ID: 222 User: Neuron 221");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class102("Order ID: 223 User: Neuron 222");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class103("Order ID: 224 User: Neuron 223");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class104("Order ID: 225 User: Neuron 224");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class105("Order ID: 226 User: Neuron 225");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class106("Order ID: 227 User: Neuron 226");
echo $objectLima->getData() . "<br>";

$objectSatu = new Class107("Order ID: 228 User: Neuron 227");
echo $objectSatu->getData() . "<br>";

$objectDua = new Class108("Order ID: 229 User: Neuron 228");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class109("Order ID: 230 User: Neuron 229");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class110("Order ID: 231 User: Neuron 230");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class111("Order ID: 232 User: Neuron 231");
echo $objectLima->getData() . "<br>";

$objectDua = new Class112("Order ID: 233 User: Neuron 232");
echo $objectDua->getData() . "<br>";

$objectTiga = new Class113("Order ID: 234 User: Neuron 233");
echo $objectTiga->getData() . "<br>";

$objectEmpat = new Class114("Order ID: 235 User: Neuron 234");
echo $objectEmpat->getData() . "<br>";

$objectLima = new Class115("Order ID: 236 User: Neuron 235");
echo $objectLima->getData() . "<br>";


