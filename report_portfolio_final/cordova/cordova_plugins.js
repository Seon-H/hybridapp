cordova.define('cordova/plugin_list', function(require, exports, module) {
  module.exports = [
    {
      "id": "cordova-plugin-geolocation.geolocation",
      "file": "plugins/cordova-plugin-geolocation/www/android/geolocation.js",
      "pluginId": "cordova-plugin-geolocation",
      "clobbers": [
        "navigator.geolocation"
      ]
    },
    {
      "id": "cordova-plugin-geolocation.PositionError",
      "file": "plugins/cordova-plugin-geolocation/www/PositionError.js",
      "pluginId": "cordova-plugin-geolocation",
      "runs": true
    },
    {
      "id": "org.apache.cordova.geolocation.Coordinates",
      "file": "plugins/org.apache.cordova.geolocation/www/Coordinates.js",
      "pluginId": "org.apache.cordova.geolocation",
      "clobbers": [
        "Coordinates"
      ]
    },
    {
      "id": "org.apache.cordova.geolocation.PositionError",
      "file": "plugins/org.apache.cordova.geolocation/www/PositionError.js",
      "pluginId": "org.apache.cordova.geolocation",
      "clobbers": [
        "PositionError"
      ]
    },
    {
      "id": "org.apache.cordova.geolocation.Position",
      "file": "plugins/org.apache.cordova.geolocation/www/Position.js",
      "pluginId": "org.apache.cordova.geolocation",
      "clobbers": [
        "Position"
      ]
    },
    {
      "id": "org.apache.cordova.geolocation.geolocation",
      "file": "plugins/org.apache.cordova.geolocation/www/geolocation.js",
      "pluginId": "org.apache.cordova.geolocation",
      "clobbers": [
        "navigator.geolocation"
      ]
    }
  ];
  module.exports.metadata = {
    "cordova-plugin-whitelist": "1.3.4",
    "cordova-plugin-vibration": "3.1.1",
    "cordova-plugin-geolocation": "4.1.0",
    "org.apache.cordova.geolocation": "0.3.6"
  };
});
