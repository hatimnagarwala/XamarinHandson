# Building your First Azure-Backed Xamarin.Forms App 
 

 
## Exercise 1: Create an Azure Mobile App Backend 
 
## Exercise 2: Create SQL Azure and Add it as Data Connection 

## Exercise 3: Create your first Xamarin.Forms App and Use Azure Mobile Apps SDK
 
 
### Lab Prerequisites 
1)	Visual Studio 2017 with Xamarin. 
2)	An active Microsoft Azure account. {Ask your Lab Moderator about your Azure Pass 
Code} – No Credit Card is required, if you created your Azure account using Azure Pass Code 
3)	Visual Studio Emulator for Android  / x86 Emulator
 
Estimated Time to finish this lab is from **60 minutes** 
 
## Exercise 1: Create an Azure Mobile App Backend 
1) Navigate to https://portal.azure.com/ and login using your Azure account 

2) Click on Resource Groups 
<img src="images/1.jpg"/>
  
3)	Click on Add 
<img src="images/2.jpg"/>
  
4)	Assign a name for your resource group then click Create 
<img src="images/3.jpg"/>
  
 
5)	Wait till you receive a notification on the right saying “Creating resource group <your resource group name> was successful”  
<img src="images/4.jpg"/>
  
6)	Click on + New then Web + Mobile 
<img src="images/5.jpg"/>
  
7)	Click on Mobile App 
<img src="images/6.jpg"/>
  
8)	Write a unique name for your App Name then choose the resource group we just created in step 4 and 5 
<img src="images/7.jpg"/>
  
 
9)	Click on App Service plan/Location then click on Create New 
<img src="images/8.jpg"/>
 
 
10)	Write a name for your app service plan then choose the datacenter location and the pricing tier of your Azure Mobile App Backend & click OK 
<img src="images/9.jpg"/>
  
11)	Click Create to start creating your first Azure Mobile App backend 
<img src="images/10.jpg"/>
  
12)	Wait till you receive a notification saying “Deployments succeeded” 
<img src="images/11.jpg"/>
  
## Exercise 2: Create SQL Azure and Add it as Data Connection  
1)	Click on +New then Databases 
<img src="images/12.jpg"/>
  
 
2)	Choose SQL Database 
<img src="images/13.jpg"/>
  
3)	Write a name for your database, choose the resource group that we created in Exercise 1 (Step 4 &5) and select blank database 
<img src="images/14.jpg"/>
  
 
4)	Click on Server then Create a new server 
<img src="images/15.jpg"/>
  
5)	Write a name for your server then set the value of Server admin login and Password (password must be complex) then click Select 
<img src="images/16.jpg"/>
  
 
6)	Choose your Pricing Tier then click Create 
<img src="images/17.jpg"/>
  
 
7) Wait till you receive a notification on the right saying “Deployments succeeded” 
<img src="images/18.jpg"/>
   
8)	Click on Resource Groups 
<img src="images/19.jpg"/>
  
9)	Click on the resource group we created in Exercise 1 (Step 4 & 5) 
<img src="images/20.jpg"/>
  
10)	You should find 4 resources in the resource group: 
•	SQL Database (created in step 6, Exercise 2) 
•	SQL Server (created in step 5, Exercise 2) 
•	Azure Mobile App Backend (created in step 11, Exercise 1) 
•	App Service Plan (created in step 10, Exercise 1) 
Click on the Mobile App Backend (HelloXamarinBackend) 
<img src="images/21.jpg"/>
  
 
11) Scroll down and click on Data Connections 
<img src="images/22.jpg"/>
 
12) Click on Add 
<img src="images/23.jpg"/>
 
 
 
13) Select SQL Database as your data connection type then click on Configure required settings 
  
<img src="images/24.jpg"/>
 
 
14)	Choose the database we created in step 6, Exercise 2 from the list 
  
<img src="images/25.jpg"/>
 
 
15)	Click on Connection string 
  
<img src="images/26.jpg"/>
 
16) Write the same username and password you set in step 5, exercise 2 then click OK 
<img src="images/27.jpg"/>
  
17)  Click OK to add your database as data connection for your mobile backend 
<img src="images/28.jpg"/>
  
18)  Wait till you receive a notification on the right saying “Data connection created” 
<img src="images/29.jpg"/>
  
19)	From the list of your Azure Mobile App Backend, click on Easy Tables.  
<img src="images/30.jpg"/>
  
20)	Click on the blue ribbon to configure easy tables 
<img src="images/31.jpg"/>
  
21)	Click on the checkbox to acknowledge that this will overwrite all site contents then click on Initialize App 
<img src="images/32.jpg"/>
  
22)	Wait till you receive a notification on the right saying “App Service backend initialized!” 
<img src="images/33.jpg"/>
  
23)	From Easy Tables, click Add to start adding a new table in your SQL database 
<img src="images/34.jpg"/>
  
24)	Write a name for your new table then click OK 
<img src="images/35.jpg"/>
  
 
25)	Wait till you receive a notification on the right saying “Table Created” 
<img src="images/36.jpg"/>
  
26)	Click on the table we just created in step 24 & 25. 
<img src="images/37.jpg"/>
  
 
27)	Click on Manage Schema 
<img src="images/38.jpg"/>
  
28)	Click on Add Column 
  
<img src="images/39.jpg"/>

29)	Write a name for your column and select a data type then click OK. {Repeat this step twice to add 2 columns}  
<img src="images/40.jpg"/>
 
30)	You should receive 2 notifications when you add 2 columns 
<img src="images/41.jpg"/>
 
## Exercise 3: Create your first Xamarin.Forms App and Use Azure Mobile Apps SDK 
01.	Open Visual Studio and Click on New Project 
<img src="images/42.jpg"/>
  
 
02.	Click on Cross-Platform -> CrossPlatform App (Xamarin.forms or Native) then write a name for your project and click OK 
<img src="images/43.bmp"/>

03.	Select xamarin.forms and select Portable Class Library
<img src="images/44.bmp"/>
 
04.	Open MainPage.xaml file 
<img src="images/45.bmp"/>
  
05. Copy the following code in MainPage.xaml Between the 
```html 
     <StackLayout VerticalOptions="Center">
        <Entry x:Name="Name" />
        <Entry x:Name="University" />
        <Button Text="Add Entry" Clicked="Button_Clicked"/>
     </StackLayout>
 ```
06.	Run the solution, you should be able to see the following. (Make sure that you have your 
Visual Studio Emulator for Android is up and running) 
<img src="images/46.jpg"/>
  
07. Right Click on the project -> Add -> Class 
<img src="images/47.jpg"/>
  
08.	Write a name for your class then click Add 
<img src="images/48.jpg"/>
  
09.	Add the following code to your recently added class file            

```
 public class User 
     {  
         public string ID { get; set; } 
         public string Name { get; set; } 
         public string University { get; set; }     
     }
``` 

14. Write the below code in MainPage.xaml.cs 

```
  MobileServiceClient MobileService = new MobileServiceClient(“Your URL”);
```
 
15. Click on Tools -> NuGet Package Manager -> Manage NuGet Packages for Solution… 
<img src="images/49.jpg"/>
  
16. Click on Browse, write “azure mobile” in the search box, scroll till you find 
“Microsoft.Azure.Mobile.Client”, click on it then select all your project then click Install. (Please note due to some nuget issues currently the stable version 4.0.0.0 doesnt work so install the 3.1 version)
<img src="images/50.bmp"/>

  
 
 
 
17.	Click OK then Accept to start installing the package 
<img src="images/51.jpg"/>
  
18.	Wait till the package is successfully installed 
<img src="images/52.jpg"/>
  
19.	Go back to MainPage.xaml.cs hover with mouse on MobileServiceClient, click on the lamp then using Microsoft.WindowsAzureMobileServices; 
<img src="images/53.bmp"/>
  
21.	Add the following method if you haven’t added it 
```
    Private async void Button_Clicked(object sender, EventArgs e)
    { 
 
            User newUser = new User(); 
            newUser.Name= Name.Text; 
            newUser.University =University.Text; 
 
            await MobileService.GetTable<User>().InsertAsync(newUser);    
    }
``` 
22.	If you are running an android application add this code in MainActivity.cs & if iOS add it to appdelegate.cs
``` 
CurrentPlatform.Init();
```
23.	Run the solution, write your name and your university then click Insert 
    
<img src="images/54.jpg"/>
 
24. Go back to your Azure portal and from your Azure Mobile App, click on Easy tables then click on table User 
<img src="images/55.jpg"/>
  
 
25. You should be able to see the record you just inserted in step 23 
  
<img src="images/56.jpg"/>
