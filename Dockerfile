FROM nextcloud:stable
ENV NEXTCLOUD_UPDATE=0

COPY mycloud.config.php ./config

# RUN rmdir /var/www/html/config/CAN_INSTALL

EXPOSE 80