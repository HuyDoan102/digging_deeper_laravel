#!/bin/sh

DOCUMENT_ROOT="/var/www/html"

echo $DOCUMENT_ROOT

chmod -R 777 "$DOCUMENT_ROOT/storage/logs/"
chmod -R 777 "$DOCUMENT_ROOT/storage/framework/"
chmod -R 777 "$DOCUMENT_ROOT/bootstrap/cache/"

/my_init
