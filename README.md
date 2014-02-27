This wordpress installation is being tracked in git.  It was set up using the directions here:
http://davidwinter.me/articles/2012/04/09/install-and-manage-wordpress-with-git/

DEPLOY
=========
```shell
git clone git@github.com:overflowproject/overflowproject.org.git
git submodule init
git submodule update
```

CONFIGURE
=========
http://wordpress.stackexchange.com/questions/52682/best-practice-for-versioning-wp-config-php

All configuration goes into (local|dev|production)-config.php.