/**
 * Created by darknamer on 4/12/16.
 */

/* Config Esri */
var _config = {
  baseUrl: 'esri.darknamer.com/3.16/'
};
var dojoConfig = {
  has: {
    "dojo-firebug": true
  },
  parseOnLoad: false,
  foo: "bar",
  async: true,
  packages: [{
    name: "base",
    location: "./packet/"
  }, {
    name: "package2",
    location: "./package2"
  }]
};
var map = null;
var controller = new Object();
