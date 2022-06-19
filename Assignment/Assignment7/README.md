## XAMPP installation

#### 1: Search 'XAMPP download' on a browser and select the `https://www.apachefriends.org/` website.
#### 2: Then, scroll and choose the one among the three options according to your device and download it.
#### 3: After downloading, go to the downloads and install the the XAMPP.

## Set up

#### 1: Go the to location of XAMPP folder snd open it.
#### 2: Then, search for `'htdocs'` folder and open it. Files and folders which is to be accessed through XAMPP localhot is added in it.
#### 3: Create a folder in the 'htdocs' and name it of your choice, then create a php file. If it is named `'index.php'`, webserver will open it without full path.
#### 4:Open the XAMPP `control panel` and click the start from apache option.
#### 5: Then, open browser and type ```localhost/filelocation``` and the file will be accesed.


## Virtual host
### The virtual host provides a domain URL in the local system. It allows you to run your application on a domain virtually. You can configure Apache virtual host easily for your application. If you create the Apache virtual host for your PHP application then it will be super easy for you.
#### 1: Open the 'XAMPP' folder and search for `apache` folder.
#### 2: Then, look for `conf` folder then inside conf search for `extra` folder.
#### 3: In extra folder look for a file named `httpd-vhosts.conf` and open that
#### 4:In the file, look for the following line
 ```
 ##<VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host2.example.com
    ##DocumentRoot "C:/xampp/htdocs/dummy-host2.example.com"
    ##ServerName dummy-host2.example.com
    ##ErrorLog "logs/dummy-host2.example.com-error.log"
    ##CustomLog "logs/dummy-host2.example.com-access.log" common
##</VirtualHost>
```
#### 5: Then, copy the above code in the file and change it as follows:
```
<VirtualHost *:80>   
    DocumentRoot "file-location"
    ServerName example.local
</VirtualHost>
```
##### It is advised not to use .com in the server name

## Host file 
### Host
#### 1: In the c drive of File explorer search path`C:\Windows\System32\drivers\etc` 
#### 2: After that look for a file named `host` and open it as run administrator
##### Create a backup incase error occurs.
#### 3: Add the line of code as shown:
```
127.0.0.1       localhost
127.0.0.1       example.local
```