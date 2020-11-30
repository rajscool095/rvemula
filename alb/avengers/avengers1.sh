#!/bin/bash
yum install -y httpd php git

cd /var/www/html
wget https://github.com/rajscool095/rvemula/raw/main/alb/avengers/avengers1.png
mv avebgers1.png avengers.jpg
wget https://github.com/rajscool095/rvemula/raw/main/alb/avengers/index.php
mv /var/www/html/htaccess /var/www/html/.htaccess

mkdir /var/www/html/avengers
cp /var/www/html/avengers.jpg /var/www/html/avengers
cp /var/www/html/index.php /var/www/html/avengers
cp /var/www/html/.htaccess /var/www/html/avengers


sudo systemctl start httpd
sudo systemctl enable httpd
sudo usermod -a -G apache ec2-user
sudo chown -R ec2-user:apache /var/www
sudo chmod 2775 /var/www && find /var/www -type d -exec sudo chmod 2775 {} \;
find /var/www -type f -exec sudo chmod 0664 {} \;
