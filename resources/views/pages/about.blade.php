@extends('app')

@section('content')


<h1>About me!</h1>
@if(count($people))
<h2>People I like:</h2>
<ul>
@foreach($people as $person)
<li>{{$person}}</li>

@endforeach
</ul>
@endif
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer varius nunc lacus, vitae egestas eros tempor sit amet. Maecenas eu ullamcorper turpis, eget blandit lacus. Pellentesque tincidunt orci turpis, vitae ornare libero fringilla at. Pellentesque efficitur vestibulum odio nec consequat. Pellentesque lacus dui, porttitor ac magna non, tincidunt vehicula enim. Maecenas libero ante, mollis at pellentesque eget, pretium in velit. Nullam quis tellus maximus, vulputate quam eu, sagittis mi. Cras leo mauris, tempor vitae dapibus eu, posuere ac mi. Maecenas nec auctor neque, id pretium orci. Vivamus porttitor, mauris quis aliquam vehicula, tellus ligula malesuada velit, in ullamcorper tortor est sit amet purus. Sed in ante maximus, commodo risus at, consequat purus.</p>
@endsection
</body>

</html>