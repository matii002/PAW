# Objects

Smarty allows access to PHP [objects](https://www.php.net/object) through
the templates.

> **Note**
>
> When you assign/register objects to templates, be sure that all
> properties and methods accessed from the template are for presentation
> purposes only. It is very easy to inject application logic through
> objects, and this leads to poor designs that are difficult to manage.
> See the Best Practices section of the Smarty website.

There are two ways to access them.

## Assign the object
You can assign objects to a template and access them much like any other assigned variable.

Example:
```php
<?php
// the object

class My_Object {
    public function meth1($params, $smarty_obj) {
        return 'this is my meth1';
    }
}

// We can also assign objects. assign_by_ref when possible.
$smarty->assign('myobj', new My_Object());

$smarty->display('index.tpl');
```

And here's how to access your object in `index.tpl`:

```smarty
{$myobj->meth1('foo',$bar)}
```



## Register the object
Registerd objects use a different template syntax. Also, a registered object 
can be restricted to certain methods or
properties. However, **a registered object cannot be looped over or
assigned in arrays of objects**, etc.

If security is enabled, no private methods or functions can be accessed
(beginning with '_'). If a method and property of the same name exist,
the method will be used.

You can restrict the methods and properties that can be accessed by
listing them in an array as the third registration parameter.

By default, parameters passed to objects through the templates are
passed the same way [custom tags](../../designers/language-custom-functions/index.md) get
them. An associative array is passed as the first parameter, and the
smarty object as the second. If you want the parameters passed one at a
time for each argument like traditional object parameter passing, set
the fourth registration parameter to FALSE.

The optional fifth parameter has only effect with `format` being TRUE
and contains a list of methods that should be treated as blocks. That
means these methods have a closing tag in the template
(`{foobar->meth2}...{/foobar->meth2}`) and the parameters to the methods
have the same synopsis as the parameters for
[`block tags`](../extending/block-tags.md): They get the four
parameters `$params`, `$content`, `$smarty` and `&$repeat` and they also
behave like block tags.

```php
<?php
// the object

class My_Object {
    function meth1($params, $smarty_obj) {
        return 'this is my meth1';
    }
}

$myobj = new My_Object;

// registering the object
$smarty->registerObject('foobar', $myobj);

// if we want to restrict access to certain methods or properties, list them
$smarty->registerObject('foobar', $myobj, array('meth1','meth2','prop1'));

// if you want to use the traditional object parameter format, pass a boolean of false
$smarty->registerObject('foobar', $myobj, null, false);

$smarty->display('index.tpl');
```

And here's how to access your objects in `index.tpl`:

```smarty
{* access our registered object *}
{foobar->meth1 p1='foo' p2=$bar}

{* you can also assign the output *}
{foobar->meth1 p1='foo' p2=$bar assign='output'}
the output was {$output}
```
