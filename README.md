PHP-Login-Tutorial
Here are the files for my basic PHP Log in a video tutorial on YouTube which I will be uploading after uploading on the server. In this tut, you'd be relearning the basics of HTML, PHP, SQL! setting up your local server for local hosting and setting up the database.

Your task if you are up for a challenge is to apply the same concepts as explained to make a signup form.

include()
This is to utilize elements and variables referencing FROM an external file.

Steps:
First, download and set up a local server of your choice.

WAMP LINK: https://bitnami.com/stack/wamp/installer XAMPP LINK: https://www.apachefriends.org/download.html

Second, download the zip file 'test' or you can just create your own. Third, follow along with the video tutorial. ;)

***NOTE: Please be observant of the explanations, the file from the video, and the final file. I intended to change and add a few lines in the index file as you can see in the video, it's a bit different. My reason for that is for you to try and observe it yourself in hopes of figuring what they probably mean.

**You would learn about additional methods like sessions by taking the time to study the files.

Sessions
You'll have to start a 'session_start()' in your connection PHP file.

Inside the conditional statement of validating the input login and password with the retrieved data from the database, the success log-in section, you'll have to add the user name to a new session variable. To do that,

Add this line above the header() line. $_SESSION['user'] = $usr

This will allow us to stay logged in on the welcom page even if we closed the tab.

To set up a log out button, apply the same concept of catching the click of the button and destroy or unset the session variable as the action

unset($_SESSION['user'])

You might notice a few conditional statements such as if(....)) above the welcome page, what that does is validating whether the session is set. if not, then the page will redirect the user to the login page and won't be able to see the welcom page until a successful login.

That's it for this tutorial! Enjoy!

****Ps. It is my first tutorial so please bear with me. lol. Let me know your thoughts or how else I can improve. Let's all learn together!!
