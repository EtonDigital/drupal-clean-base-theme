CSS - JS
--------

 * All style sheets/JavaScripts defined in the parent theme will be inherited, as long as you declare at least one stylesheet in your sub-theme's .info file.

 * Overriding inherited style sheets/JavaScript:
 * Specify a style sheet/JavaScript with the same filename in the sub-theme and add it to sub-theme's .info file.
 * For instance, to override style.css/script.js inherited from a parent theme, add the following line to your sub-theme's .info file:
 * stylesheets[all][] = style.css / scripts[] = script.js


CSS - How to exclude core css?
------------------------------

 * Uncomment the clean_base_css_alter() function it the base theme in template.php,
   and after that uncomment or add a line of css which you want to exclude.