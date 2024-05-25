<!--Biography Page-->

@extends('layouts.layout')

@section('title', 'sioxi_bio')

@section('content')

<style>

body {
  margin: 0;
  padding: 0;
  
}

#video-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh; /* 928px; if you want to fix only in the main home page text */
  overflow: hidden;
  z-index: -1;
}

#video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(10%); /* Adjust the brightness as needed */
}

</style>

  <!--Desktop version starts here--><div id="desktopver">

<div style="overflow-x: hidden !important;"><!--Main parent container to keep things in check with the X axis-->
  <br><br><br><br><br>

  <div id="video-container">
    <video id="video" preload="auto" autoplay muted loop>
      <source src="{{ asset('img/seavid4.mp4') }}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>


  <h1 class="text-center" data-aos="fade-up" data-aos-duration="900">SIOXIってのは？</h1>

  <br><br><br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-4" data-aos="fade-right" data-aos-duration="1300">
          <!-- Content for col-4 -->
          <img src="{{ asset('img/sioxi.png') }}" class="img-fluid" alt="Sioxi Band">
        </div>
        <div class="col-md-8" data-aos="fade-left" data-aos-duration="1300">
          <!-- Content for col-8 -->
          <h5>
            ようこそ、Sioxiの世界へ！彼らは大阪を拠点とするエネルギッシュなデュオです。<br><br>
            
            Sioxiは魅力的なライブパフォーマンスで知られ、音楽シーンに新しい革新的なサウンドをもたらしています。<br><br>
            
            アイロニカル・エレクトロポップバンドとして、彼らは皮肉とエレクトロニックポップの要素を巧みにブレンドし、ユニークで魅力的な音楽体験を創り出しています。<br><br>
            
            彼らの音楽は感情の激流に没入し、心に残る歌詞を通じて感情の波に乗り、聴衆を感情のプールに膝まで浸からせます。吟味された言葉と編み上げられた音楽で、Sioxiは鮮やかで共感力のあるストーリーを描き出しています。<br><br>
            
            著名なアーティストであるポーター・ロビンソンからのインスピレーションを得て、Sioxiはファンに響く独自のサウンドを披露し、その情熱と職人技によって、各パフォーマンスが忘れられないものになります。<br><br>
            
            Sioxiとともにこの音楽の旅に参加し、アイロニカル・エレクトロポップの魅力的な世界を探索しましょう。感情の波と革新的なビートに身を委ね、まるで他にはない冒険に連れて行かれるでしょう。これはまさに、もっと欲しくなるような一体験の冒険です。</h5>
        </div>
      </div>
    </div>
    
    <br><br><br><br><br><br>
      <hr>
    <br><br>

    <h1 class="text-center" data-aos="fade-up">バンドメンバーと協力者</h1>

    <br><br><br><br>
    
    <div class="container mx-auto">
      <div class="row align-items-center">
          <div class="col-md-4" data-aos="fade-right">
              <img src="{{ asset('img/ryuts2.jpg') }}" class="rounded-circle img-fluid" alt="Takano Ryuuta">
          </div>
          <div class="col-md-8" data-aos="fade-left">
            <br><br><h5>鷹野隆太（Takano Ryuta）<br><br>
                &middot;ポジション: 歌手<br><br>
                &middot;特技: いつもおしゃれで、正義の味方（できる限り）。酒をたくさん飲んでも酔わない（羨ましい！）。<br><br>
                &middot;その他: バンドの歌詞も手がけ、ステージ上でカリスマ性を発揮。シェフなので食べ物のレパートリーも一級品。</h5>
          </div>
      </div>
    
      <br><br><br><br>
    
      <div class="row align-items-center">
          <div class="col-md-8 order-md-1 order-2" data-aos="fade-left">
                <h5>ユウジ（Yuji）<br><br><br>
                &middot;ポジション: バンドメンバーではない、ただのウェブサイトの開発者<br><br>
                &middot;特技: 遠いところからの旅人で、皆が大好きのバカ外人。ウィスキーショット3杯飲むとカウボーイに変身する。<br><br>
                &middot;その他: タフなふりをするが、実はソフトで人懐っこい。食べ飲み放題がいつも挑戦しているが、結局おなかいっぱいになって最初にあきらめる。</h5>
          </div>
          <div class="col-md-4 order-md-2 order-1" data-aos="fade-right">
             <img src="{{ asset('img/yuj.jpg') }}" class="rounded-circle img-fluid" alt="Yuji">
          </div>
      </div>
    


          </div>
      </div>
    </div>  
</div>    

  <br><br><br><br>

  <!--Desktop version ends here--></div>


<!--Mobile version starts here--><div id="mobilever">

  <div style="overflow-x: hidden !important;"><!--Main parent container to keep things in check with the X axis-->
  
    <div id="video-container">
      <video id="video" preload="auto" autoplay muted loop>
        <source src="{{ asset('img/seavid4.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

  <h1 class="text-center" data-aos="fade-up" data-aos-duration="900">SIOXIってのは？</h1>

  <br>

    <div class="container">
      <div class="row">
        <div class="col-md-4" data-aos="fade-right" data-aos-duration="1300">
          <!-- Content for col-4 -->
          <img src="{{ asset('img/sioxi.png') }}" class="img-fluid" alt="Sioxi Band">
        </div>
        <div class="col-md-8" data-aos="fade-left" data-aos-duration="1300">
          <!-- Content for col-8 -->
          <h5>
            ようこそ、Sioxiの世界へ！彼らは大阪を拠点とするエネルギッシュなデュオです。<br><br>
            
            Sioxiは魅力的なライブパフォーマンスで知られ、音楽シーンに新しい革新的なサウンドをもたらしています。<br><br>
            
            アイロニカル・エレクトロポップバンドとして、彼らは皮肉とエレクトロニックポップの要素を巧みにブレンドし、ユニークで魅力的な音楽体験を創り出しています。<br><br>
            
            彼らの音楽は感情の激流に没入し、心に残る歌詞を通じて感情の波に乗り、聴衆を感情のプールに膝まで浸からせます。吟味された言葉と編み上げられた音楽で、Sioxiは鮮やかで共感力のあるストーリーを描き出しています。<br><br>
            
            著名なアーティストであるポーター・ロビンソンからのインスピレーションを得て、Sioxiはファンに響く独自のサウンドを披露し、その情熱と職人技によって、各パフォーマンスが忘れられないものになります。<br><br>
            
            Sioxiとともにこの音楽の旅に参加し、アイロニカル・エレクトロポップの魅力的な世界を探索しましょう。感情の波と革新的なビートに身を委ね、まるで他にはない冒険に連れて行かれるでしょう。これはまさに、もっと欲しくなるような一体験の冒険です。</h5>
        </div>
      </div>
    </div>
    
    <br><br><br><br><br><br>
      <hr>
    <br><br>

    <h1 class="text-center" data-aos="fade-up">メンバーと協力者</h1>

    <br><br><br><br>
    
    <div class="container mx-auto text-center">
      <div class="row align-items-center">
          <div class="col-md-4" data-aos="fade-right">
              <img src="{{ asset('img/ryuts2.jpg') }}" class="rounded-circle img-fluid" alt="Takano Ryuuta">
          </div>
          <div class="col-md-8" data-aos="fade-left">
            <br><br><h3>鷹野隆太（Takano Ryuta）</h3><br><br>
               <h5>ポジション:  歌手<br><br>
               特技:  いつもおしゃれで、正義の味方（できる限り）。酒をたくさん飲んでも酔わない（羨ましい！）。<br><br>
               その他:  バンドの歌詞も手がけ、ステージ上でカリスマ性を発揮。シェフなので食べ物のレパートリーも一級品。</h5>
          </div>
      </div>

      <br><br>
      <hr>
      <br><br>

      <div class="container mx-auto text-center">
        <div class="row align-items-center">
            <div class="col-md-4" data-aos="fade-right">
                <img src="{{ asset('img/yuj.jpg') }}" class="rounded-circle img-fluid" alt="Yuji">
            </div>
            <div class="col-md-8" data-aos="fade-left">
              <br><br><h3>ユウジ（Yuji）</h3><br><br>
                <h5>ポジション: バンドメンバーではない、ただのウェブサイトの開発者<br><br>
                特技: 遠いところからの旅人で、皆が大好きのバカ外人。ウィスキーショット3杯飲むとカウボーイに変身する。<br><br>
                その他: タフなふりをするが、実はソフトで人懐っこい。食べ飲み放題がいつも挑戦しているが、結局おなかいっぱいになって最初にあきらめる。</h5>
            </div>
        </div>
  
          </div>
      </div>
    </div>  
</div>    

  <br><br><br><br>

<!--Mobile version ends here--></div>  

@endsection