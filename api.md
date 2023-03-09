## Table of contents
- [Behavioral\Iterator\Basket](#behavioral_iterator_basket)
- [Behavioral\Iterator\BasketInterface](#behavioral_iterator_basketinterface)
- [Behavioral\Iterator\Client](#behavioral_iterator_client)
- [Behavioral\Iterator\ClientInterface](#behavioral_iterator_clientinterface)
- [Behavioral\Iterator\Employee](#behavioral_iterator_employee)
- [Behavioral\Iterator\Item](#behavioral_iterator_item)
- [Behavioral\Iterator\ItemInterface](#behavioral_iterator_iteminterface)
- [Behavioral\Iterator\IteratorInterface](#behavioral_iterator_iteratorinterface)
<hr>

<a id="behavioral_iterator_basket"></a>

### Class: Behavioral\Iterator\Basket
##### implements [Behavioral\Iterator\BasketInterface](#behavioral_iterator_basketinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>addItem</strong>( Behavioral\Iterator\ItemInterface $item ): void</em><br>Adds an item to the cart<br>Добавляет товар в корзину|
|public|<em><strong>getGoods</strong>(): array</em><br>Gets all items from the cart<br>Получает все товары из корзины|


<a id="behavioral_iterator_basketinterface"></a>

### Class: Behavioral\Iterator\BasketInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>addItem</strong>( Behavioral\Iterator\ItemInterface $item ): void</em><br>|
|abstract public|<em><strong>getGoods</strong>(): array</em><br>|


<a id="behavioral_iterator_client"></a>

### Class: Behavioral\Iterator\Client
##### implements [Behavioral\Iterator\ClientInterface](#behavioral_iterator_clientinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>takeBasket</strong>( Behavioral\Iterator\Basket $bucket )</em><br>Adds a shopping cart<br>Добавляет корзину|
|public|<em><strong>addToTheBasket</strong>( Behavioral\Iterator\ItemInterface $item ): void</em><br>Adds an item to the cart<br>Добавляет товар в корзину|
|public|<em><strong>getGoodsFromTheBasket</strong>(): array</em><br>Gets all items from the cart<br>Получает все товары из корзины|


<a id="behavioral_iterator_clientinterface"></a>

### Class: Behavioral\Iterator\ClientInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>getGoodsFromTheBasket</strong>(): array</em><br>|


<a id="behavioral_iterator_employee"></a>

### Class: Behavioral\Iterator\Employee
##### implements [Behavioral\Iterator\IteratorInterface](#behavioral_iterator_iteratorinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>iterateItems</strong>( array $goods ): void</em><br>Iterates through cart items sequentially<br>Последовательно обходит элементы корзины |


<a id="behavioral_iterator_item"></a>

### Class: Behavioral\Iterator\Item
##### implements [Behavioral\Iterator\ItemInterface](#behavioral_iterator_iteminterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $name  int $price  string $description )</em><br>Sets the name, price and description of the product<br>Устанавливает наименование, цену и описание товара|
|public|<em><strong>printItem</strong>(): void</em><br>Displays product information<br>Выводит информацию о товаре|


<a id="behavioral_iterator_iteminterface"></a>

### Class: Behavioral\Iterator\ItemInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>__construct</strong>( string $name  int $price  string $description )</em><br>|


<a id="behavioral_iterator_iteratorinterface"></a>

### Class: Behavioral\Iterator\IteratorInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>iterateItems</strong>( array $goods ): void</em><br>|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
