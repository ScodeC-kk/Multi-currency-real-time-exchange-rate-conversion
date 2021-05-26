# Multi-currency-real-time-exchange-rate-conversion

## Detailed design of the web application
The interface of the web design:

![image](https://user-images.githubusercontent.com/54071710/119682685-ab572c00-be75-11eb-84b6-5cf1b523c505.png)

Support mobile phone/table/desktop screen size

![image](https://user-images.githubusercontent.com/54071710/119682749-b6aa5780-be75-11eb-8d09-f5008c48090e.png)


Support Dark Mode
Light mode | Dark mode
------------ | -------------
![image](https://user-images.githubusercontent.com/54071710/119683048-f1ac8b00-be75-11eb-9001-6cd9799b7b92.png) | ![image](https://user-images.githubusercontent.com/54071710/119683080-f6713f00-be75-11eb-9706-7edd94deec75.png)
![image](https://user-images.githubusercontent.com/54071710/119683100-f8d39900-be75-11eb-99b0-081fc8eed860.png) | ![image](https://user-images.githubusercontent.com/54071710/119683115-fb35f300-be75-11eb-95b3-e1e5ec7ef3dc.png)

## system structure

![image](https://user-images.githubusercontent.com/54071710/119683409-346e6300-be76-11eb-95b7-c19e982e28b3.png)

## the components of the system and their functionalities
In this system There are six components, which are First page, Login or register page, User page, Record page, option page, view detail page and Developer information page. And We design the website can visit from different end-device.

### 1.1	First page/ Welcome page
![image](https://user-images.githubusercontent.com/54071710/119683598-59fb6c80-be76-11eb-91e2-900466d87639.png)

Picture1.1.1

In Welcome page(Picture1.1.1), It make by two part .First part is title page . User can direct to other page by click  ![image](https://user-images.githubusercontent.com/54071710/119683672-6aabe280-be76-11eb-8c6f-0181b8a9976e.png) /	![image](https://user-images.githubusercontent.com/54071710/119683768-80b9a300-be76-11eb-94c3-7e022d584142.png) button. User can click “login/register” button to login or register ![image](https://user-images.githubusercontent.com/54071710/119683883-a0e96200-be76-11eb-9985-054a8700af12.png) .Or “website information” button	![image](https://user-images.githubusercontent.com/54071710/119683768-80b9a300-be76-11eb-94c3-7e022d584142.png) to know information about the	website. Click To enhance to showcase in the web page We also had added three-layer and precedence in the front cover.

First, User would not see anything in the front cover at the began(Picture 1.1.2):

![image](https://user-images.githubusercontent.com/54071710/119684015-be1e3080-be76-11eb-9d45-fb8ea70ce5cd.png)

Picture1.1.2

Second, The front cover would display the string (Picture 1.1.3):

![image](https://user-images.githubusercontent.com/54071710/119684092-cc6c4c80-be76-11eb-9a60-80052b4b801f.png)

Picture 1.1.3

Third, It would display clear background picture(Picture 1.1.4):

![image](https://user-images.githubusercontent.com/54071710/119684138-d42bf100-be76-11eb-8cb4-ab04b404810f.png)

Picture 1.1.4

![image](https://user-images.githubusercontent.com/54071710/119684166-da21d200-be76-11eb-98ae-00538a6ac24c.png)

Picture1.1.5

The second part (Picture1.1.5) in Welcome page, User can use the bitcoin calculator in this part. The calculator can get the real-time data from internet and output in the calculator. The page would look like this(Picture1.1.6):

![image](https://user-images.githubusercontent.com/54071710/119684235-eb6ade80-be76-11eb-8f91-83748f237a3c.png)

Picture1.1.6(The case of User enter 1 in USD row)

In this part user can enter the number one of the rows than click the Red button ![image](https://user-images.githubusercontent.com/54071710/119684277-f58cdd00-be76-11eb-9e9d-5fa455306713.png) . That can count the dollar by your Currency Converter. The name of the Red button would allow the User input action, such as if user enter value in Hong Kong dollar ,than the button would be count according to HKD ![image](https://user-images.githubusercontent.com/54071710/119684386-0a697080-be77-11eb-9361-11a3b57ea20b.png). Then user can click the” Reset” button to reset all the output. If user want to output the webpage URL and share to their friend, User can “Generate QRcode to share “button to
generate the QRcode (Picture 1.1.7):

![image](https://user-images.githubusercontent.com/54071710/119684477-1bb27d00-be77-11eb-9688-b8c499abda47.png)

Picture 1.1.7

Then If user want to scan the QR code for visit the page to get the pass research setting. User can click the “Scan QRcode button” and scan the Qrcode on the page. After scanning the QR code user would direct to access the new page which they had save the search option before.

![image](https://user-images.githubusercontent.com/54071710/119684534-28cf6c00-be77-11eb-8e03-12187784ae62.png)

## 1.2	Login page

If user want to login or register an account forget more information about bitcoin. They could do the login or register action from this page. The page would look like this (Picture1.2.1):

![image](https://user-images.githubusercontent.com/54071710/119684589-35ec5b00-be77-11eb-9f9c-573e725c25c1.png)

Picture1.2.1

In this page user had to enter login id and Password for register or login.
If user want to register an account, they need to enter the login Id and password than click the “Create an account” button.
If user want to login the account, they would need to enter the login Id and password than click the “Login” button.
And every time user login or register a new account ,they need to click the google ReCAPTCHA checkbox.
There are number of cases would happen:

If user success create a new account | ![image](https://user-images.githubusercontent.com/54071710/119684694-48ff2b00-be77-11eb-9761-e4d9b59f4fe2.png) <br/>The webpage would direit to user page and alert a success login message.
------------ | -------------
If user doesn’t enter the password to login or create account | ![image](https://user-images.githubusercontent.com/54071710/119685133-adba8580-be77-11eb-9d6a-711bf3f4ceaf.png) <br/>The webpage would alert a password error message.
If user doesn’t click the checkbox for google ReCAPTCHA | ![image](https://user-images.githubusercontent.com/54071710/119685154-b317d000-be77-11eb-9e2a-3223f57aaa94.png) <br/>The webpage would alert a google ReCAPTCHA error message.

## 1.3	User Page
![image](https://user-images.githubusercontent.com/54071710/119685279-cb87ea80-be77-11eb-90b6-545d48a1852b.png)












