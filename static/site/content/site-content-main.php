<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>

    <div id="message-1"
         class="d-flex justify-content-between align-items-center p-3 my-3 text-white-50 bg-warning rounded shadow"
         style="display: none !important;">
        <i class="fas fa-exclamation-triangle mr-3 message-symbol"></i>
        <div class="lh-100">
            <h6 class="mb-0 text-dark lh-100">Warnung</h6>
            <small class="text-dark">Diese Seite ist noch nicht fertig, daher steht hier Testweise eine
                Menge
                Text, unter Anderem
                auch Lorem Ipsum: Ein schöner Test, Eins, Zwei, Drei, Vier und Fünf
                <br/>
                <span class="date-today"></span>
            </small>
        </div>
        <div class="p-2">
            <button class="btn btn-dark float-right"><i class="fas fa-times"></i></button>
        </div>
    </div>

    <div id="message-2"
         class="d-flex justify-content-between align-items-center p-3 my-3 text-white-50 bg-danger rounded shadow"
         style="display: none !important;">
        <i class="fas fa-exclamation-triangle mr-3 message-symbol"></i>
        <div class="lh-100">
            <h6 class="mb-0 text-dark lh-100">Gefahr</h6>
            <small class="text-dark">Diese Seite ist noch nicht fertig, daher steht hier Testweise eine
                Menge
                Text, unter Anderem
                auch Lorem Ipsum: Ein schöner Test, Eins, Zwei, Drei, Vier und Fünf
                <br/>
                <span class="date-today"></span>
            </small>
        </div>
        <div class="p-2">
            <button class="btn btn-dark float-right"><i class="fas fa-times"></i></button>
        </div>
    </div>

    <div id="message-3"
         class="d-flex justify-content-between align-items-center p-3 my-3 text-white-50 bg-light rounded shadow"
         style="display: none !important;">
        <i class="fas fa-info mr-3 message-symbol"></i>
        <div class="lh-100">
            <h6 class="mb-0 text-dark lh-100">Information</h6>
            <small class="text-dark">Diese Seite ist noch nicht fertig, daher steht hier Testweise eine
                Menge
                Text, unter Anderem
                auch Lorem Ipsum: Ein schöner Test, Eins, Zwei, Drei, Vier und Fünf
                <br/>
                <span class="date-today"></span>
            </small>
        </div>
        <div class="p-2">
            <button class="btn btn-dark float-right"><i class="fas fa-times"></i></button>
        </div>
    </div>

    <div id="message-4"
         class="d-flex justify-content-between align-items-center p-3 my-3 text-white-50 bg-success rounded shadow"
         style="display: none !important;">
        <i class="fas fa-check mr-3 message-symbol"></i>
        <div class="lh-100">
            <h6 class="mb-0 text-dark lh-100">Abgeschlossen</h6>
            <small class="text-dark">Diese Seite ist noch nicht fertig, daher steht hier Testweise eine
                Menge
                Text, unter Anderem
                auch Lorem Ipsum: Ein schöner Test, Eins, Zwei, Drei, Vier und Fünf
                <br/>
                <span class="date-today"></span>
            </small>
        </div>
        <div class="p-2">
            <button class="btn btn-dark float-right"><i class="fas fa-times"></i></button>
        </div>
    </div>


    <h3 class="border-bottom">Section title</h3>

    <!--Rolladen POSTs-->
    <div class="my-3 p-3 bg-white rounded box-shadow">

        <div class="row">

            <form action="steuerung.php" method="post" class="m-3">
                <button type="submit" class="btn btn-primary" name="rauf">Rolladen hoch</button>
            </form>

            <form action="steuerung.php" method="post" class="m-3">
                <button type="submit" class="btn btn-primary" name="runter">Rolladen runter</button>
            </form>

            <form action="steuerung.php" method="post" class="m-3">
                <button type="submit" class="btn btn-secondary" name="fix">Fix</button>
            </form>

            <!--<form action="test-python.php" method="post" class="m-3">
                <button type="submit" class="btn btn-primary" name="testpy">Test Python</button>
            </form>-->

        </div>

    </div>

    <!--Das ist ein Highcharts Diagramm-->
    <!--<div id="chart" class="d-flex pt-3"></div>
    <script type="text/javascript">

        $.getJSON(
            '../app/model/usdeur.json',
            function (data) {

                Highcharts.chart('chart', {
                    chart: {
                        zoomType: 'x'
                    },
                    title: {
                        text: 'USD to EUR exchange rate over time'
                    },
                    subtitle: {
                        text: document.ontouchstart === undefined ?
                            'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
                    },
                    xAxis: {
                        type: 'datetime'
                    },
                    yAxis: {
                        title: {
                            text: 'Exchange rate'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    plotOptions: {
                        area: {
                            fillColor: {
                                linearGradient: {
                                    x1: 0,
                                    y1: 0,
                                    x2: 0,
                                    y2: 1
                                },
                                stops: [
                                    [0, '#DC143C'],
                                    [1, Highcharts.Color('#DC143C').setOpacity(0).get('rgba')]
                                ]
                            },
                            marker: {
                                radius: 2
                            },
                            lineWidth: 1,
                            states: {
                                hover: {
                                    lineWidth: 1
                                }
                            },
                            threshold: null
                        },
                        line: {
                            color: '#DC143C'
                        }
                    },

                    series: [{
                        lineColor: Highcharts.getOptions().colors[1],
                        /*color: Highcharts.getOptions().colors[2],*/
                        type: 'area',
                        name: 'USD to EUR',
                        data: data
                    }]
                });
            }
        );
    </script>-->

    <!--Tabelle-->
    <!--<div class="d-flex table-responsive pt-3">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            <tr>
                <td>1,002</td>
                <td>amet</td>
                <td>consectetur</td>
                <td>adipiscing</td>
                <td>elit</td>
            </tr>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            <tr>
                <td>1,002</td>
                <td>amet</td>
                <td>consectetur</td>
                <td>adipiscing</td>
                <td>elit</td>
            </tr>
            </tbody>
        </table>
    </div>-->

    <!--Ein Feed, hier mit Nutzernamen-->
    <!--<div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt=""
                 class="mr-2 rounded">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@username</strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
        </div>
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=e83e8c&fg=e83e8c&size=1" alt=""
                 class="mr-2 rounded">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@username</strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
        </div>
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt=""
                 class="mr-2 rounded">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@username</strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
        </div>
        <small class="d-block text-right mt-3">
            <a href="#">All updates</a>
        </small>
    </div>-->

    <!--Eine andere form von Feed/Liste, Fokus auf Items/Benutzer-->
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Suggestions</h6>
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt=""
                 class="mr-2 rounded">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Full Name <span class="badge badge-primary badge-admin">Admin <i
                                    class="fas fa-crown"></i></span></strong>
                    <a href="#">Follow</a>
                </div>
                <span class="d-block">@username</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt=""
                 class="mr-2 rounded">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Full Name <span
                                class="badge badge-primary badge-moderator">Moderator <i class="fas fa-star"></i></span></strong>
                    <a href="#">Follow</a>
                </div>
                <span class="d-block">@username</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt=""
                 class="mr-2 rounded">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Full Name <span
                                class="badge badge-primary badge-protector">Protector <i class="fas fa-shield-alt"></i></span></strong>
                    <a href="#">Follow</a>
                </div>
                <span class="d-block">@username</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt=""
                 class="mr-2 rounded">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Full Name <span
                                class="badge badge-primary badge-spy">Spy <i
                                    class="fas fa-user-secret"></i></span></strong>
                    <a href="#">Follow</a>
                </div>
                <span class="d-block">@username</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt=""
                 class="mr-2 rounded">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Full Name <span
                                class="badge badge-primary badge-ninja">Ninja <i
                                    class="fas fa-user-ninja"></i></span></strong>
                    <a href="#">Follow</a>
                </div>
                <span class="d-block">@username</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt=""
                 class="mr-2 rounded">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Full Name
                        <span class="badge badge-primary badge-fire">Fire <i class="fab fa-hotjar"></i></span>
                        <span class="badge badge-primary badge-supporter">Supporter <i
                                    class="fas fa-user-tie"></i></span></strong>
                    <a href="#">Follow</a>
                </div>
                <span class="d-block">@username</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt=""
                 class="mr-2 rounded">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Full Name
                        <span class="badge badge-primary badge-ice">Ice <i
                                    class="fas fa-snowflake"></i></span>
                        <span class="badge badge-primary badge-user">User <i
                                    class="fas fa-user"></i></span></strong>
                    <a href="#">Follow</a>
                </div>
                <span class="d-block">@username</span>
            </div>
        </div>
        <small class="d-block text-right mt-3">
            <a href="#">All suggestions</a>
        </small>
    </div>
</main>