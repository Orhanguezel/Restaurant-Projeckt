ls /var/www/html
ls /var/www/html/php


sudo cp -r /home/dci-admin/restaurant-management/* /var/www/html/
sudo cp -r /home/dci-admin/restaurant-management/* /var/www/html/php/
sudo cp -r /home/dci-admin/restaurant-management/* /var/www/html/js/


sudo systemctl restart apache2

git push -u origin main

