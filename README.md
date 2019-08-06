# WEDDING

## HOW TO RUN

1. lunch docker container 
```
dcoker-compose up -d
```

2. composer install

```
dcoker-compose exec app compose install
```

3. copy .env and generate key

```
cp .env.example .env
php artisan key:generate
```

4. migrate database

```
docker-compose exec app php artisan migrate --seed
```

5. make storage:link

```
docker-compose exec app php artisan storage:link
```

6. access to `https://localhost/`


note: using docker container


## HOW TO CREATE USER

```
docker-compose exec app php artisan tink

$u = new User
$u->name = "hoge"
$u->email = "hoge@example.com"
$u->password = bcrypt("passowrd")
$u->save()
```
