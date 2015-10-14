# Silex-gulp-skeleton
Silex skeleton + gulp + livereload


# Installation
#### Step 1
```sh
$ git init
$ git remote add master git@github.com:Maxlab/silex-gulp-skeleton.git
$ git remote -v
$ git fetch master
$ git checkout master
$ git remote remove master
$ cp ./app/config.distr.php ./app/config.php

# OR one line command
$ git init && git remote add master git@github.com:Maxlab/silex-gulp-skeleton.git && git remote -v && git fetch master && git checkout master && git remote remove master && cp ./app/config.distr.php ./app/config.php
```
#### Step 2
```sh
$ composer install
$ sudo npm install
$ find . -type d -exec sudo chmod 755 {} \;
$ find . -type f -exec sudo chmod 644 {} \;
$ bower install
$ sudo gulp

# OR one line command
$ composer install && sudo npm install && bower install && find . -type d -exec sudo chmod 755 {} \; && find . -type f -exec sudo chmod 644 {} \; && gulp
```


# The end
Enjoy)
