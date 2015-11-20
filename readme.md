
## Wordpress-JBB, jensen-bear-bone "rawr"

Wordpress resides in /src/wp/

Download and unzip a fresh install of wordpress into ./src/wp/core/.
Remove any wp-config.php / wp-config-sample.php files.
The core-folder is by default ignored by git, and wont be version controlled.

## WP-Content
Is moved to ./src/wp/custom/.
Here you'll put themes, plugins, translations etc.

./custom/uploads/ is by default ignored by git and wont be version controlled.

## Configuration
All configuration is split up in different files for different environments.

A modified wp-config.php resides in:
./src/wp/wp-config.php

The other configuration files works in a cascade fashion, in the following order:
./src/wp/config/dev-config.php
./src/wp/config/staging-config.php
./src/wp/config/production-config.php

If given file is available it reads the configuration from that file.
So make sure to never upload dev or staging configuration files to production.