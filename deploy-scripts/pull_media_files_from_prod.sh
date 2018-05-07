#!/usr/bin/env bash

source config.sh

# Media files
# Use rsync to transfer all uploaded files from the server to the local uploads directory
# A trailing / on a source name means "copy the contents of this directory". Without a trailing slash it means "copy the directory".
rsync -rv -e 'ssh' "${SERVER_USERNAME}@${SERVER}:${SERVER_UPLOADS_DIR}" "${LOCAL_UPLOADS_DIR}"
