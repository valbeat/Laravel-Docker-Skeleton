FROM nginx:1.13.5-alpine

# ルートディレクトリ作成
RUN mkdir -p /var/www/html
RUN chmod 755 -R /var/www/html

# SSL自己証明書の作成
RUN apk --update add openssl
RUN openssl genrsa 2048 > server.key
RUN openssl req -new -key server.key -subj "/C=JP/ST=Tokyo/L=Meguro-ku/O=Example Inc./OU=web/CN=localhost" > server.csr
RUN openssl x509 -in server.csr -days 365 -req -signkey server.key > server.crt
RUN cp server.crt /etc/nginx/server.crt
RUN cp server.key /etc/nginx/server.key
RUN chmod 400 /etc/nginx/server.key
