<section id="slider-section">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('img/slider/slide-3.jpg')}}" alt="Fulcrum slide one">
                <div class="carousel-caption">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('img/slider/slide-1.jpg')}}" alt="Fulcrum slide two">
                <div class="carousel-caption">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('img/slider/slide-2.jpg')}}" alt="Fulcrum slide three">
                <div class="carousel-caption">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>