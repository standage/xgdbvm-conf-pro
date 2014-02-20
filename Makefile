help:		
		@- echo "Available targets: restart clean"

restart:	clean
		cat model/*.sql fixtures/*.sql | sqlite3 conf.db
		
clean:		
		rm -f conf.db
