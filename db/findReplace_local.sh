# Update line 3 with your database name, user name, and password
echo 'Changing database to local...';
sed -i 's|rq.global.dev|rq.global.dev.test|g' ./data.sql
echo 'Done!';
echo 'Changing name of DB';
cp './data.sql' './local_data.sql'
echo 'Done!';
sh local_backup.sh
echo "backup loaded! Happy codding"