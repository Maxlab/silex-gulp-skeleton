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
$ cp /app/config.dist.php /app/config.php

# OR one line command
$ git init && git remote add master git@github.com:Maxlab/silex-gulp-skeleton.git && git remote -v && git fetch master && git checkout master && git remote remove master && cp /app/config.dist.php /app/config.php
```
#### Step 2
```sh
$ sudo composer install
$ sudo npm install
$ sudo bower install - this step is optional
$ gulp

# OR one line command
$ sudo composer install && sudo npm install && bower install && sudo gulp
```

# The end
Enjoy)
