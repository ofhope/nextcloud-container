FROM nextcloud:23.0.0-apache
ENV NEXTCLOUD_UPDATE=0

COPY --chown=root:root entrypoint.sh /entrypoint.sh
COPY --chown=root:root copy.sh /copy.sh

# Copy src file into apache dir
RUN /copy.sh

COPY  --chown=www-data:root config/ /var/www/html/config/
COPY  --chown=www-data:root .ocdata /var/www/html/data/

EXPOSE 80