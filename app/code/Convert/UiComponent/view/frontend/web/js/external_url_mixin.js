/**
 * @author Convert Team
 * @copyright Copyright (c) Convert (https://www.convert.no)
 */

define([], function () {
    'use strict';
    return function (Component) {
        return Component.extend({
            toggleVisibility: function() {
                console.log('External URL mixin logger')
                return this._super()
            }
        });
    }
});
