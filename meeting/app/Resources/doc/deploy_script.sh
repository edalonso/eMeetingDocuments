#!/bin/bash 

# ------------------------------------------------------- 
# Parametros
# ------------------------------------------------------- 

SRC_DIR="/var/www"
DEST_DIR="meeting"
SVN_SERVER_NAME="http://source.media.uvigo.es:443"
SVN_PATH="cmar/MeetingApp/trunk/"

MEETING_HOST="meeting.campusdomar.es"
ADMIN_HOST="admin.campusdomar.es"

# ------------------------------------------------------- 
# EXEC
# ------------------------------------------------------- 

rm -rf ${SRC_DIR}/${DEST_DIR}
svn export ${SVN_SERVER_NAME}/svn/${SVN_PATH} ${SRC_DIR}/${DEST_DIR}
rm -rf ${SRC_DIR}/${DEST_DIR}/build.xml
rm -rf ${SRC_DIR}/${DEST_DIR}/build
rm -rf ${SRC_DIR}/${DEST_DIR}/build.properties
rm -rf ${SRC_DIR}/${DEST_DIR}/phpunit.xml
rm -rf ${SRC_DIR}/${DEST_DIR}/test/

sed -i "s/localhost\/directorio/${MEETING_HOST}/g" ${SRC_DIR}/${DEST_DIR}/config/config.ini
sed -i "s/localhost\/webshare/${ADMIN_HOST}\/webshare/g" ${SRC_DIR}/${DEST_DIR}/config/config.ini

chown -R apache:apache ${SRC_DIR}/${DEST_DIR}

