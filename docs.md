## Table of contents

- [\Behavioral\Iterator\Iterator](#class-behavioraliteratoriterator)
- [\Behavioral\Iterator\Item](#class-behavioraliteratoritem)
- [\Behavioral\Iterator\IteratorInterface (interface)](#interface-behavioraliteratoriteratorinterface)
- [\Behavioral\Iterator\ClientInterface (interface)](#interface-behavioraliteratorclientinterface)
- [\Behavioral\Iterator\ItemInterface (interface)](#interface-behavioraliteratoriteminterface)
- [\Behavioral\Iterator\Client](#class-behavioraliteratorclient)

<hr />

### Class: \Behavioral\Iterator\Iterator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$bucket</strong>)</strong> : <em>void</em><br /><em>Iterator constructor.</em> |
| public | <strong>iterateItems()</strong> : <em>void</em> |

*This class implements [\Behavioral\Iterator\IteratorInterface](#interface-behavioraliteratoriteratorinterface)*

<hr />

### Class: \Behavioral\Iterator\Item

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>, <em>int/\integer</em> <strong>$price</strong>, <em>\string</em> <strong>$description=`''`</strong>)</strong> : <em>void</em><br /><em>Item constructor.</em> |
| public | <strong>printItem()</strong> : <em>void</em> |

*This class implements [\Behavioral\Iterator\ItemInterface](#interface-behavioraliteratoriteminterface)*

<hr />

### Interface: \Behavioral\Iterator\IteratorInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>iterateItems()</strong> : <em>void</em> |

<hr />

### Interface: \Behavioral\Iterator\ClientInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBucket()</strong> : <em>array</em> |

<hr />

### Interface: \Behavioral\Iterator\ItemInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>, <em>int/\integer</em> <strong>$price</strong>, <em>\string</em> <strong>$description=`''`</strong>)</strong> : <em>void</em><br /><em>Item constructor.</em> |
| public | <strong>printItem()</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Iterator\Client

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addItemToTheBucket(</strong><em>[\Behavioral\Iterator\ItemInterface](#interface-behavioraliteratoriteminterface)</em> <strong>$item</strong>)</strong> : <em>void</em> |
| public | <strong>getBucket()</strong> : <em>array</em> |

*This class implements [\Behavioral\Iterator\ClientInterface](#interface-behavioraliteratorclientinterface)*

