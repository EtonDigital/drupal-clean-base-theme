Clean base theme For Drupal 7 - under development
==========

#Requirements:
    Installed Node.js
    NPM - node package manager
    Installed Gulp globaly
    
#Features:
    Minification
    Concatenation
    Analyze and validate code
    CSS compilation
    SSH execution - Drush
    Image optimimization
    Browser sync on every change

#Gulp modules:
    Gulp          - Gulp tasks runner
    BrowserSync      - Live CSS Reload & Browser Syncing
    Gulp Watch     - Watch, that actually is an endless stream
    Gulp Concat      - Concatenates files
    Gulp Jshint      - Static analysis tool for JavaScript
    Gulp UglifyJS   - Minify files with UglifyJS
    Gulp Jade      - Compile Jade templates
    Gulp ssh      - A handy command line interface for gulp
    Gulp Imagemin - Minify PNG, JPEG, GIF and SVG images
    Custom module - custom scripts
    
#File structure:

BUILD
    -.npm
        --Gulpfile.js
        --.node_modules
        --package.json
    -scalar
        --assets
            ---fonts
    -images
    -sass
        --scalar folder structure ...
        --theme.scss
        --print.scss
        --ie.scss
    -scripts
        --main.js
    -templates
        --page.jade
    -vendor
    -template.jade
    -subtheme

PUBLIC
    -scalar
    -assets
        --css
        --fonts
        --images
        --scripts
        --templates
            ---page.tpl.php
    -vendor
    -scalar.info
    -template.tpl.php
    -subtheme
        --assets
        --sass
        --subtheme.info
    -.Gitignore
    
#How to:
    1. Install Node.js. It has a simple installation for all OS’s that you can find on http://nodejs.org/
   
    2. Next open the Node.js command prompt and globally install Gulp.js with the next command:
    npm install -g gulp

    3. Navigate to .npm and type
    npm install

    4. Run following command:
    gulp serve
    
#Commands
    gulp serve
    gulp drush
    