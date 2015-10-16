# DemonBucket - Router Resources

###Demonsaw.xml
This is the config file currently being used on the DemonBucket Official routers with comments noting where you need to modify the file to generate a config file for your own router.

**TIP:** Running your demonsaw router in screen allows you to reconnect to the session you are running the router in to look at error logs (because demonsaw router errors are echo'd out instead of pushed in to a log file). This is very helpfull in reducing router downtime and troubleshooting issues. 

Please submit your server @ www.demonbucket.com If you would like network file transfers from the DemonBucket network to be distributed to your server as well. The Helps the network work more efficiently by sharing the load across many servers. 

### run-demonsaw-router
This is a script (for linux routers) that will automatically restart you demonsaw router in the event of the router crashing. 

This script was written by c3e5g7i9 Check out their github @ https://github.com/c3e5g7i9

### Starting up your router using Linux CLI router
1: Upload the latest version of the Demonsaw_router, run-demonsaw-router and Demonsaw.xml

2: chmod demonsaw_router amd run-demonsaw-router

3: run the run-demonsaw-router script

### demonsaw-screen.sh
This script will create a screen session named "demonsaw" as the user defined in the Settings section of the script, and launch demonsaw_router into the screen session. 
(the preffered method by many router hosts!)

You will also need 'screen' installed and I don't know that there's a distro out there that doesn't have it in the repos.
debian/ubuntu/kali: sudo apt-get install screen

#####Steps to use:

**1:** chmod +x screen-demonsaw-router.sh

makes the file executable

**2:** nano screen-demonsaw-router.sh

change the info to match your system between the Settings comments and save.

**3:** ./screen-demonsaw-router.sh

run's the script

**4:** screen -RD demonsaw

will join you to the screen named demonsaw, where your router should now be running!

Exit screen with "ctrl+a,d" you can always join it again later!

More detail on this script, and how to use this to launch demonsaw_router on boot on my website http://www.stinebaugh.info/demonsaw-startup-script-linux/
