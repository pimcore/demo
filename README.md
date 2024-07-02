# Demo and Blue Print Application for Pimcore

This demo package is intended to be used by Pimcore newcomers who want to learn Pimcore and see it in action. 
It's tailored get an overview of Pimcores CMS, DAM, PIM and E-Commerce functionality and can be used as a blue print for 
E-Commerce Applications built with Pimcore. If you are an experienced Pimcore developer, have a look at the Skeleton linked below instead.

## Getting started 
```bash
COMPOSER_MEMORY_LIMIT=-1 composer create-project pimcore/demo my-project
cd ./my-project
./vendor/bin/pimcore-install
```

- Point your virtual host to `my-project/public`
- [Only for Apache] Create `my-project/public/.htaccess` according to https://pimcore.com/docs/platform/Pimcore/Installation_and_Upgrade/System_Setup_and_Hosting/Apache_Configuration/ 
- Open https://your-host/admin in your browser
- Done! 😎


## Docker

You can also use Docker to setup a new Pimcore Installation.
You don't need to have a PHP environment with composer installed.

### Prerequisits

* Your user must be allowed to run docker commands (directly or via sudo).
* You must have docker-compose installed.
* Your user must be allowed to change file permissions (directly or via sudo).

### Follow these steps

1. Initialize the demo project using the `pimcore/pimcore` image
    ``docker run -u `id -u`:`id -g` --rm -v `pwd`:/var/www/html pimcore/pimcore:php8.3-latest composer create-project pimcore/demo my-project``
1. Go to your new project
    `cd my-project/`
1. Part of the new project is a docker compose file
    * Run `` echo `id -u`:`id -g` `` to retrieve your local user and group id
    * Open the `docker-compose.yaml` file in an editor, uncomment all the `user: '1000:1000'` lines and update the ids if necessary
    * Start the needed services with `docker compose up -d`
1. Install pimcore and initialize the DB
    `docker compose exec php vendor/bin/pimcore-install --mysql-host-socket=db --mysql-username=pimcore --mysql-password=pimcore --mysql-database=pimcore`
    * When asked for admin user and password: Choose freely
    * This can take a while, up to 20 minutes
1. :heavy_check_mark: DONE - You can now visit your pimcore-demo:
    * The frontend: <http://localhost>
    * The admin interface, using the credentials you have chosen above:
      <http://localhost/admin>

## Pimcore Platform Version
By default, Pimcore Platform Version is added as a dependency which ensures installation of compatible and in combination 
with each other tested versions of additional Pimcore modules. More information about the Platform Version can be found in the 
[Platform Version docs](https://github.com/pimcore/platform-version). 

It might be necessary to update a specific Pimcore module to a version that is not included in the Platform Version.
In that case, you need to remove the `platform-version` dependency from your `composer.json` and update the module to
the desired version.
Be aware that this might lead to a theoretically compatible but untested combination of Pimcore modules.

## Other demo/skeleton packages
- [Pimcore Skeleton](https://github.com/pimcore/skeleton/)
