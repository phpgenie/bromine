# Bromine

A CMS package for FuelPHP.

## API

The methods that Bromine provides for the API to be used on the front-end of the site.

### Title

#### Get title

~~~
Bromine::title()
~~~

Returns the copy for the HTML Title tag as a string.

#### Set title

~~~
Bromine::title($string)
~~~

Appends the string to the end of the title, using `:` as a separator. Will prepend the title of the site at the beginning.

#### Other options

```Bromine::title($string, true)``` the second argument overwrites the entire title string.

```Bromine::title($string, false, ': ')``` the third argument sets the separator.
