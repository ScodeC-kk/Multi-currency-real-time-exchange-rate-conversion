## Multi-currency-real-time-exchange-rate-conversion



contentMenu
Detailed design of the web application	2
system structure	5
the components of the system and their functionalities	5
1.1	First page/ Welcome page	6
1.2	Login page	9
1.3	User Page	11
1.4	Option Page	14
1.5	Record Page	15
Database	16
programming languages	17
tools used	18
testing strategies and results	19
welcome page	19
In login/register page	20
In user page	20
In Detail Page	21
In select option Page	22
In Record page,	22
user manual	23
installation guide for deployment user manual	24
Step 1 prepare the environment	24
Step 2 set up the file	24
Step 3 setup google reCAPTCHA	25
Step 4 set up HTTPS	27
Step 5 set up the SQL	27

 
Detailed design of the web application
The interface of the web design:

 
Support mobile phone/table/desktop screen size

 
Support Dark Mode
Light mode	Dark mode

 

system structure





the components of the system and their functionalities
In this system There are six components, which are First page, Login or register page, User page, Record page, option page, view detail page and Developer information page. And We design the website can visit from different end-device.
 


1.1	First page/ Welcome page

Picture1.1.1
In Welcome page(Picture1.1.1), It make by two part .First part is title page . User can direct to other page by click   /	button. User can click “login/register” button to login or register   .Or “website information” button	to know information about the
website. Click To enhance to showcase in the web page We also had added three-layer and
precedence in the front cover.

First, User would not see anything in the front cover at the began(Picture 1.1.2):
Picture1.1.2
Second, The front cover would display the string (Picture 1.1.3):
 
 
Picture 1.1.3
Third, It would display clear background picture(Picture 1.1.4):

Picture 1.1.4


Picture1.1.5
The second part (Picture1.1.5) in Welcome page, User can use the bitcoin calculator in this part. The calculator can get the real-time data from internet and output in the calculator. The page would look like this(Picture1.1.6):
 

 

Picture1.1.6(The case of User enter 1 in USD row)

In this part user can enter the number one of the rows than click the Red button  . That can count the dollar by your Currency Converter. The name of the Red button would allow the User input action, such as if user enter value in Hong Kong

dollar ,than the button would be count according to HKD	. Then user can click the” Reset” button to reset all the output. If user want to output the webpage URL and share to their friend, User can “Generate QRcode to share “button to
generate the QRcode (Picture 1.1.7):


Picture 1.1.7
Then If user want to scan the QR code for visit the page to get the pass research setting. User can click the “Scan QRcode button” and scan the Qrcode on the page. After scanning the QR code user would direct to access the new page which they had save the search option before.
 

 

1.2	Login page

If user want to login or register an account forget more information about bitcoin. They could do the login or register action from this page. The page would look like this (Picture1.2.1):
Picture1.2.1

In this page user had to enter login id and Password for register or login.
If user want to register an account, they need to enter the login Id and password than click the “Create an account” button.
If user want to login the account, they would need to enter the login Id and password than click the “Login” button.
And every time user login or register a new account ,they need to click the google ReCAPTCHA checkbox.
There are number of cases would happen:
 
If user success create a new account	
 
The webpage would direit to user page and alert a success login message.
If user doesn’t enter the password to login or create account	
 
The webpage would alert a password error message.
If user doesn’t click the checkbox for google ReCAPTCHA	
 
The webpage would alert a google ReCAPTCHA error message.
 

1.3	User Page

Picture1.3.1
In this User page (Picture1.3.1), user can do the Currency Converter with bitcoin or ETH. The table can display seven row data at the same time. And If user clicked the “Auto Mode”

button. User wouldn’t need to click Currency Converter button, the value would auto show in the row.
Then, If user want to know more detail in the Currency converter. They can click “Select

option & view”	button to get know detail. If user doesn’t select the currency the page would alter a message (Picture1.3.2):
 
Picture1.3.2
After select the currency and click the button, user can view the chart on top of the page(Picture1.3.3).


User can view the real-time chart on this page
User also can enter the value in bottom of the table to get the Currency converter.( Picture 3.1.4) (Picture 3.1.5).
(Picture3.1.4)	(Picture 3.1.5):user enter the number in bottom row The top of the page, There are four button(Picture1.3.6) , user can click it to access different webpage.
 

 
Picture1.3.6
Different button would direct user access different page, Such as

this button would logout the account and direct user to Welcome page,
    this button would direct user to option page, user can select their style of the Currency converter table.
 this button would direct user to record page, user can view the record from this page.    this button would direct user to web information page, it is same with Welcome page.
 


1.4	Option Page
User in this page can verify the default option in table in user page.
In this page user can select element from right side and drag it to Your option to replace the default elements(Picture1.4.1).
 
Picture1.4.1
After user custom the option setting ,user can click the “Apply & Exit “ Button to applicate the setting.

If user want to reset option, user can click the “Reset ”Button.
 

1.5	Record Page
User in this page can view the research history, the table would show display value, currency and time. Value is displaying the amount of value user searched, the currency is the type of currency user searched, Time is when search the currency.



User can click the “Refresh”	button to refresh the record on the table

User also can delete all record on the table by click “cancel all record”	button
 

Database
There are three tables in database,
	User_info table store user data, such as login_id, password, address and Unix_time and User_No.


	User_record table store the research record, there are using User_No connect with User_info table to record user action when using the currency converter. The table are store User_No, SearchNum, currency and time. Currency is store currency type.
	User_setting table store the research type setting option, there are using User_No connect with User_info table to record user action when change the display setting in option page the table are store User_No, First, Second, Third, Fourth, Fifth, Sixth, Seventh. These columns are saving the sequence of option setting.
 
 

programming languages



 	JavaScript:
Use on the website to handle the basic function of all website such as generate QRcode , scan QRcode , count carrency , ajax change record setting and the setting options funcitons

 	HTML:
Provide a basic design for the website.

 	CSS:
Use to handle the website design style for color,size or the layer of the input,button object

 	PHP:
Use to handle the login, update data, delete data and handle the api more easily to access

 	MYSQL:
Provide a SQL server to save all usering info, record and the settings,
 

tools used


Website tools
qrcode.js
Used to generate the QR code for the website for the user scan it and access to the website or the record conveniently
https://davidshimjs.github.io/qrcodejs/

currency-api
Used to get the currency list and the price of the currency https://github.com/fawazahmed0/currency-api

google ReCAPTCHA
Used to authenticate the user login or create account is not a bot. https://www.google.com/recaptcha/about/

QR code scanner
Scan the QRcode from the camera https://github.com/jbialobr/JsQRScanner

TradingView Mini Chart Widget
To generate the Chart for the website https://www.tradingview.com/widget/mini-chart/

HTML + CSS
Website template
A design for the website
https://www.bypeople.com/industrious-business-html5-responsive-template/


Develop tools:
Chrome(Developer Tools)
https://www.google.com/intl/zh-HK/chrome/

phpMyAdmin
https://www.phpmyadmin.net/

Adobe Brackets (+ beautify extenuation)
http://brackets.io/

Beautify Extenuation(Formatting php, html, JavaScript, CSS)
https://github.com/brackets-beautify/brackets-beautify

 



testing strategies and results
the testing strategies and results would include welcome page ,login/register page ,user page, modify option page ,detail page and record page
welcome page

Use case/action	output
If user enter the value in USD row	The red button would change to

 

If user enter the value in EUR row	The red button would change to

 

If user enter the value in JPY row	The red button would change to

 

If user enter the value in HKD row	The red button would change to

 

If user enter the value in CNY row	The red button would change to

 



If user click reset button	Reset all the input in the table
If user click generate QRcode to share button	QR would save the search value and
make it to be QR code.
 
 

In login/register page
There are number of cases would happen:
Use case/action	output
If user success create a new account	
 
The webpage would direit to user page and alert a success login message.
If user does not enter the password to login or create account	
 
The webpage would alert a password error message.
If user does not click the checkbox for google ReCAPTCHA	
 
The webpage would alert a google ReCAPTCHA error message.


In user page


Use case/action	output
If user enter the value in BTC row	The red button would change to
 
	
 
If user enter the value in ETH row	The red button would change to

 
If use clicked the Auto mode


 
	The row of formula would calculate
If user want to know more detail of the currency, they can select and click one of the choose on the table and click Select option & view button

 
	User can view the chart and column table in detail page.
If user click the Select option & view button, but does not select the row choose	The webpage would show the alert to user.

 



In Detail Page

Use case/action	output
User can insert the value in row

 


	User can know the different Currency price.
 
 

In select option Page

Use case/action	output
user can select element from right side and drag it to replace the default elements
 	The default option would changed
user custom the option setting ,user can click the “Apply & Exit “ Button to applicate the setting.	The setting would upload to database

Click reset button	reset the current setting to be default
setting

In Record page,

Use case/action	output
User in this page would see	
 

 
Click refresh button	the page of data would update from database
Click the cancel all record button

 	The record data would delete from database
 

user manual
User can view different currency in the table.
In Welcome page user can view the country currency convent.
After user login the page, they can view virtual currency and view the chart in the page. Then, there are few conditions for setup the website, such as:
	Set up LAMP/WAMP server
LAMP(Linux, Apache, MySQL, PHP)/ WAMP(Windows, Apache, MySQL, PHP) that used to handle the website for http, SQL storge and the PHP functions.
	Setup HTTPS
For the webcam, the bowser only allows the website to access the webcam with HTTPS.
	Devices should have a camera if want to scan OR code
	Prepare google reCAPTCHA V2 key
Used to authenticate the login is not bot.


installation guide for deployment user manual
Step 1 prepare the environment:
Need to prepare Apache , MySQL, and PHP server on your computer. If you use windows use can install their software:

XAMPP Installers and Downloads for Apache Friends https://www.apachefriends.org/download.html WampServer https://sourceforge.net/projects/wampserver/

Linux (Ubuntu use this statement) in the terminal:
sudo apt-get install apache2 sudo apt-get install mysql-server
sudo apt-get install php libapache2-mod-php php-mysql


Step 2 set up the file
Copy the file in the apache “www” file
On windows by default on “c:\wamp\www” and “c:\XAMPP\www” or other location your set.
On Linux the location on “var/www/html”
 

Step 3 setup google reCAPTCHA
Prepare google reCAPTCHA and Https services Go to this link
Google reCAPTCHA https://www.google.com/recaptcha/about/ Click this button

Click this button to create new

Enter all option

 

 

And click apply
Then you can have the key for the website





Copy the HTML key(top one) on the
Login_User.php Line 53	<div class="g-recaptcha" id="g-recaptcha" data-sitekey="<here>"></div>

Copy the Connection key(Button one) on the
phpFunction/loginSubmit.php Line 30	$secret_key = '<here>';
 

Step 4 set up HTTPS
Set the HTTPS services you may have the HTTPS SSL key for the website. If you don’t want to have use the QR code scanning function you can bypass this step, if you still want to test this function without register HTTPS use can use this service:
ngrok - secure introspectable tunnels to localhost https://ngrok.com/


Step 5 set up the SQL
You should set up the MySQL server and import the SQL statement on with “webProject.sql” file.
Then enter the SQL login detail on “phpFunction\StartUp.php”:

Finally, all setup is done.
