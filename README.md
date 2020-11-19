# Project to automate deploment of a docker container with ssl (Let's Encrypt) and Wordpress.
*Tested on Ubuntu 18.04*

This project automates most of the dirty work to setup a lamp server running docker. This script then directs Docker to fetch and configure an SSL certificate via Let'sEncrypt followed by downloading an installing the latest Wordpress. Finally, a script is added to keep the certificate up to date.

To use this script, you must be running a base Ubuntu Server 18.04 with docker and docker-compose. Update via sudo apt update && sudo apt upgrade, then follow the steps below.


1. Copy or clone project into dir (/opt/docker)
	- git clone https://github.com/DreamPCs/docker-ssl-wordpress-script.git
2. Edit init-letsencrypt.sh
	- Replace "yourdomain.com" with domain (1 instance)
	- Insert your email between quoation marks where asked (normally line 11) (Optional but recommended)
		If you ENTERED an email, please see note below!
3. Edit nginx/conf.d/default.conf
	- Replace "yourdomain.com"with domain (4 instances)
5. Add user to wordpress group and execute script (copy and paste next 5 lines)
	- useradd -u 1500 app
	- usermod -aG docker app
	- chown app:app -R wordpress
	- chmod +x init-letsencrypt.sh
	- ./init-letsencrypt.sh
	- **Note!: If you entered an email, while the script is running it will ask if you wish to share anonymous information with the EFF, please answer Yes or No. 
	- **If you did NOT enter an email, this question will NOT come up.
6. Finish Wordpress installation at domain.
