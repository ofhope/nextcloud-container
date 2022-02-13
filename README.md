# Nextcloud on Dokku

```bash
dokku apps:create cloud
dokku postgres:create nextclouddb
dokku postgres:expose nextclouddb 5432
dokku postgres:link nextclouddb cloud
dokku letsencrypt cloud
dokku nginx:set cloud client-max-body-size 50m
```

```bash
dokku config:set --no-restart cloud \
  POSTGRES_DB=**** \
  POSTGRES_USER=**** \
  POSTGRES_PASSWORD=**** \
  POSTGRES_HOST=**** \
  NEXTCLOUD_ADMIN_USER=**** \
  NEXTCLOUD_ADMIN_PASSWORD=**** \
  NEXTCLOUD_TRUSTED_DOMAINS=**** \
  OBJECTSTORE_S3_HOST=**** \
  OBJECTSTORE_S3_BUCKET=**** \
  OBJECTSTORE_S3_KEY=**** \
  OBJECTSTORE_S3_SECRET=**** \
  OBJECTSTORE_S3_PORT=**** \
  OBJECTSTORE_S3_REGION=****
```

Add your Dokku remote

```bash
git remote add dokku dokku@YOUR_IP:cloud
```

Deploy a new version

```bash
git push dokku master
```

## Build and run locally

```bash
docker build -t nextclouddokku .
docker run --user www-data  --name nxtcld -p 8081:80 --env-file .env --rm -it nextclouddokku
# jump into the container
docker exec -it nxtcld bash
```

## occ

### Example installation

```bash
./occ maintenance:install -n --admin-user "$NEXTCLOUD_ADMIN_USER" --admin-pass "$NEXTCLOUD_ADMIN_PASSWORD" --database pgsql --database-name "$POSTGRES_DB" --database-user "$POSTGRES_USER" --database-pass "$POSTGRES_PASSWORD" --database-host "$POSTGRES_HOST"
```

### Set admin user

```bash
./occ maintenance:install --admin-user "admin-user-example" --admin-pass "password-please-change"
./occ user:add --display-name="user-example" --group="users" --group="db-admins" example-user
```
