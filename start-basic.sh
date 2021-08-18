#!/bin/sh

# start ddev, create project, build container
ddev start

# install all packages via composer
ddev composer install

# import basic database
ddev import-db -f qucosa-db-xima-2021-08-18.sql.gz

# load sample data into Solr
./solr-import-data.sh
