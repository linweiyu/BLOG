@extends('layouts.admin')

@section('content')

    <div class="et bmj">
        <div class="bls">
            <div class="blt">
                <h6 class="blv">Dashboards</h6>
                <h2 class="blu">Overview</h2>
            </div>
        </div>

        <hr class="aah">

        <div class="dh ard aav">
            <div class="eo aaq ahj">
                <div class="atv acw">
                    <canvas
                            class="bkx"
                            width="200" height="200"
                            data-chart="doughnut"
                            data-dataset="[230, 130]"
                            data-dataset-options="{ backgroundColor: ['#1ca8dd', '#1bc98e'] }"
                            data-labels="['Returning', 'New']">
                    </canvas>
                </div>
                <strong class="asd">Traffic</strong>
                <h4>New vs Returning</h4>
            </div>
            <div class="eo aaq ahj">
                <div class="atv acw">
                    <canvas
                            class="bkx"
                            width="200" height="200"
                            data-chart="doughnut"
                            data-dataset="[330, 30]"
                            data-dataset-options="{ backgroundColor: ['#1ca8dd', '#1bc98e'] }"
                            data-labels="['Returning', 'New']">
                    </canvas>
                </div>
                <strong class="asd">Revenue</strong>
                <h4>New vs Recurring</h4>
            </div>
            <div class="eo aaq ahj">
                <div class="atv acw">
                    <canvas
                            class="bkx"
                            width="200" height="200"
                            data-chart="doughnut"
                            data-dataset="[100, 260]"
                            data-dataset-options="{ backgroundColor: ['#1ca8dd', '#1bc98e'] }"
                            data-labels="['Referrals', 'Direct']">
                    </canvas>
                </div>
                <strong class="asd">Traffic</strong>
                <h4>Direct vs Referrals</h4>
            </div>
        </div>

        <div class="bkz aav aaj">
            <h3 class="bla blb">Quick stats</h3>
        </div>

        <div class="dh bmk">
            <div class="eq fp aaj ahq ano">
                <div class="bml bks">
                    <div class="abw">
                        <span class="bkn">Page views</span>
                        <h2 class="bkm">
                            1,293
                            <small class="bko bkp">5%</small>
                        </h2>
                        <hr class="bkw zo">
                    </div>
                    <canvas id="sparkline1" width="378" height="94"
                            class="bmm"
                            data-chart="spark-line"
                            data-dataset="[[28,68,41,43,96,45,100]]"
                            data-labels="['a','b','c','d','e','f','g']"
                            style="width: 189px; height: 47px;"></canvas>
                </div>
            </div>
            <div class="eq fp aaj ahq ano">
                <div class="bml bkv">
                    <div class="abw">
                        <span class="bkn">Downloads</span>
                        <h2 class="bkm">
                            758
                            <small class="bko bkq">1.3%</small>
                        </h2>
                        <hr class="bkw zo">
                    </div>
                    <canvas id="sparkline1" width="378" height="94"
                            class="bmm"
                            data-chart="spark-line"
                            data-dataset="[[4,34,64,27,96,50,80]]"
                            data-labels="['a','b','c','d','e','f','g']"
                            style="width: 189px; height: 47px;"></canvas>
                </div>
            </div>
            <div class="eq fp aaj ahq ano">
                <div class="bml bkt">
                    <div class="abw">
                        <span class="bkn">Sign-ups</span>
                        <h2 class="bkm">
                            1,293
                            <small class="bko bkp">6.75%</small>
                        </h2>
                        <hr class="bkw zo">
                    </div>
                    <canvas id="sparkline1" width="378" height="94"
                            class="bmm"
                            data-chart="spark-line"
                            data-dataset="[[12,38,32,60,36,54,68]]"
                            data-labels="['a','b','c','d','e','f','g']"
                            style="width: 189px; height: 47px;"></canvas>
                </div>
            </div>
            <div class="eq fp aaj ahq ano">
                <div class="bml bku">
                    <div class="abw">
                        <span class="bkn">Downloads</span>
                        <h2 class="bkm">
                            758
                            <small class="bko bkq">1.3%</small>
                        </h2>
                        <hr class="bkw zo">
                    </div>
                    <canvas id="sparkline1" width="378" height="94" class="bmm"
                            data-chart="spark-line"
                            data-dataset="[[43,48,52,58,50,95,100]]"
                            data-labels="['a','b','c','d','e','f','g']"
                            style="width: 189px; height: 47px;"></canvas>
                </div>
            </div>
        </div>

        <hr class="aav">

        <div class="dh">
            <div class="eq aax">
                <div class="by aaj">
                    <h6 class="atf">
                        Countries
                    </h6>

                    <a class="mo od tc ra" href="#">
                        <span class="atg" style="width: 62.4%;"></span>
                        <span>United States</span>
                        <span class="asd">62.4%</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span class="atg" style="width: 15.0%;"></span>
                        <span>India</span>
                        <span class="asd">15.0%</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span class="atg" style="width: 5.0%;"></span>
                        <span>United Kingdom</span>
                        <span class="asd">5.0%</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span class="atg" style="width: 5.0%;"></span>
                        <span>Canada</span>
                        <span class="asd">5.0%</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span class="atg" style="width: 4.5%;"></span>
                        <span>Russia</span>
                        <span class="asd">4.5%</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span class="atg" style="width: 2.3%;"></span>
                        <span>Mexico</span>
                        <span class="asd">2.3%</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span class="atg" style="width: 1.7%;"></span>
                        <span>Spain</span>
                        <span class="asd">1.7%</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span class="atg" style="width: 1.5%;"></span>
                        <span>France</span>
                        <span class="asd">1.5%</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span class="atg" style="width: 1.4%;"></span>
                        <span>South Africa</span>
                        <span class="asd">1.4%</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span class="atg" style="width: 1.2%;"></span>
                        <span>Japan</span>
                        <span class="asd">1.2%</span>
                    </a>

                </div>
                <a href="#" class="ce ko acb">All countries</a>
            </div>
            <div class="eq aax">
                <div class="by aaj">
                    <h6 class="atf">
                        Most visited pages
                    </h6>

                    <a class="mo od tc ra" href="#">
                        <span>/ (Logged out)</span>
                        <span class="asd">3,929,481</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span>/ (Logged in)</span>
                        <span class="asd">1,143,393</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span>/tour</span>
                        <span class="asd">938,287</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span>/features/something</span>
                        <span class="asd">749,393</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span>/features/another-thing</span>
                        <span class="asd">695,912</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span>/users/username</span>
                        <span class="asd">501,938</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span>/page-title</span>
                        <span class="asd">392,842</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span>/some/page-slug</span>
                        <span class="asd">298,183</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span>/another/directory/and/page-title</span>
                        <span class="asd">193,129</span>
                    </a>

                    <a class="mo od tc ra" href="#">
                        <span>/one-more/page/directory/file-name</span>
                        <span class="asd">93,382</span>
                    </a>

                </div>
                <a href="#" class="ce ko acb">View all pages</a>
            </div>
        </div>

        <div class="by aaj">
            <h6 class="atf">
                Devices and resolutions
            </h6>

            <a class="mo od tc ra" href="#">
                <span>Desktop (1920x1080)</span>
                <span class="asd">3,929,481</span>
            </a>

            <a class="mo od tc ra" href="#">
                <span>Desktop (1366x768)</span>
                <span class="asd">1,143,393</span>
            </a>

            <a class="mo od tc ra" href="#">
                <span>Desktop (1440x900)</span>
                <span class="asd">938,287</span>
            </a>

            <a class="mo od tc ra" href="#">
                <span>Desktop (1280x800)</span>
                <span class="asd">749,393</span>
            </a>

            <a class="mo od tc ra" href="#">
                <span>Tablet (1024x768)</span>
                <span class="asd">695,912</span>
            </a>

            <a class="mo od tc ra" href="#">
                <span>Tablet (768x1024)</span>
                <span class="asd">501,938</span>
            </a>

            <a class="mo od tc ra" href="#">
                <span>Phone (320x480)</span>
                <span class="asd">392,842</span>
            </a>

            <a class="mo od tc ra" href="#">
                <span>Phone (720x450)</span>
                <span class="asd">298,183</span>
            </a>

            <a class="mo od tc ra" href="#">
                <span>Desktop (2560x1080)</span>
                <span class="asd">193,129</span>
            </a>

            <a class="mo od tc ra" href="#">
                <span>Desktop (2560x1600)</span>
                <span class="asd">93,382</span>
            </a>

        </div>
        <a href="#" class="ce ko acb">View all devices</a>

    </div>
    @endsection