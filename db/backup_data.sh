# Update line 3 with your database name, user name, and password
echo 'Exporting database from MySQL...';
mysqldump --user='//name' --password='pass' serverDataBase > ./data.sql
echo '---------------> Export complete!! <---------------';
