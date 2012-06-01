# Bromine

A CMS [module](http://docs.fuelphp.com/general/modules.html) for FuelPHP.

## Public API

The methods that Bromine provides for the API to be used on the front-end of the site in public controllers.

### Title

Prepends the site’s name and anything added.

#### get()

Returns the the title as a string.

~~~
<head>
	<title><?php echo Bromine\Title::get(); ?></title>
</head>
~~~

#### append($string, $separator = ': ')

Appends the string to the end of the title, using `:` as a separator.

~~~
$title = $article->title;
Bromine\Title::append($title, ' &middot; ');
~~~

#### set($string, $title_overwrite = false)

Overwrites the existing title, but includes the site title unless `$title_overwrite` is set to true.

~~~
$title = $article->title;
Bromine\Title::set($title);
// Site Name: The leaves are falling

$title = 'Article: '.$article->title;
Bromine\Title::set($title, true);
// Article: The leaves are falling
~~~

### Menu

Returns a View object of the model or an array of the menu. The menu is stored in a table.

#### view($parent = 0, $active = 0)

Returns a View object of the view, found in views/menu.php. Optionally ask for only the children of a parent. Second parameter is the ID of the active page, which will set the `<li>` to `<li class="active">` for that entity.

~~~
$this-template->menu = Bromine\Menu::view();

// Or with an active page ‘active’
$this-template->menu = Bromine\Menu::view($page->parent, $page->id);
~~~

#### get($parent = 0)

Returns a multidimensional array of the menu. Optionally ask for only the children of a parent. 

~~~
$this->template->menu = Bromine\Menu::get();
~~~
