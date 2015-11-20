
## Wordpress-JBB, jensen-bear-bone "rawr"

A modified wordpress folder structure to make it easier to use with version control.
With this structure you can version control all themes, plugins and configuration files without wordpress-core and uploaded files.
The repo is also prepared with some minor security improvements. See .htaccess files for more information.

## How-to
Wordpress resides in ./src/wp/

Download and unzip a fresh install of wordpress into ./src/wp/core/.

Remove any wp-config.php / wp-config-sample.php files inside ./core.

The core-folder is ignored by git by default, and wont be version controlled.

## WP-Content
Is moved to ./src/wp/custom/.
Here you'll put themes, plugins, translations etc.

./custom/uploads/ is by default ignored by git and wont be version controlled.

## Configuration
All configuration is split up in different files for different working environments.

A modified wp-config.php resides in:
./src/wp/wp-config.php

The other configuration files works in a cascade fashion, in the following order:
* ./src/wp/config/dev-config.php
* ./src/wp/config/staging-config.php
* ./src/wp/config/production-config.php

If given file is available it reads the configuration from that file.
So make sure to never upload dev or staging configuration files to production servers.

## Good to know
When installing a fresh version of wordpress, manually enter the database credentials into the config file.
Do not use the web-guide.