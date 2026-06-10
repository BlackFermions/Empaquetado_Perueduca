#!/bin/bash
set -e

echo "[perueduca] Creando base de datos bdrecursos..."
mysql -u root <<-EOSQL
    CREATE DATABASE IF NOT EXISTS \`bdrecursos\`
        CHARACTER SET utf8
        COLLATE utf8_general_ci;
EOSQL

echo "[perueduca] Copiando tablas MyISAM..."
cp /bdrecursos-init/*.frm  /var/lib/mysql/bdrecursos/ 2>/dev/null || true
cp /bdrecursos-init/*.MYD  /var/lib/mysql/bdrecursos/ 2>/dev/null || true
cp /bdrecursos-init/*.MYI  /var/lib/mysql/bdrecursos/ 2>/dev/null || true
cp /bdrecursos-init/db.opt /var/lib/mysql/bdrecursos/ 2>/dev/null || true

chown -R mysql:mysql /var/lib/mysql/bdrecursos/
chmod 660 /var/lib/mysql/bdrecursos/*
chmod 700 /var/lib/mysql/bdrecursos/

echo "[perueduca] Base de datos lista."
