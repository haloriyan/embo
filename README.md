# EMBO - Enterprise Module for Building Open-source
Embo is a simple way to building enterprise opensource project. Integrated PHP-JS will help you for developping a project. Have you used Laravel or CodeIgniter? You'll can use this.

## Installation
```
git clone https://github.com/haloriyan/embo.git
```

## Note for directories usage
* aksi
"aksi" directory is used for any back-end process. All process will be processed in this directory.

* aset
"aset" directory is used for save any assets what you have, like images, css, and javascripts.

* database
This directory used for databases purposes. In here, there is migration and connection configuration.

* pages
This for the view of your site. Locate all html (view) files in this folder

## Make a Controller
Control all your process with controller that can be created by accessing `http://yoursite.com/controller`. Fill the popuped form and simple controller will be created.

## Generate a Simple Page
You can create a simple page by accessing `http://yoursite.com/page` and fill the form. Generated page will be located on `pages` directory. And the assets will placed on `aset/css/style.namePage.css` for the CSS and `aset/js/script.namePage.js` for the Javascript. You can access your generated page on `http://yoursite.com/namePage`

## Database Migration
Before deploying project, migrate the database first. You can set up the table via `/database/migration.json`, for guidances, see the [DB Generator Docs](https://github.com/haloriyan/db-generator). After setting up, run `http://yoursite.com/migrate` to migrate all of your tables. And dont forget to change the database configuration which located in `/database/config.php`.

## License and Usage
EMBO is free to use. You can use embo on any project, even commercial project. But please dont delete the copyright which located on comments scripts :D