#!/bin/sh

curl -X POST --header "Content-Type: application/json" http://ddev-qucosa-typo3find.ddev.site:8983/solr/qucosa/update?commit=true --data-binary "@solr-example-data.json"