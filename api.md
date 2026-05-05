## Table of contents
- [Behavioral\Iterator\Basket](#behavioral_iterator_basket)
- [Behavioral\Iterator\Client](#behavioral_iterator_client)
- [Behavioral\Iterator\ClientInterface](#behavioral_iterator_clientinterface)
- [Behavioral\Iterator\Employee](#behavioral_iterator_employee)
- [Behavioral\Iterator\EmployeeInterface](#behavioral_iterator_employeeinterface)
- [Behavioral\Iterator\Item](#behavioral_iterator_item)
<hr>

<a id="behavioral_iterator_basket"></a>

### Class: Behavioral\Iterator\Basket
| Visibility | Function |
|:-----------|:---------|
| public | `add(Behavioral\Iterator\Item $item): void`<br> |
| public | `getIterator(): Traversable`<br> |


<a id="behavioral_iterator_client"></a>

### Class: Behavioral\Iterator\Client
| Visibility | Function |
|:-----------|:---------|
| public | `takeBasket(Behavioral\Iterator\Basket $basket): void`<br> |
| public | `addToTheBasket(Behavioral\Iterator\Item $item): void`<br> |
| public | `getBasket(): Behavioral\Iterator\Basket`<br> |


<a id="behavioral_iterator_clientinterface"></a>

### Class: Behavioral\Iterator\ClientInterface
| Visibility | Function |
|:-----------|:---------|
| abstract public | `takeBasket(Behavioral\Iterator\Basket $basket): void`<br> |
| abstract public | `addToTheBasket(Behavioral\Iterator\Item $item): void`<br> |
| abstract public | `getBasket(): Behavioral\Iterator\Basket`<br> |


<a id="behavioral_iterator_employee"></a>

### Class: Behavioral\Iterator\Employee
| Visibility | Function |
|:-----------|:---------|
| public | `iterateItems(Traversable $basket): void`<br> |


<a id="behavioral_iterator_employeeinterface"></a>

### Class: Behavioral\Iterator\EmployeeInterface
| Visibility | Function |
|:-----------|:---------|
| abstract public | `iterateItems(Traversable $basket): void`<br> |


<a id="behavioral_iterator_item"></a>

### Class: Behavioral\Iterator\Item
| Visibility | Function |
|:-----------|:---------|
| public | `__construct(string $name, int $price, string $description)`<br> |
| public | `getName(): string`<br> |
| public | `getPrice(): int`<br> |
| public | `getDescription(): string`<br> |
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
