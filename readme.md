
##Application Information

                           
####This project is created as an increasingly complete application for managing services and service providers.

It allows people to list their ability to provide a series of services - examples might include companies that provide gardening services, or freelance programmers who offer specific skills. Potential employers in need of these services can find matching service providers.

This is not intended to be a turn-key business, but a base application and an example of technology implementation. Anyone wishing to implement an application using this as a base should <a href="https://github.com/myclientinfo/services">fork the repository on github</a>.

##ToDo

This list of features should shrink over time.

* An [admin interface](http://laravelpanel.com/) is needed to provide lookup table information.
* [Cucumber/behat](https://github.com/Behat/Behat) based acceptance testing
* [Codeship](https://codeship.com/) - Cloud based continuous integration and deployment
* [Blackfire.io](https://blackfire.io) - Profiler to test and manage performance
* Redis caching of lookup tables and search results

##Technology

This application platform is built on a core of the Laravel PHP framework - particularly Laravel 5.2. it uses Laravel's built-in Elixir as a wrapper around gulp for pre-processing.

##Instructions

This can be forked or checked out directly, and then installed as per any other Laravel app. Run `composer install` to install PHP dependencies, and run `gulp` to build javascript and CSS resources. Further instructions are below.

##Omissions

Some core functionality is deliberately missing. Chief among these is support for "regions" or location based searching. Correct use of regions and associations is enormously individual to the project and locality.

##More Detailed Installation Instructions

####Gaining Access

Any business built on this base application should [fork the git repository](https://help.github.com/articles/fork-a-repo/) in order to create a clean foundation for development. Syncing with upstream will allow any new features to be gained.

####Application Setup

Once on a capable environment, run <code>composer install</code> to build PHP dependencies. Set up configuration <a href="https://laravel.com/docs/5.2#confiugration">as per Laravel docs</a>. Run `artisan migrate` to build an empty database structure. Alternatively run `artisan migrate:refresh --seed` to build test data via [model factories](https://laravel.com/docs/5.2/seeding#using-model-factories).

####Customising your Application

Most visual changes can be done by modifying the app.scss file and blade templates. Customising of application functionality will depend a great deal on specific requirements.

Details of this must be left up to the developer.