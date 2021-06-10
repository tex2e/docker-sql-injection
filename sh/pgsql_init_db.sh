#!/bin/sh

ls -1 /tmp/initdb.d/*.sql | while read file; do
  psql -U postgres < $file
done
