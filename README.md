# IP Info Check
This is a PHP class that allows you to retrieve details about an IP address using the IPinfo API. The class utilizes the Tailwind CSS framework for styling and also allows the user to copy the IP address to their clipboard.

![](https://res.cloudinary.com/ketney/image/upload/v1675016087/IP_Info_Check_PHP_Script_c8ryuf.png)

### Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
- PHP
- IPinfo access token (sign up on [ipinfo.io](https://ipinfo.io/) to get one)
- Google Maps API Key (sign up on [Google Cloud Platform](https://cloud.google.com/) to get one)

### Installing
- Clone the repository: `git clone https://github.com/your-username/ip-info.git`
- Create a new file `config.php` in the root directory and add the following code:

```php
<?php
    $access_token = 'YOUR_IP_INFO_TOKEN';
    $google_map_api_key = 'YOUR_API_KEY';
```
- Replace `YOUR_IP_INFO_TOKEN` with your own IPinfo access token and `YOUR_API_KEY` with your own Google Maps API key.
- Open `index.php` in a browser and you should see a form where you can enter an IP address to get its details.

### File Details
- `index.php` - The main script file
- `config.php` - The configuration file where you need to add your API keys
- `assets/` - The directory where the CSS and JavaScript files are located
- `includes/` - The directory where the `ip-info-class.php` file is located. This file contains the `IPInfo` class which is used to get the details of an IP address.

### Authors
**Shipon Karmakar** Initial work - [GitHub](https://github.com/shiponkarmakar)

### Support
If you have any questions or issues, please open an issue in the GitHub repository or reach out to the IPinfo team for support.