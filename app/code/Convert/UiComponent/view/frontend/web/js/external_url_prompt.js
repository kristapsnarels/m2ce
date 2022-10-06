/**
 * @author Convert Team
 * @copyright Copyright (c) Convert (https://www.convert.no)
 */

define(['jquery'], function ($) {
    'use strict';
    return function (config, element) {
        $(element).click(function(e) {
            if (confirm('Do you really want to leave?')) {
                window.location.href = $(this).attr('href')
            } else {
                e.preventDefault()
            }
        });
    };
});
