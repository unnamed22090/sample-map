/**
 * Created by darknamer on 4/12/16.
 */
require([
  'dojo/domReady!',
  'esri/map',
  'dojo/on',
  'dojo/dom',
  'dojo/dom-style',
  'dojo/mouse',
  'dojo/parser',

  'esri/config'
], function (Ready, Map, on, dom, domStyle, mouse, parser,
             esriConfig) {
  parser.parse();

  _config.map = {
    center: [100.5391145, 13.7634706],
    zoom: 15,
    basemap: 'streets',
    autoResize: true,
    slider: true,
    sliderPosition: "bottom-right"
  };

  map = new Map('mapDiv', _config.map);

  controller.bindingEvent = function () {
    /* On Click Map */
    on(dom.byId('mapDiv'), 'click', function (evt) {
      console.log(evt);
    });
  };
  controller.init = function () {
    controller.bindingEvent();
  };

  controller.init();
});
