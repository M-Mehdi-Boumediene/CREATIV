  jQuery(window).on('elementor:init', function () {
  "use strict";
  
  var closeButton = jQuery('.eicon-close');
  closeButton.on('click', function () {
    jQuery('.widgetarea_iframe_modal').css('display', 'none')
  })

  var ControlBaseDataView = elementor.modules.controls.BaseData;
  var ControlWidgetAreaItemView = ControlBaseDataView.extend({
    ui: function ui() {
      var ui = ControlBaseDataView.prototype.ui.apply(this, arguments);
      ui.inputs = '[type="text"]';
      return ui;
    },

    events: function events() {
      return _.extend(ControlBaseDataView.prototype.events.apply(this, arguments), {
        'change @ui.inputs': 'onBaseInputChange'
      });
    },

    onBaseInputChange: function onBaseInputChange(event) {
      clearTimeout(this.correctionTimeout);
  
      var input = event.currentTarget,
          value = this.getInputValue(input),
          validators = this.validators.slice(0),
          settingsValidators = this.elementSettingsModel.validators[this.model.get('name')];

      this.updateElementModel(value, input);
  
    },
    onDestroy: function onRender() {
      // console.log('boo');
      clearInterval(window.ekitWidgetAreaInterval);
    },
    onRender: function onRender() {
      ControlBaseDataView.prototype.onRender.apply(this, arguments);
      var self = this;

      clearInterval(window.ekitWidgetAreaInterval);
      window.ekitWidgetAreaInterval = setInterval(function(){
        
        var widgetarea_load = jQuery('body').attr('data-elementskit-widgetarea-load'),
        widgetarea_key = jQuery('body').attr('data-elementskit-widgetarea-key');
        
        
        // console.log([widgetarea_key, widgetarea_load, self.isRendered, self.isDestroyed]);
        if(widgetarea_load == 'true' && self.isRendered == true){
          var time = new Date().getTime(),
          new_val,
          widgetarea_key_spilt = widgetarea_key.split('***');

          widgetarea_key_spilt = widgetarea_key_spilt[0];
          new_val = widgetarea_key_spilt + '***' + time;

          jQuery('body').attr('data-elementskit-widgetarea-load', 'false');
          self.setValue(new_val);
        }


      }, 1000);
    }
  },{
    
  });
  elementor.addControlView('widgetarea', ControlWidgetAreaItemView);
});