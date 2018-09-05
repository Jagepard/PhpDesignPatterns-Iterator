## Table of contents

- [\Behavioral\Iterator\Iterator](#class-behavioraliteratoriterator)
- [\Behavioral\Iterator\Item](#class-behavioraliteratoritem)
- [\Behavioral\Iterator\IteratorInterface (interface)](#interface-behavioraliteratoriteratorinterface)
- [\Behavioral\Iterator\Client](#class-behavioraliteratorclient)
- [\Behavioral\Iterator\Bucket](#class-behavioraliteratorbucket)

<hr />

### Class: \Behavioral\Iterator\Iterator

> Class Iterator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Iterator\Bucket](#class-behavioraliteratorbucket)</em> <strong>$bucket</strong>)</strong> : <em>void</em><br /><em>Iterator constructor.</em> |
| public | <strong>iterateItems()</strong> : <em>void</em> |

*This class implements [\Behavioral\Iterator\IteratorInterface](#interface-behavioraliteratoriteratorinterface)*

<hr />

### Class: \Behavioral\Iterator\Item

> Class Item

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$name</strong>, <em>mixed</em> <strong>$price</strong>, <em>string</em> <strong>$description=`''`</strong>)</strong> : <em>void</em><br /><em>Item constructor.</em> |
| public | <strong>printItem()</strong> : <em>void</em> |

<hr />

### Interface: \Behavioral\Iterator\IteratorInterface

> Interface InterfaceIterator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>iterateItems()</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Iterator\Client

> Class Client

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Iterator\Bucket](#class-behavioraliteratorbucket)</em> <strong>$bucket</strong>)</strong> : <em>void</em><br /><em>Client constructor.</em> |
| public | <strong>getBucket()</strong> : <em>[\Behavioral\Iterator\Bucket](#class-behavioraliteratorbucket)</em> |

<hr />

### Class: \Behavioral\Iterator\Bucket

> Class Bucket

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addItem(</strong><em>[\Behavioral\Iterator\Item](#class-behavioraliteratoritem)</em> <strong>$item</strong>)</strong> : <em>void</em> |
| public | <strong>getItems()</strong> : <em>array</em> |

