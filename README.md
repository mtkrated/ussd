# Decription
A simple ussd application used to allow the exchange of information between authorities and local communities and how they can protect their livestock and crops while coexisting together with wildlife.

The application involves the use of Africa's Talking which is a Kenya-based mobile solutions firm integrating reliable two-way SMS, voice, and USSD functionality across mobile providers in Africa. The application will involve the usage of the online USSD emulator offered for free by Africa's Talking. The project involved writing the USSD application's interface using PHP. The aim of the project was to provide a way in which people from rural areas and do not have access to the internet or have smartphones can gain access to information that can help them protect their livestock and crops without also harming the animals.

# Tools used in this project

* __XAMPP__ - xampp was used as way to create a database and view the php file.
* __Ngrok__ - is a secure introspectable tunnel to localhosts. In order to use the Africa's talking ussd emulator it is required that the php file be available online. Ngrok allows your local scripts and sites to  be accssible as if their online.
* __Africa's Talking__ - you need to create an account in order to be able to use the USSD emulator. Ngrok can be found at https://ngrok.com.
Documentation regarding the usage of Africa's Talking can be found in their website. https://africastalking.com/

# What to do

* Assuming that you have installed and used XAMPP, Ngrok and everything works as intended then the next step is to create an account in the Africa's Talking website.
* After creating an account open the sandbox app.
* Go to the __USSD__ tab.
* Go to __Create Channel__.
* The default "Pick a shared Service Code" option is *384# by default and cannot be changed for a free acoount. 
    * The __Channel__ will be the number code one has to dial in order to use the app e.g. *384*56721#, the number __56721__ is the 
    channel number.
    * __Callback URL__ is the url link to your php script which will be used to provide the user with the USSD interface and options. Should you have used XAMPP and Ngrok your Callcak URL will be something like http://533ab178.ngrok.io/interface.php/.
    * Create the channel.
 * After creating your channel you can now launch the simulator.
 * Choose your country and enter your phone number.
 * Choose the USSD option and enter the USSD code from ealier.
 * Test your Application. __Note__: Should you get an error please wait a 1-2 minutes for your scripts to load.
 
 # Problems Faced
 One problem that we faced with using XAMPP and localhosts was that we were not able to connect to our local database using the Ngrok method hence it would be best to use a web host.
