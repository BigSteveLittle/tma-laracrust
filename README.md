# LaraCrust

## Description
Following along with YouTube video tutorial 'Laravel From Scratch 2022' by Brad Traversy of Traversy Media. The learning project, LaraCrust is an online positions board for those looking for working with Laravel. Note: if you are confused by the word 'Crust' there is a common term in Australia/New Zealand 'What do you do for a crust?' to mean what you do for a job. 

## Badges
![97.2% PHP](https://img.shields.io/static/v1?label=PHP&message=97.2%&color=purple)
![1.4% Blade](https://img.shields.io/static/v1?label=Blade&message=1.4%&color=pink)
![0.3% JS](https://img.shields.io/static/v1?label=JS&message=0.3%&color=yellow)
![1.1% Other](https://img.shields.io/static/v1?label=Other&message=1.1%&color=lightgray)

## Installation
### Installation Links
Brads Laravel/Valet Gist [https://gist.github.com/bradtraversy/b58f74cd863a465068eaeaae1544d9be]
Homebrew [https://brew.sh/]
Composer [https://getcomposer.org/]
Valet [https://laravel.com/docs/9.x/valet]
Laravel Installer [https://laravel.com/docs/9.x#your-first-laravel-project]

### Basic Starter Files
If you're interested in my basic starter files css/styles.css + README.md + .gitignore run these 5 statements at the command line (you will need to install the wget module which I did via Homebrew [https://brew.sh/]):

> mkdir css 

> wget https://www.dropbox.com/s/xz3m74rk9kblv7o/styles-setup.css 

> mv styles-setup.css css/styles.css 

> wget -O README.md https://www.dropbox.com/s/8d05riwy7mb062p/READMETUT.md 

> wget https://www.dropbox.com/s/6l7rl93t4r5fvo5/.gitignore 

I started a local instance of git and pushed it to an empty repo on GitHub with the following commands:

> git remote add origin remote_url

> git push -u origin main

### Laravel Installation

I used Composer [https://getcomposer.org/] to install Valet [https://laravel.com/docs/9.x/valet] (a server environment for Laravel as well as the Laravel Installer [https://laravel.com/docs/9.x#your-first-laravel-project] which installs Laravel  on your machine. Composer itself can be installed via HomeBrew (make sure Composer is included in your $PATH).

Then you install the Valet installer:
> composer global require laravel/valet

Run the Valet Installer:
> valet install

Install the Laravel Installer:
> composer global require laravel/installer

And create your Laravel project:
> laravel new project-name

Regarding Valet, you can specify a default folder and display what projects are in the folder:
> valet park
> valet parked

## Usage
Figuratively LaraCrust is an online positions board for those looking for working with Laravel. Literally this a learning project for using the Laravel framework. 

## Support
GitHub + GitLab + BitBucket: BigSteveLittle

Email: bigsteve@redandblackzone.com

## Authors and Acknowledgment
Video Tutorial: AJAX Crash Course
YouTube Channel: https://www.youtube.com/c/TraversyMedia
Video Link: https://youtu.be/MYyJ4PuL4pY

## Project Status
![21% Complete](https://img.shields.io/static/v1?label=Completed&message=21%&color=green)