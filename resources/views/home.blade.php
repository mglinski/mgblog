{{--  --}}
@extends('layouts.main')

@section('site-content')
	<div class="blog-post">
		<h2 class="blog-post-title">Sample blog post</h2>
		<p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

		<p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
		<hr>
		<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
		<blockquote>
			<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		</blockquote>
		<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		<h2>Heading</h2>
		<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
		<h3>Sub-heading</h3>
		<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		<pre class="language-php"><code>function getTweets($hash_tag) {

    $url = 'http://search.twitter.com/search.atom?q='.urlencode($hash_tag) ;
    echo "<p>Connecting to <strong>$url</strong> ...</p>";
    $ch = curl_init($url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $xml = curl_exec ($ch);
    curl_close ($ch);

    //If you want to see the response from Twitter, uncomment this next part out:
    //echo "<p>Response:</p>";
    //echo "<pre>".htmlspecialchars($xml)."</pre>";

    $affected = 0;
    $twelement = new SimpleXMLElement($xml);
    foreach ($twelement->entry as $entry) {
        $text = trim($entry->title);
        $author = trim($entry->author->name);
        $time = strtotime($entry->published);
        $id = $entry->id;
        echo "<p>Tweet from ".$author.": <strong>".$text."</strong>  <em>Posted ".date('n/j/y g:i a',$time)."</em></p>";
    }

    return true ;
}

getTweets('#cats');</code></pre>
		<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
		<h3>Sub-heading</h3>
		<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<ul>
			<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
			<li>Donec id elit non mi porta gravida at eget metus.</li>
			<li>Nulla vitae elit libero, a pharetra augue.</li>
		</ul>
		<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
		<ol>
			<li>Vestibulum id ligula porta felis euismod semper.</li>
			<li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
			<li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
		</ol>
		<p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
	</div><!-- /.blog-post -->

	<div class="blog-post">
		<h2 class="blog-post-title">Another blog post</h2>
		<p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

		<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
		<blockquote>
			<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		</blockquote>
		<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
	</div><!-- /.blog-post -->

	<div class="blog-post">
		<h2 class="blog-post-title">New feature</h2>
		<p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

		<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<ul>
			<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
			<li>Donec id elit non mi porta gravida at eget metus.</li>
			<li>Nulla vitae elit libero, a pharetra augue.</li>
		</ul>
		<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
	</div><!-- /.blog-post -->

	<ul class="pager">
		<li><a href="#">Previous</a></li>
		<li><a href="#">Next</a></li>
	</ul>
@endsection