#!/usr/bin/env bash

# Copies the database from the production site to the local site

source config.sh

COMMANDS="
  cd ${SERVER_DIR}
  mysqldump -u ${SERVER_DB_USER} -p'${SERVER_DB_PASS}' ${SERVER_DB} > ${SERVER_DIR}${DB_FILENAME}
  exit
"

ssh ${SERVER_USERNAME}@${SERVER} "${COMMANDS}"

# Use rsync to transfer the file from the server to localhost
rsync -rv -e 'ssh' ${SERVER_USERNAME}@${SERVER}:${SERVER_DIR}${DB_FILENAME} ${LOCAL_DIR}

# Do a find and replace on the domain name in the db export
sed -i.original "s|${SERVER_HOST}|${LOCAL_HOST}|g" ${LOCAL_DIR}${DB_FILENAME}

# Import .sql file into database
mysql -u "${LOCAL_DB_USER}" -p"${LOCAL_DB_PASS}" "${LOCAL_DB}" < "${LOCAL_DIR}${DB_FILENAME}"
