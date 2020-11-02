# Project to automate deploment of a docker container with ssl (Let's Encrypt) and Wordpress.
*Tested on Ubuntu 18.04*

This project automates most of the dirty work to setup a lamp server running docker. This script then directs Docker to fetch and configure an SSL certificate via Let'sEncrypt followed by downloading an installing the latest Wordpress. Finally, a script is added to keep the certificate up to date.

To use this script, you must be running a base Ubuntu Server 18.04 with docker and docker-compose. Update via sudo apt update && sudo apt upgrade, then follow the steps below.


1. Copy project into dir (/opt/docker)
2. Edit init-letsencrypt.sh -- replace "yourdomain.com" with domain (1 instance)
3. Edit nginx/conf.d/default.conf -- replace "yourdomain.com"with domain (4 instances)
5. Add user to wordpress group and execute script
	- useradd -u 1500 app
	- usermod -aG docker app
	- chown app:app -R wordpress
	- chmod +x init-letsencrypt.sh
	- ./init-letsencrypt.sh
6. Finish Wordpress installation at domain.
