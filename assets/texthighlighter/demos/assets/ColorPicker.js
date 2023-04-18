var ColorPicker = (function () {
    'use strict';

    var COLORS = [
        '#fc0',
        'unset'
    ];
    var CLASS_SELECTED = 'selected';

    function ColorPicker(el) {
        var self = this;
        this.color = COLORS[0];
        this.selected = null;

        COLORS.forEach(function (color) {
            var div = document.createElement('button');
            
            if(color == 'unset'){
                div.innerHTML = 'Remove Highlight';
            }
            else{
                div.innerHTML = 'Highlight';
            }

            if (self.color === color) {
                div.className = CLASS_SELECTED;
                self.selected = div;
            }

            div.addEventListener('click', function () {
                if (color !== self.color) {
                    self.color = color;

                    if (self.selected) {
                        self.selected.className = '';
                    }

                    self.selected = div;
                    self.selected.className = CLASS_SELECTED;

                    if (typeof self.callback === 'function') {
                        self.callback.call(self, color);
                    }
                }
            }, false);

            el.appendChild(div);
        });

    }


    ColorPicker.prototype.onColorChange = function (callback) {
        this.callback = callback;
    };

    return ColorPicker;
})();