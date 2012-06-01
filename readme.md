# Bromine

A CMS package for FuelPHP.

## API

The methods that Bromine provides for the API to be used on the front-end of the site.

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
Bromine::append($title, ' &middot; ');
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
