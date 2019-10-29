#!/bin/sh
cd www/
echo "cd /home/vagrant/www" | sudo tee -a /home/vagrant/.bashrc;
php artisan migrate --seed;
