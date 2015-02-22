<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
  var $container = $('div#fantasy.pixelParallax');
  var scale = function() {
    return $container.height() > 240 ? 2 : 1;
  };
  var baseX = $container.offset().left;
  var baseY = $container.offset().top + 240;
  var layers = $container.children().map(function(_, layer) {
    return {
      $: $(layer),
      factor: $(layer).attr("data-zFactor")/10000,
      baseX : $(layer).position().left / scale(),
      baseY : $(layer).position().top / scale()
    };
  });

  var mouceHandler = function(ev) {
    var dx = (ev.pageX !== undefined ? ev.pageX : baseX) - baseX;
    var dy = (ev.pageY !== undefined ? ev.pageY : baseY) - baseY;
    $.each(layers, function(_, layer) {
      layer.$.css({
        left: layer.baseX * scale() + (dx * layer.factor) + 'px',
        top : layer.baseY * scale() + (dy * layer.factor) + 'px'
      });
    });
  };
  var motionHandler = function(ev){
    var dy = baseY / 2 + ev.accelerationIncludingGravity.y * 100;
    var dx = baseX / 2 - ev.accelerationIncludingGravity.x * 100;
    $.each(layers, function(_, layer) {
      layer.$.css({
        left: layer.baseX * scale() + (dx * layer.factor) + 'px',
        top : layer.baseY * scale() + (dy * layer.factor) + 'px'
      });
    });
  };
  if (navigator.userAgent.search(/(iPhone|iPad|Android)/) !== -1) {
    window.addEventListener('devicemotion', motionHandler);
  } else {
    document.body.addEventListener('mousemove', mouceHandler);
    window.addEventListener('resize', mouceHandler);
  }
});
</script>

<style>
div.pixelParallax {
  margin: 0 auto;
  width: 0px;
  height: 480px;
  position: relative;
}
div#fantasy.pixelParallax div {
  background-image: url(http://manaten.net/wp-content/uploads/2015/02/fantasy_2_spritex2.gif);
  display: block;
  overflow: hidden;
  position: absolute;
}
div#fantasy div.Priest {
  width: 160px; height: 192px;
  background-position: -640px -0px;
  left: 160px; top: 160px;
  z-index: 9;
}
div#fantasy div.Mage {
  width: 192px; height: 224px;
  background-position: -640px -192px;
  left: 128px; top: 0px;
  z-index: 8;
}
div#fantasy div.Fighter {
  width: 192px; height: 160px;
  background-position: -832px -192px;
  left: -320px; top: 64px;
  z-index: 7;
}
div#fantasy div.Smoke {
  width: 480px; height: 192px;
  background-position: -0px -224px;
  left: -256px; top: 224px;
  z-index: 6;
  opacity: 0.5;
}
div#fantasy div.Dragon {
  width: 640px; height: 448px;
  background-position: -544px -416px;
  left: -320px; top: 0px;
  z-index: 5;
}
div#fantasy div.Treasure {
  width: 224px; height: 192px;
  background-position: -800px -0px;
  left: -224px; top: 192px;
  z-index: 4;
}
div#fantasy div.Volcano {
  width: 480px; height: 160px;
  background-position: -0px -64px;
  left: -256px; top: 320px;
  z-index: 3;
}
div#fantasy div.BG1 {
  width: 544px; height: 288px;
  background-position: -0px -416px;
  left: -288px; top: 32px;
  z-index: 2;
}
div#fantasy div.BG2 {
  width: 416px; height: 64px;
  background-position: -0px -0px;
  left: -224px; top: 32px;
  z-index: 1;
}
@media (max-width: 640px) {
  div.pixelParallax {
    height: 240px;
  }
  div#fantasy.pixelParallax div {
    background-image: url(http://manaten.net/wp-content/uploads/2015/02/fantasy_2_sprite.gif);
  }
  div#fantasy div.Priest {
    width: 80px; height: 96px;
    background-position: -320px -0px;
    left: 80px; top: 80px;
  }
  div#fantasy div.Mage {
    width: 96px; height: 112px;
    background-position: -320px -96px;
    left: 64px; top: 0px;
  }
  div#fantasy div.Fighter {
    width: 96px; height: 80px;
    background-position: -416px -96px;
    left: -160px; top: 32px;
  }
  div#fantasy div.Smoke {
    width: 240px; height: 96px;
    background-position: -0px -112px;
    left: -128px; top: 112px;
  }
  div#fantasy div.Dragon {
    width: 320px; height: 224px;
    background-position: -272px -208px;
    left: -160px; top: 0px;
  }
  div#fantasy div.Treasure {
    width: 112px; height: 96px;
    background-position: -400px -0px;
    left: -112px; top: 96px;
  }
  div#fantasy div.Volcano {
    width: 240px; height: 80px;
    background-position: -0px -32px;
    left: -128px; top: 160px;
  }
  div#fantasy div.BG1 {
    width: 272px; height: 144px;
    background-position: -0px -208px;
    left: -144px; top: 16px;
  }
  div#fantasy div.BG2 {
    width: 208px; height: 32px;
    background-position: -0px -0px;
    left: -112px; top: 16px;
  }
}

</style>

<div class="pixelParallax" id="fantasy">
  <div class="BG2"    data-zFactor="-300"></div>
  <div class="BG1"    data-zFactor="-250"></div>
  <div class="Volcano"  data-zFactor="100"></div>
  <div class="Treasure" data-zFactor="-50"></div>
  <div class="Smoke"  data-zFactor="100"></div>
  <div class="Dragon"   data-zFactor="100"></div>
  <div class="Fighter"  data-zFactor="300"></div>
  <div class="Mage"   data-zFactor="350"></div>
  <div class="Priest"   data-zFactor="500"></div>
</div>


      <h2>連絡先</h2>
      <div class="contact">
        manaten at manaten.net か Twitter<a href="http://twitter.com/manaten" title="@manaren" target="_blank">@manaten</a>まで
      </div>
    </div>
  </div>
</div>
