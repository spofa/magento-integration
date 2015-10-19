Kayako Magento Integration
=======================

This library is maintained by Kayako.

Overview
=======================

Magento module with Kayako will help users to get support within website.
Users can create ticket, view their submitted ticket details.
They update ticket status and can post their reply for respective ticket within their magento website.

Features
=======================

* Facilitate users within website to create their own tickets.
* Users can see list of their all submitted tickets.
* User can see ticket with its all related posts up to till date.
* User can update status and priority of ticket as per the need.
* Users can post their reply to follow up with their tickets.
* Magento users can login to helpdesk via Loginshare.

Supported versions
=======================

* Kayako: v4.51.1891 and above
* Magento: 1.7.0.2 and above

Installation steps
=======================
1. Download and extract the Magento integration and follow below process to place directories.
2. Copy 'KayakoAPI' directory from magento-integration/lib and place it in your magento_installation/lib.
3. Copy 'Kayako' folder from 'magento-integration/app/code/community' and paste it in your 'magento_installation/app/code/community'.
4. Copy 'Kayako_Client.xml' from 'magento-integration/app/etc/modules' and paste it in your 'magento_installation/app/etc/modules'.
5. Copy 'client.xml' from 'magento-integration/app/design/frontend/default/default/layout' and paste it in your 'magento_installation/app/design/frontend/base/default/layout'.
6. Copy 'client' folder from 'magento-integration/app/design/frontend/base/default/template' and paste it in your 'magento_installation/app/design/frontend/base/default/template'.
7. Module is successfully installed in your magento website. To take effect on website, select and 'Disable' all cache types (under System > Cache Management of Magento Admin panel)
 and after that ‘Flush Magento Cache’ to clear the existing cache.
8. Go to 'System/Configuration' in Admin panel of your magento website. Here you can see a tab named 'KAYAKO CONFIGURATION'. Click on settings link under it. 
9. In case you get '404 Page not found' error, after clicking on settings tab, then please logout from your admin panel and try after logging in.
10. Go to 'System -> Cache Management' and refresh the cache.
11. Configure Kayako module through the 'System -> Configuration' menu in the Magento admin panel.
12. Enter your Kayako Helpdesk API details under 'Settings tab' (Copy API Details from your Helpdesk installation > Rest API > Settings).