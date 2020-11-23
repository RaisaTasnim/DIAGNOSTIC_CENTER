@extends('website.layouts.default')

@section('content')
<div class="wrapper bgded overlay" style="background-image:url( {{asset('ui/website/images/demo/pic1.jpg')}} );">
  <div id="pageintro" class="hoc clear"> 

    <article>
      <p>Aenean ac nisl vitae lobortis</p>
      <h3 class="heading">Ultricies fusce sed ligula</h3>
      <p>Sem suscipit mollis praesent volutpat placerat nisl suspendisse</p>
      <footer><a class="btn" href="#">Potenti nunc nec urna</a></footer>
    </article>
    
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    
    <div class="sectiontitle">
      <h6 class="heading">Quis est gravida facilisis</h6>
      <p>Mauris tempor aenean pretium sem et luctus semper justo velit</p>
    </div>
    <ul class="nospace group overview">
      <li class="one_third">
        <figure><a href="#"><img src="{{asset('ui/website/images/demo/blue.jpg') }}" alt=""></a>
          <figcaption>
            <h6 class="heading">Dapibus pede tristique</h6>
            <p>Congue quam erat et dui morbi at sapien non enim blandit.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a href="#"><img src="{{asset('ui/website/images/demo/blue.jpg') }}" alt=""></a>
          <figcaption>
            <h6 class="heading">Interdum morbi posuere</h6>
            <p>Etiam consequat arcu accumsan commodo luctus nibh fringilla.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a href="#"><img src="{{asset('ui/website/images/demo/blue.jpg') }}" alt=""></a>
          <figcaption>
            <h6 class="heading">Augue non vehicula</h6>
            <p>Erat neque et tortor ut molestie ultricies quam aliquam.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a href="#"><img src="{{asset('ui/website/images/demo/blue.jpg') }}" alt=""></a>
          <figcaption>
            <h6 class="heading">Erat volutpat integer</h6>
            <p>Posuere vulputate leo nullam eu tellus phasellus aliquam.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a href="#"><img src="{{asset('ui/website/images/demo/blue.jpg') }}" alt=""></a>
          <figcaption>
            <h6 class="heading">Tellus ut libero etiam</h6>
            <p>Ut metus quisque pretium nunc fermentum volutpat velit sed.</p>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a href="#"><img src="{{asset('ui/website/images/demo/blue.jpg') }}" alt=""></a>
          <figcaption>
            <h6 class="heading">Dictum bibendum velit</h6>
            <p>Nulla iaculis pellentesque nunc felis tristique vel ultrices.</p>
          </figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


@stop