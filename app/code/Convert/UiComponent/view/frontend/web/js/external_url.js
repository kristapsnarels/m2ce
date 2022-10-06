/**
 * @author Convert Team
 * @copyright Copyright (c) Convert (https://www.convert.no)
 */

define(['uiComponent'], function (Component) {
    'use strict';
    return Component.extend({
        defaults: {
            template: 'Convert_UiComponent/external_url',
            isVisible: false,
            url: null,
            tracks: {
                isVisible: true
            },
        },

        initialize: function() {
            this._super();
        },

        toggleVisibility: function () {
            this.isVisible = !this.isVisible;
        }
    })
});
