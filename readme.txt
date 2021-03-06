=== Dilmot live Q&A chats ===
Contributors: guyaloni, dilmot
Donate link:
Tags: live blogging, interview, Q&A, Dilmot, chat, moderation, live, comments, debate 
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 3.5
Tested up to: 4.1
Stable tag: 1.4

The Dilmot plugin allows you to host live blogging sessions and real-time Q&A chats in your WordPress site by linking your WordPress site with your Dilmot.com account.

== Description ==

Dilmot is a web participation platform. With this plugin you can host live moderated conversations between a guest speaker and the audience. It will allow your readers to send the questions through a simple form. And you can also grab questions from the Twitter hashtag of your choice.
The idea behind this plugin is to integrate the capabilities of the Dilmot platform inside WordPress, so you can seamlessly get the chats inside the WordPress site.

== Installation ==

1. Install the plugin, putting it in to the /wp-content/plugins folder and activate it.

2. Visit the settings page in your admin panel. 

You will see that inside the Settings there is an item called Dilmot.

3. Copy some information into your Dilmot account settings
There are two pieces of information you will have to copy from here and paste into your Dilmot account settings:
- Plugin URL
- Application Key

4. Fill in some information
- Dilmot account: this is the subdomain you are using in dilmot.com
- Streams category: This is your WordPress category that will be applied to the streams, for example "interviews" or "chats"

After you have done these steps, your plugin is ready to work with your Dilmot.com account. Every time you create a stream in your Dilmot account, a new post will be created, with the same title as the one you defined in Dilmot, and the content of the post will be the stream.

== Frequently Asked Questions ==

= Does this plugin change the stream published in my Dilmot account page? =

No. The plugin works independently and your Dilmot page will still display the live stream as usual.

= What information is stored in my WordPress site? =

When you create the stream in Dilmot, a new post will be created in your WordPress site. The plugin uses custom fields in order to store important information about the stream such as the image url and the status of the stream.

= Do I need a special theme to use Dilmot? =

It is recommended that you use Dilmot theme that you can download at http://blog.dilmot.com/wp-content/uploads/dilmot/dilmot-theme.zip or that you take some functions from it in order to get the best layout of the stream information into your WordPress site. 

= Do I have to pay to use Dilmot? =

No, there is a free plan that you can use. If you need more professional alternatives, there are other plans available, please check http://www.dilmot.com for more information


== Screenshots ==

1. Plugin configuration screen
2. An example of a Q&A
3. The Q&A management screen in the Dilmot application panel
4. Another example of Q&A
5. An example of a Q&A with the questions that have been approved and are pending to be answered

== Troubleshooting ==

= After I configure the data in both WordPress install and Dilmot account, the stream created does not create a post =

Verify that you have copied the data correctly. You may need to regenerate the API key in the plugin configuration in WordPress. In case you do, please make sure that you copy it to the Dilmot account configuration, and save it afterwards.

Make sure that you have your WordPress debug configuration, in the wp-config.php file, with "false" value. It should be like that for production environments in any case.

== Changelog ==

= 0.1 =
- Initial Revision

= 1.0 =
- First release in the plugin repository

= 1.1 = 
- Fixed loading the correct urls of Dilmot images

= 1.2 =
- Loads different types of header selected in Dilmot app

= 1.3 =
- Question form can automatically load the name of the WP logged user

= 1.4 =
- Add stream header template

