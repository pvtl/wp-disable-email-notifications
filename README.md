# WP Disable Admin Email Notifications

WordPress plugin that monitors installation for core, plugin and theme updates and emails the client when they are available.

## Installation into a Bedrock site

#### Install

```
# 1. Get it ready (to use a repo outside of packagist)
composer config repositories.wp-disable-email-notifications git https://github.com/pvtl/wp-disable-email-notifications

# 2. Install the Plugin
composer require pvtl/wp-disable-email-notifications