# Comment out lines 2-3 if not using git to sync database.
# echo 'Getting latest updates from git...'; 
# git pull

# Update lines 7-8 with your database name, user name, and password
echo 'Updating our MySQL database...';
mysql --user='name' --password='pass' serverDataBase < ./local_data.sql
# mysql --user='admin' --password='admin' wp_biotienda < ./update.sql

echo 'Update complete!';