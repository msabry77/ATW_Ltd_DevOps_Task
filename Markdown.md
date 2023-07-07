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

1- logging in to my aws console
2- create an ubuntu machine so i can do my tasks  (EC2)
3- create Key pair so i can loggin to my machine 
4- launch instance 
5- to connect to machine First Locate my private key file .
6- connect to my maachine using ssh client with the user name of the machine and public DNS 
7-  now we logged in to the ubuntu 
8- 
9- install apache2 using these commands
	
	1 sudo apt update        
    2  sudo apt install apache2
    3  sudo systemctl status apache2    //to check the status of apache2

10- install mysql server using these commands 
   
	   1  sudo apt install mysql-server
	   2  sudo systemctl start mysql.service
	   3  systemctl mysql status

11-  install php version 8.1
   
   1 sudo apt install software-properties-common
   2  sudo add-apt-repository ppa:ondrej/php
   3  sudo apt -y install php8.1
   4  php -v

12- to configure the apache server 
      1. sudo nano /etc/apache2/apache2.conf
      2. modify the Document root to point to /var/www/html/   insted of /var/www/
      3. save and restart apache2 using this command sudo systemctl restart apache2
      
13- simple helloworld.php code is in my repo

14-  to create new database 
		
		CREATE DATABASE php_ddb;
		
15- to create new user ,and password 
   
      CREATE USER 'msabry'@'localhost' IDENTIFIED BY 'msabry';
      
16-to  grants the new user full privileges on all tables and columns in the "php_db" database.


	GRANT SELECT, INSERT, CREATE, ALTER, DROP, LOCK TABLES, CREATE TEMPORARY TABLES, DELETE, UPDATE, EXECUTE ON php_db .* TO'msabry'@'localhost';

	FLUSH PRIVILEGES;

17- code of modify in my repo   (visitors_ip_and_time.php)
   

Sub-task #2 Git &amp; GitHub:

1- to  Initialize a new Git repository on your local machine use (git init)

2- to create .gitignore use ( vi .gitignore ) then save and exit 
   
3-to commit my markdown document use this several commands 

	git add .
	git commit -m “my commit message ”

4- logging in to my github repo 
	
	//to config my account 
	
	git config --global user.emai"mohamedsabry5000@gmail.com"
    git config --global user.name "msabry77"
    
    //to remote with my repo 
    
    git remote add origin https://github.com/msabry77/ATW_Ltd_DevOps_Task
    git push -u origin master
   //then loggin by my username and token 
	
   

	
