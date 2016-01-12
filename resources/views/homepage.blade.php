@extends('index')

@section('content')

    <div class="wrapper">
        <div class="landing-header" style="background-image: url('img/pexels-photo-walking-small.jpg');">
            <div class="container">
                <div class="motto">
                    <h1 class="title-uppercase">Service Search</h1>
                    <h3>Locate providers of hourly or temporary freelance services.</h3>
                    <br />
                    <a href="/search" class="btn">Demonstration</a>
                    <a href="https://github.com/myclientinfo/services" class="btn"><i class="fa fa-github"></i> Github page</a>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="section landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- <h2>Let's talk product</h2>
                            <h5>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                            -->
                            <h2>Application Information</h2>

                            <h5>This project is created as an increasingly complete application for managing services and service providers.</5>
                            <p></p>
                            <p>It allows people to list their ability to provide a series of services - examples might include companies that provide gardening services, or freelance programmers who offer specific skills. Potential employers in need of these services can find matching service providers.</p>

                            <p>This is not intended to be a turn-key business, but a base application and an example of technology implementation. Anyone wishing to implement an application using this as a base should <a href="https://github.com/myclientinfo/services">fork the repository on github</a>.</p>
                            <!--
                            <br />
                            <a href="/search" class="btn btn-danger btn-fill">See in use</a>
                            -->
                        </div>
                        <div class="col-md-4">
                            <h2>ToDo</h2>

                            <p>This list of features should shrink over time.</p>

                            <ul style="margin-left: -20px;">
                                <li>An <a href="http://laravelpanel.com/">admin interface</a> is needed to provide lookup table information.</li>
                                <li><a href="https://github.com/Behat/Behat">Cucumber/behat</a> based acceptance testing</li>
                                <li><a href="https://codeship.com/">Codeship</a> - Cloud based continuous integration and deployment</li>
                                <li><a href="https://blackfire.io/">Blackfire.io</a> - Profiler to test and manage performance</li>
                                <li>Redis caching of lookup tables and search results</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-light-brown landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 column">
                            <h4><i class="fa fa-cubes"> </i> &nbsp;Technology</h4>
                            <p>This application platform is built on a core of the Laravel PHP framework - particularly Laravel 5.2. it uses Laravel's built-in Elixir as a wrapper around gulp for pre-processing.</p>
                        </div>
                        <div class="col-md-4 column">
                            <h4><i class="fa fa-map"> </i> &nbsp;Instructions</h4>
                            <p>This can be forked or checked out directly, and then installed as per any other Laravel app. Run <code>composer install</code> to install PHP dependencies, and run <code>gulp</code> to build javascript and CSS resources. Further instructions are below. </p>
                        </div>
                        <div class="col-md-4 column">
                            <h4><i class="fa fa-ban"> </i> &nbsp;Omissions</h4>
                            <p>Some core functionality is deliberately missing. Chief among these is support for "regions" or location based searching. Correct use of regions and associations is enormously individual to the project and locality.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-dark text-center landing-section">
                <div class="container">
                    <h2>More Detailed Installation Instructions</h2>
                    <div class="col-md-4">
                        <div class="team-player">
                            <h5>Gaining Access <br /><small class="text-muted">Fork on github </small></h5>
                            <p>Any business built on this base application should <a href="https://help.github.com/articles/fork-a-repo/">fork the git repository</a> in order to create a clean foundation for development. Syncing with upstream will allow any new features to be gained.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <h5>Application Setup <br /><small class="text-muted">Laravel Install</small></h5>
                            <p>Once on a capable environment, run <code>composer install</code> to build PHP dependencies. Set up configuration <a href="https://laravel.com/docs/5.2#confiugration">as per Laravel docs</a>. Run <code>artisan migrate</code> to build an empty database structure. Alternatively run <code>artisan migrate:refresh --seed</code> to build test data via <a href="https://laravel.com/docs/5.2/seeding#using-model-factories">model factories</a>.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <h5>Customising <br /><small class="text-muted">Make your application</small></h5>
                            <p>Most visual changes can be done by modifying the app.scss file and blade templates. Customising of application functionality will depend a great deal on specific requirements.</p>

                            <p>Details of this must be left up to the developer.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@stop