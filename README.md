# ddev-qucosa-typo3find
Sample DDev Development System for the Qucosa-Frontend using TYPO3-find


## Data from SLUB KXP-Index

The following fields are imported from the SLUB kxp index:

fl=id,url,title,spellingShingle,topic,author,autor_facet,format,imprint,language,spelling,publisher,record_id,source_id,format_nrw,recordtype,title_full,title_full_unstemmed,title_sort,author_sort,facet_avail,format_de14,format_de15,format_finc,institution,publishDate,title_short,topic_facet,access_facet,mega_collection,publishDateSort,finc_class_facet,geogr_code,last_indexed,geogr_code_person,author_browse,publisherStr,topic_browse,hierarchy_top_id,urn,series,publishPlace,is_hierarchy_title,is_hierarchy_id,series2,description,rvk_facet,title_alt,author_corporate_role,imprint_str_mv

fq=source_id:22
fq=mega_collection:("Qucosa SLUB Dresden")

Example Solr query:

http://sdvidx-dev.slub-dresden.de:8983/solr/slub-kxp/select?q=*%3A*&fq=source_id%3A22&fq=mega_collection%3A(%22Qucosa+SLUB+Dresden%22)&rows=100&fl=id%2Curl%2Ctitle%2CspellingShingle%2Ctopic%2Cauthor%2Cautor_facet%2Cformat%2Cimprint%2Clanguage%2Cspelling%2Cpublisher%2Crecord_id%2Csource_id%2Cformat_nrw%2Crecordtype%2Ctitle_full%2Ctitle_full_unstemmed%2Ctitle_sort%2Cauthor_sort%2Cfacet_avail%2Cformat_de14%2Cformat_de15%2Cformat_finc%2Cinstitution%2CpublishDate%2Ctitle_short%2Ctopic_facet%2Caccess_facet%2Cmega_collection%2CpublishDateSort%2Cfinc_class_facet%2Cgeogr_code%2Clast_indexed%2Cgeogr_code_person%2Cauthor_browse%2CpublisherStr%2Ctopic_browse%2Chierarchy_top_id%2Curn%2Cseries%2CpublishPlace%2Cis_hierarchy_title%2Cis_hierarchy_id%2Cseries2%2Cdescription%2Crvk_facet%2Ctitle_alt%2Cauthor_corporate_role%2Cimprint_str_mv&wt=json&indent=true&omitHeader=true


## Frontend

https://qucosa.ddev.site/

## Login

https://qucosa.ddev.site/typo3

User: admin

Password: admin
