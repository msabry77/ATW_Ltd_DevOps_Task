1. IP address: An IP address is a unique identifier assigned to each device on a computer network. 
It is used to identify the device's location on the network and to facilitate communication between devices.
IP addresses are typically represented as a series of numbers separated by periods (like , 192.168.1.1).

2. MAC address: A MAC address (Media Access Control address) is a unique identifier assigned to the network interface controller (NIC) of a device. 
It is used to identify the device on a local network and is used by devices to communicate with each other on the same network. 
MAC addresses are typically represented as a series of six hexadecimal numbers separated by colons (like., 00:11:22:33:44:55).

3. Switches: A switch is a networking device that connects devices on a local network and allows them to communicate with each other.
Switches use MAC addresses to direct network traffic to the correct device on the network. 
When a device sends a message to another device on the same network, the switch uses the MAC address of the recipient device to send the message directly to the correct device.

4. Routers: A router is a networking device that connects multiple networks together and helps to direct network traffic between them.
Routers use IP addresses to direct network traffic to the correct network. When a device sends a message to another device on a different network, the router uses the IP address of the recipient device to send the message to the correct network.

5. Routing protocols: Routing protocols are a set of rules used by routers to determine the best path for network traffic to take between networks. 
There are several different routing protocols, 
including OSPF (Open Shortest Path First), 
BGP (Border Gateway Protocol), 
and RIP (Routing Information Protocol).
These protocols use different algorithms to determine the best path for network traffic and help to ensure that network traffic is directed efficiently and effectively between networks.


//////////////////////////////////////////////////////////////////////////////////////////


Steps of Sub-task #1 Linux Server Simulation:

1- Logging in to my aws console
2- Create an ubuntu machine so i can do my tasks  (EC2)
3- Create Key pair so i can loggin to my machine 
4- Launch instance 
5- To connect to machine First Locate my private key file .
6- Connect to my maachine using ssh client with the user name of the machine and public DNS 
7- Now we logged in to the ubuntu 
8- Install dependence 
9- Install apache2 using these commands
	
	sudo apt update        
	sudo apt install apache2
	sudo systemctl status apache2    # to check the status of apache2

10- install mysql server using these commands

	sudo apt install mysql-server
	sudo systemctl start mysql.service
	systemctl mysql status

11-  install php version 8.1
   
	sudo apt install software-properties-common
	sudo add-apt-repository ppa:ondrej/php
	sudo apt -y install php8.1
	php -v 

12- to configure the apache server 
      	
	sudo nano /etc/apache2/apache2.conf
     
   then modify the Document root to point to /var/www/html/   insted of /var/www/
   the save and restart apache2 using this command 
   
   	sudo systemctl restart apache2
      
13- simple helloworld.php code is in my repo

14-  to create new database 
		
	CREATE DATABASE php_ddb;
		
15- to create new user ,and password 
   
	CREATE USER 'msabry'@'localhost' IDENTIFIED BY 'msabry';
      
16- To grants the new user full privileges on all tables and columns in the "php_db" database.


	GRANT SELECT, INSERT, CREATE, ALTER, DROP, LOCK TABLES, CREATE TEMPORARY TABLES, DELETE, UPDATE, EXECUTE ON php_db .* TO'msabry'@'localhost';


	FLUSH PRIVILEGES;

17- To handle  mysql Database server i installed phpmyadmin
 
	sudo apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl
 	systemctl restart apache2

18- The code after modifing is in my repo with name   (visitors_ip_and_time.php)

19- this is photo of current database after testing the website with added ip's

   ![image](https://github.com/msabry77/ATW_Ltd_DevOps_Task/assets/66013839/27fe10c0-b354-4060-aebb-911da948e3e4)


Sub-task #2 Git & GitHub:

1- To Initialize a new Git repository on your local machine use (git init)

2- To create .gitignore use ( vi .gitignore ) then save and exit 
   
3-To commit my markdown document use this several commands 

	git add .
	git commit -m “my commit message ”

4- logging in to my github repo 
	
To config my account 
	
	git config --global user.emai"mohamedsabry5000@gmail.com"
	git config --global user.name "msabry77"
    
To remote with my repo 
    
	git remote add origin https://github.com/msabry77/ATW_Ltd_DevOps_Task
	git push -u origin master
 
Then loggin by my username and token 
	
   

	
