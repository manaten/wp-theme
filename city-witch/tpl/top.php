    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/top.css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type='text/javascript'>
    $(function() {
      var baseX = $('#top-image').offset().left + 200;
      var baseY = $('#top-image').offset().top  + 150;
      var layers = $('#top-image').children().map(function(_, layer) {
        return {
          $: $(layer),
          factor:$(layer).data("z")/10000,
          baseX: $(layer).position().left,
          baseY: $(layer).position().top
        };
      });
      var isSmartphone = navigator.userAgent.search(/(iPhone|iPad|Android)/) !== -1;
      !isSmartphone && $(document.body).mousemove(function(ev) {
        var dx = ev.pageX - baseX;
        var dy = ev.pageY - baseY;
        $.each(layers, function(_, layer) {
          layer.$.css({
            left: layer.baseX + (dx*layer.factor) +"px",
            top:  layer.baseY + (dy*layer.factor) +"px" });
        });
      });
      isSmartphone && window.addEventListener("devicemotion", function(ev){
        var dy = baseY/2 + ev.accelerationIncludingGravity.y*100;
        var dx = baseX/2 - ev.accelerationIncludingGravity.x*100;
        $.each(layers, function(_, layer) {
          layer.$.css({
            left: layer.baseX + (dx*layer.factor) +"px",
            top:  layer.baseY + (dy*layer.factor) +"px" });
        });
      });
    });
    </script>
    <div id="top-image">
      <div class="layer5" data-z="-100"></div>
      <div class="layer4" data-z="50"></div>
      <div class="layer3" data-z="150"></div>
      <div class="layer2" data-z="300"></div>
      <div class="layer1" data-z="400"></div>
    </div>
<!--
      <div id="topImageNote">
        top image: <a href="http://manaten.net/archives/427">ドット絵でパララクス効果</a>
      </div>
 -->
      <h2>連絡先</h2>
      <div class="contact">
        manaten at manaten.net か Twitter<a href="http://twitter.com/manaten" title="@manaren" target="_blank">@manaten</a>まで
      </div>
    </div>
  </div>
</div>
