FROM hyperf/hyperf:8.2-alpine-vedge-swoole
ENV COMPOSER_ALLOW_SUPERUSER=1
VOLUME ["/app"] 
COPY ./ /app
WORKDIR "/app"

#CMD composer install
ENTRYPOINT "./entrypoint.sh"
