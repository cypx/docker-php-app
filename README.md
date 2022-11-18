# docker-php-app

Minimal php app running on a docker-compose stack for educationnal purpose.

To use it, copy `.env.sample` to `.env`, customize your `.env` if you care and fire up docker-compose.

```bash
cp .env.sample .env
docker-compose up -d
```

Now, you could use the following url

- php app <http://127.0.0.1:8082/>
- phpmyadmin <http://127.0.0.1:8086/>

And for example you could try to stop mysql and check the result

```bash
docker-compose stop mysql
```
