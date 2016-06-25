FROM nginx

COPY term.ws.conf /etc/nginx/conf.d/term.ws.conf

COPY html /var/www/html