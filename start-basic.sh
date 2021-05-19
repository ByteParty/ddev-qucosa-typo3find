#!/bin/sh

# start ddev, create project, build container
ddev start

# install all packages via composer
ddev composer install

# import basic database
ddev import-db -f qucosa-find-2021-05-19.sql.gz

# reindex all documents (DB -> Solr)
# tbd

