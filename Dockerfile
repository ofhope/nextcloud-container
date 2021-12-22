FROM nextcloud:stable
ENV NEXTCLOUD_UPDATE=0

COPY mycloud.config.php ./config

RUN rm config/CAN_INSTALL

EXPOSE 80