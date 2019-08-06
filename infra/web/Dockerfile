FROM nginx:latest

RUN useradd -m -s /bin/bash -u 500 mush

# set timezone
RUN cp /etc/localtime /etc/localtime.org && \
    ln -sf  /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

# nginx.conf
ADD ./nginx.conf /etc/nginx/nginx.conf

ADD ./vhost.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www
