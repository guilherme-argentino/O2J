apt-get update
apt-get install apache2 php5 libapache2-mod-php5 php5-mcrypt php5-curl php5-gd git zip unzip curl wget -y

cd /var/www/html/

git clone https://github.com/awratten/O2J.git

cd etc/apache2/sites-available
echo "edit 000-default and change: DocumentRoot to /var/www/html/O2J/web/ "

service apache2 restart

cd /var/www/html/O2J/web

chmod 777 uploads/
chmod 777 downloads/
chmod 777 img/
