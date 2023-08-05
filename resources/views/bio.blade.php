<!--Biography Page-->

@extends('layouts.layout')

@section('title', 'sioxi_bio')

@section('content')

<br><br>

<div class="card bg-dark text-white w-75 mx-auto">
    <div class="card-body d-flex align-items-center">
      <img src="{{ asset('img/imgtobeadded.png') }}" class="d-block w-25 h-25 me-4" alt="Sioxi Band">
      <div>
        <p>Welcome to the world of Sioxi - the dynamic duo of boys based in Osaka, Japan. Known for their captivating live shows, Sioxi brings a fresh and innovative sound to the music scene. As an Ironical Electro Pop band, they skillfully blend elements of irony and electronic pop, creating a unique and mesmerizing musical experience.</p>
        <p>Their music delves into the ebb and flow of emotions, riding the waves of feelings and expressing them through heartfelt lyrics that immerse listeners knee-deep in a pool of emotions. With every word carefully crafted and woven, Sioxi paints vivid and relatable stories through their music.</p>
        <p>Drawing inspiration from renowned artist Porter Robinson, Sioxi showcases a distinctive sound that resonates with fans and leaves a lasting impact. Their passion for music and dedication to their craft shine through in every performance, making each live show a truly unforgettable experience.</p>
        <p>Join us on this musical journey with Sioxi and explore the fascinating world of Ironical Electro Pop. Let the waves of emotions and innovative beats take you on a one-of-a-kind adventure that will leave you wanting more.</p>
      </div>
    </div>
  </div>
  
  <br><br>
  
  <div class="card bg-dark text-white w-75 mx-auto">
  <div class="d-flex justify-content-between w-75 mx-auto my-4">
    <img src="{{ asset('img/ryuts.jpg') }}" class="d-block w-25 h-25 rounded-circle" alt="Takano Ryuuta">
    <img src="{{ asset('img/okamochan.jpg') }}" class="d-block w-25 h-25 rounded-circle" alt="Okamotochan">
    <img src="{{ asset('img/yuj.jpg') }}" class="d-block w-25 h-25 rounded-circle" alt="Yuji">
  </div>
  
  <div class="w-75 mx-auto">
    <p>Takano Ryuuta, our lead singer and composer, is the living embodiment of an anime protagonist – charming, dramatic, and always ready to break into an epic song-and-dance routine. But wait, there's more! When he's not belting out tunes on stage, he's donning an apron and whipping up culinary masterpieces in the kitchen. Move over Gordon Ramsay, we've got our very own designated chef!</p>
    <br>
    <p>Next up, we have the one and only Okamotochan, our resident guitarist with a unique talent – the ability to sleep anywhere and everywhere, especially when it's time to go out for drinks. But don't be fooled by the napping, because deep down, he's a total cinnamon roll, sweet and lovable, adding an extra dose of charm to the chaos.</p>
    <br>
    <p>Now, let's talk about the brains behind this operation (or so he thinks) – Yuji, the website-making, karaoke-loving, aspiring programmer extraordinaire! Despite having zero knowledge of music, he believes he's the almighty karaoke god, serenading everyone with passion and gusto. And after a few shots of whiskey, behold the transformation! Yuji becomes a bona fide cowboy, ready to yee-haw and lasso anything that moves.</p>
  </div>
  </div>
  

<br><br>

@endsection