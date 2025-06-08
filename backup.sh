#!/bin/bash
# MySQL backup script for Food Blog Today
# Author: Yuxing Zhang

DB_NAME="foodblog"
DB_USER="root"
DB_PASS="zyx@ZY19960323"
BACKUP_DIR="/var/backups"
DATE=$(date +%Y%m%d_%H%M%S)
FILE_NAME="${DB_NAME}_${DATE}.sql"

echo "Starting database backup..."
sudo mysqldump -u $DB_USER -p$DB_PASS $DB_NAME > $BACKUP_DIR/$FILE_NAME

if [ $? -eq 0 ]; then
  echo "✅ Backup completed successfully! File: $BACKUP_DIR/$FILE_NAME"
else
  echo "❌ Backup failed."
fi
