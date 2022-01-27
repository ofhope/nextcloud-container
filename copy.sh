#!/bin/sh
set -eu

rsync -rlDog --chown www-data:root --delete --exclude-from=/upgrade.exclude /usr/src/nextcloud/ /var/www/html/
for dir in data custom_apps themes; do
  rsync -rlDog --chown www-data:root --include "/$dir/" --exclude '/*' /usr/src/nextcloud/ /var/www/html/;
done
rsync -rlDog --chown www-data:root --include '/version.php' --exclude '/*' /usr/src/nextcloud/ /var/www/html/