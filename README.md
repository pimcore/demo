# Demo and Blue Print Application for Pimcore 6

This demo package is intended to be used by Pimcore newcomers who want to learn Pimcore and see it in action. 
It's tailored get an overview of Pimcores CMS, DAM, PIM and E-Commerce functionality and can be used as a blue print for 
E-Commerce Applications built with Pimcore. If you are an experienced Pimcore developer, have a look at the Skeleton linked below instead.

## Getting started 
```bash
COMPOSER_MEMORY_LIMIT=-1 composer create-project pimcore/demo my-project
cd ./my-project
./vendor/bin/pimcore-install
```

- Point your virtual host to `my-project/web` 
- Open https://your-host/admin in your browser
- Done! 😎

## Other demo/skeleton packages
- [Pimcore Skeleton](https://github.com/pimcore/skeleton/)
