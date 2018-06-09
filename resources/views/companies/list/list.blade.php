@extends('layouts.app')

@section('content')

    <main id="maincontent">
        <section class="employe_list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs2">
                            <li class="active"><a data-toggle="tab" href="#Top">Top</a></li>
                            <li><a data-toggle="tab" href="#A">A</a></li>
                            <li><a data-toggle="tab" href="#B">B</a></li>
                            <li><a data-toggle="tab" href="#C">C</a></li>
                            <li><a data-toggle="tab" href="#D">D</a></li>
                            <li><a data-toggle="tab" href="#E">E</a></li>
                            <li><a data-toggle="tab" href="#F">F</a></li>
                            <li><a data-toggle="tab" href="#G">G</a></li>
                            <li><a data-toggle="tab" href="#H">H</a></li>
                            <li><a data-toggle="tab" href="#I">I</a></li>
                            <li><a data-toggle="tab" href="#J">J</a></li>
                            <li><a data-toggle="tab" href="#K">K</a></li>
                            <li><a data-toggle="tab" href="#L">L</a></li>
                            <li><a data-toggle="tab" href="#M">M</a></li>
                            <li><a data-toggle="tab" href="#N">N</a></li>
                            <li><a data-toggle="tab" href="#O">O</a></li>
                            <li><a data-toggle="tab" href="#B">P</a></li>
                            <li><a data-toggle="tab" href="#Q">Q</a></li>
                            <li><a data-toggle="tab" href="#R">R</a></li>
                            <li><a data-toggle="tab" href="#S">S</a></li>
                            <li><a data-toggle="tab" href="#T">T</a></li>
                            <li><a data-toggle="tab" href="#U">U</a></li>
                            <li><a data-toggle="tab" href="#V">V</a></li>
                            <li><a data-toggle="tab" href="#W">W</a></li>
                            <li><a data-toggle="tab" href="#X">X</a></li>
                            <li><a data-toggle="tab" href="#Y">Y</a></li>
                            <li><a data-toggle="tab" href="#Z">Z</a></li>
                        </ul>
                        <div class="tab-content">
                            @include('companies.list.companies')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection