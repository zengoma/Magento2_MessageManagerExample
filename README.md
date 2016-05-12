#Zengoma Message Manager

###Description:
Boilerplate code example for displaying non-ajax messages in Magento 2

###Installation:
From your root magento 2 installation directory run:
```
composer config repositories.zengomamessagemanager git https://github.com/zengoma/Magento2_MessageManagerExample.git
composer require zengoma/messagemanagerexample:dev-master
```
Activate the module from the bin directory:
```
./magento module:enable Zengoma_MessageManagerExample --clear-static-content
```
Ensure all your folder permissions are correct after the static content has regenerated.

You can explore the newly installed module under /vendor/zengoma/messagemanagerexample

###Usage:
Visit **/my_message_manager/test/redirect**. If installation was successful you should be redirected
to the shopping cart with a success message.

![Example_1](/images/example_1.png)


