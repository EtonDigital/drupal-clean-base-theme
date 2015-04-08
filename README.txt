CSS - JS
--------

 * All style sheets/JavaScripts defined in the parent theme will be inherited, as long as you declare at least one stylesheet in your sub-theme's .info file.

 * Overriding inherited style sheets/JavaScript:
 * Specify a style sheet/JavaScript with the same filename in the sub-theme and add it to sub-theme's .info file.
 * For instance, to override style.css/script.js inherited from a parent theme, add the following line to your sub-theme's .info file:
 * stylesheets[all][] = style.css / scripts[] = script.js

CSS - Guide
-----------

 All folder have bundle file for including all library from this areas.

 Clean_base theme contains:
   1 core
   2 overide
   3 requre
   4 sprite
   5 theme

 1. Core is small library of css.
     - api_reset for drupal, base style.
     - minimal is css library with minimum default element styling
     - vendor is reserved for including third-party css library as some bootstrap element or js plugin css ...
 2. Overide is last loaded css file for overide existing selector and a declaration block
 3. Require is reserved for parameters as variable, mixin ... and important it's not for adding style !!!
     - extend
     - mixin
     - vars
 4. Sprite for image sprites
 5. Theme is reserved for style

JS - Guide
----------

CSS - How to exclude core css?
------------------------------

 * Uncomment the clean_base_css_alter() function it the base theme in template.php,
   and after that uncomment or add a line of css which you want to exclude.

CSS - How to disable responsive?
--------------------------------
   
 * test commit
 * In Grid settings section select 'col-xs' as Grid class. That is all you need to do.
