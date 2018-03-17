FROM nginx:1.13.5-alpine

# ルートディレクトリ作成
RUN mkdir -p /var/www/html \
&& chmod 755 -R /var/www/html

# SSL自己証明書の作成
RUN apk --update add openssl \
&& openssl genrsa 2048 > server.key \
&& openssl req -new -key server.key -subj "/C=JP/ST=Tokyo/L=Meguro-ku/O=Example Inc./OU=web/CN=localhost" > server.csr \
&& openssl x509 -in server.csr -days 365 -req -signkey server.key > server.crt \
&& cp server.crt /etc/nginx/server.crt \
&& cp server.key /etc/nginx/server.key \
&& chmod 400 /etc/nginx/server.key
