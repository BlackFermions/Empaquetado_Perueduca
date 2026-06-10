FROM mysql:5.7

COPY server/PeruEduca/dbdir/bdrecursos /bdrecursos-init/

COPY docker/db/init.sh /docker-entrypoint-initdb.d/01-init.sh
RUN chmod +x /docker-entrypoint-initdb.d/01-init.sh
