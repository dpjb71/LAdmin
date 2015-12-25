<?php
namespace Ladmin\Controllers;

use Phoenix\Web\UI\TControl;

class Accordion extends TControl
{
    
       	public function createObjects() {	}	public function declareObjects() {	}	public function displayHtml() {?><link type="text/css" rel="stylesheet" href="css/accordion.css" />
<script type="text/javascript" src="js/accordion.js" ></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".accordion").multiaccordion({defaultIcon: "ui-icon-plusthick",
    activeIcon: "ui-icon-minusthick"});
  });

</script>
    <div id="jquery-script-menu">
<div class="jquery-script-center">


<h1 style="margin:150px auto 30px auto; text-align:center">jQuery multiAccordion Plugin Examples</h1>
<!-- example 1 -->
<div class="accordion blue ui-accordion ui-widget">
  <h3 class="ui-accordion-header ui-state-active ui-accordion-header-active">
      <span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span>
      Simple Accordion 1
  </h3>
  <div class="content ui-widget-content ui-accordion-content-active">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in facilisis orci. Vivamus dapibus feugiat.
  </div>
</div>

<!-- example 2 -->
<div class="accordion green ui-accordion ui-widget">
  <h3 class="ui-accordion-header ui-state-active ui-accordion-header-active">
      <span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span>
      Simple Accordion 
  </h3>
  <div class="content ui-widget-content ui-accordion-content-active">

    <div class="accordion odd ui-accordion ui-widget">
      <h3 class="ui-accordion-header ui-state-active ui-accordion-header-active">
          <span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span>
          Nested Accordion 2.1
      </h3>
      <div class="content ui-widget-content ui-accordion-content-active">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in facilisis orci. Vivamus dapibus feugiat.
      </div>
    </div>

    <div class="accordion odd ui-accordion ui-widget">
      <h3 class="ui-accordion-header ui-state-active ui-accordion-header-active">
          <span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span>
          Nested Accordion 2.2
      </h3>
      <div class="content ui-widget-content ui-accordion-content-active">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in facilisis orci. Vivamus dapibus feugiat.
      </div>
    </div>

  </div>
</div>


<div class="accordion blue ui-accordion ui-widget">
<h3 class="ui-accordion-header ui-state-default"><span class="ui-icon ui-accordion-header-icon ui-icon-plusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-plusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-plusthick"></span>5'nizza</h3>
<div class="content ui-widget-content" style="display: none;"><div class="accordion odd ui-accordion ui-widget">
<h3 class="ui-accordion-header ui-state-active ui-accordion-header-active"><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span>Пятница</h3>
<div class="content ui-widget-content ui-accordion-content-active"><div class="content ui-widget-content ui-accordion-content-active">Сон</div>
<div class="content ui-widget-content ui-accordion-content-active">Вода</div>
<div class="content ui-widget-content ui-accordion-content-active">Я с тобой</div>
<div class="content ui-widget-content ui-accordion-content-active">Ты кидал</div>
<div class="content ui-widget-content ui-accordion-content-active">Стрела</div>
<div class="content ui-widget-content ui-accordion-content-active">Ямайка</div>
<div class="content ui-widget-content ui-accordion-content-active">Свобода</div>
<div class="content ui-widget-content ui-accordion-content-active">Big Badda Boom</div>
<div class="content ui-widget-content ui-accordion-content-active">Нева</div>
<div class="content ui-widget-content ui-accordion-content-active">Солдат</div>
<div class="content ui-widget-content ui-accordion-content-active">Ушедшим слишком рано</div>
<div class="content ui-widget-content ui-accordion-content-active">Пятница</div>
<div class="content ui-widget-content ui-accordion-content-active">Ты на ту</div>
<div class="content ui-widget-content ui-accordion-content-active">Зима</div>
<div class="content ui-widget-content ui-accordion-content-active">Тянуться</div>
</div>
</div>
</div>
</div>
<div class="accordion blue ui-accordion ui-widget">
<h3 class="ui-accordion-header ui-state-default"><span class="ui-icon ui-accordion-header-icon ui-icon-plusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-plusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-plusthick"></span>Above &amp; Beyond</h3>
<div class="content ui-widget-content" style="display: none;"><div class="accordion odd ui-accordion ui-widget">
<h3 class="ui-accordion-header ui-state-active ui-accordion-header-active"><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span>Anjunabeats Volume 7</h3>
<div class="content ui-widget-content ui-accordion-content-active"><div class="content ui-widget-content ui-accordion-content-active">Pink Houses (Vox-Dub Edit)</div>
<div class="content ui-widget-content ui-accordion-content-active">Milano (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">To The Six (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Pacific (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Terminal 6 (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Tonight (Above &amp; Beyond Remix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Call Of Loneliness (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Cadence (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Safe [Wherever You Are] (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Mount Everest (Dennis Sheperd Remix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Green Line (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Anjunabeach (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Paper Jet (Bart Claessen Big Room Remix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Nuclear Fusion (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Autumn (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Misgrey (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Aurora (Sunny Lax Remix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Default (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Everywhere You Are (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Irufushi (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">30 Degrees At Midnight (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Wanderlust (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Moon Dust (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Callista (Stoneface &amp; Terminal Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Venice Beach (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Eclipse (Mat Zo Remix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Fahrenheit (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Downhill (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Anjunabeats Volume 7 CD1 (Continuous Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Anjunabeats Volume 7 CD2 (Continuous Mix)</div>
</div>
</div>
<div class="accordion odd ui-accordion ui-widget">
<h3 class="ui-accordion-header ui-state-active ui-accordion-header-active"><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span>Anjunabeats Volume 8</h3>
<div class="content ui-widget-content ui-accordion-content-active"><div class="content ui-widget-content ui-accordion-content-active">Live Forever (Mat Zo Dub)</div>
<div class="content ui-widget-content ui-accordion-content-active">Stranded In NYC (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">On A Good Day (Metropolis)</div>
<div class="content ui-widget-content ui-accordion-content-active">Anjunabeats Volume 8 CD1 (Continuous Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Anjunabeats Volume 8 CD2 (Continuous Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Sky Falls Away</div>
<div class="content ui-widget-content ui-accordion-content-active">Let Go (Original Mix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Alt+F4 (Dan Stone Remix)</div>
<div class="content ui-widget-content ui-accordion-content-active">Thing Called Love (Club Mix)</div>
</div>
</div>
<div class="accordion odd ui-accordion ui-widget">
<h3 class="ui-accordion-header ui-state-active ui-accordion-header-active"><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span>On A Good Day (Metropolis)</h3>
<div class="content ui-widget-content ui-accordion-content-active"><div class="content ui-widget-content ui-accordion-content-active">On A Good Day (Metropolis) (Extendid Mix)</div>
</div>
</div>
</div>
</div>
<div class="accordion blue ui-accordion ui-widget">
<h3 class="ui-accordion-header ui-state-active ui-accordion-header-active"><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span>Accept</h3>
<div class="content ui-widget-content ui-accordion-content-active"><div class="accordion odd ui-accordion ui-widget">
<h3 class="ui-accordion-header ui-state-active ui-accordion-header-active"><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span><span class="ui-icon ui-accordion-header-icon ui-icon-minusthick"></span>Russian Roulette</h3>
<div class="content ui-widget-content ui-accordion-content-active"><div class="content ui-widget-content ui-accordion-content-active">T.V. War</div>
<div class="content ui-widget-content ui-accordion-content-active">Monster Man</div>
<div class="content ui-widget-content ui-accordion-content-active">Russian Roulette</div>
<div class="content ui-widget-content ui-accordion-content-active">It's Hard to Find a Way</div>
<div class="content ui-widget-content ui-accordion-content-active">Aiming High</div>
<div class="content ui-widget-content ui-accordion-content-active">Another Second to Be</div>
<div class="content ui-widget-content ui-accordion-content-active">Walking in the Shadow</div>
<div class="content ui-widget-content ui-accordion-content-active">Man Enough to Cry</div>
<div class="content ui-widget-content ui-accordion-content-active">Stand Tight</div>
<div class="content ui-widget-content ui-accordion-content-active">Metal Heart (Live)</div>
</div>
</div>
</div>
</div>





                            </div>


                        </div>
                   


<?php	}}